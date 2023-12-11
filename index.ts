import express, { Request, Response, NextFunction, response } from 'express';
import http, { IncomingMessage, request } from 'http';
import bodyParser from "body-parser";
import {db} from './db';
import expressSession, {SessionData} from 'express-session';
import { RowDataPacket } from 'mysql2';
import { Server, Socket } from 'socket.io';;

declare module 'express-session'{
    interface SessionData{
        user?: {id: number, username: string};
    }
}

interface SessionIncomingMessage extends IncomingMessage {
    session: SessionData
};

interface SessionSocket extends Socket{
    request: SessionIncomingMessage
};
const app = express();
const httpServer = http.createServer(app);
const io = new Server(httpServer);

const session = expressSession({
    secret: 'verysecret',
    resave: false,
    saveUninitialized: true,
    cookie: {}
})
const wrapper = (middleware: any) => (socket: Socket, next: any) => middleware (socket.request , {}, next);
io.use(wrapper(session));
const jsonParser = bodyParser.json();
const urlencodedParser = bodyParser.urlencoded({extended: true});


app.use(jsonParser);
app.use(urlencodedParser);
app.use(session);
app.use(express.static(__dirname));
app.get('/', (req: Request, res: Response) => {
    if(req.session.user){
        res.send("hi" + req.session.user.username + "!");
    }else{
        res.send("you are not log");
    }
    
});

app.get('/login', (req: Request, res: Response, next: NextFunction) => {
    res.sendFile(__dirname + "/login.html");
});

app.post('/login', (req: Request, res: Response, next: NextFunction) => {
   const username = req.body.username;
   const password = req.body.password;
   if(username && password){
    const query = "select * from users where username = ?";
    db.query(query, username,(error,result) => {
        if (error){
            console.log(error);
            response.send("user not found");
        }else{
            console.log("user not found");
            const data =<RowDataPacket> result;
            req.session.user = {
                id: data[0].id,
                username : data[0].username
            }
            console.log(result);
            res.redirect("/")
        }
    })
   }else{
    console.log("username or password missing");
    res.send("username or password missing");
   }
})

app.get('/chat', (req: Request, res: Response) => {
    if(req.session.user){
        res.sendFile(__dirname + "/chat.html");
    }else{
        res.redirect('/');
    }
    
});

io.on('connection',(defaultSocket: Socket) =>{
    const Socket= <SessionSocket> defaultSocket;
    const userSession = Socket.request.session.user;
    if(userSession){
        console.log(userSession?.username + " is connected ");
    Socket.on('chat message', (msg) => {
        io.emit('chat message',userSession.username + ": " +msg);
     });
      Socket.on('disconnect', () => {
        console.log("user disconnected");
    })  
    }
})

httpServer.listen(3000, () => {
    console.log("hello world");
});
