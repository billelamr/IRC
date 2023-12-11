<!DOCTYPE html>
<html lang = "fr">
    <head>
        <meta charset = "utf-8">
        <title>BubbleMyTea</title>
        <link rel="stylesheet" href="<?php echo asset('css/produit.css')?>" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
        @yield('css')
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            body {
                background-image: url('/images/background.jpg');
                background-size: cover;
                background-position: center center;
                background-attachment: fixed;
                color: white;
                border-radius: 10px;
            }
            header nav {
                background-color:rgb(176, 77, 27);
            }
            .container {
                height: 100vh;
            }
    
            .center-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100%;
            }
    
            .center-content h1,
            .center-content p {
                color: rgb(110, 42, 42);
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"> Bubble Tea </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('inscription') }}">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Connexion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            @yield('main')        
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-U9I97I5iLHpLdD/lnznD7+4Nico4FI1b1P2p1A8a7J2aZsXiFpRTdMIwDJqcS6E6"
                crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JziRSN+8rWh6WWp4PEWkMl25DT6h3//Wrf4hLc5G5fom7yoH6BD8hX6jBj5qDgPI"
                crossorigin="anonymous">
            </script>
        </main>
    </body>
</html>