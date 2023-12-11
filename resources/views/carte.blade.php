@extends('./default')
@section('main')
<div class="c_carte">
    <h1 class="c_title">-----> la carte <-----</h1>
    <div class="c_carte_content">
        <form class="c_boisson" method = "POST" action="/selection">
            @csrf
            <div class="c_bbtea">
                <img src="{{asset("images/lait.png")}}" alt="thé noir lait" title="thé noir lait">
                <p class="c_price">5€</p>
                <div class='c_description'>
                    <p>Ceci est la description du bbtea</p>                        
                    <button input type="submit"><label for="lait">selectionner</label></button>
                    <input type="radio" name="base" value="lait" id="lait">
                </div>
            </div>
            <div class="c_bbtea">
                <img src="{{asset("images/matcha.png")}}" alt="thé noir matcha" title="thé noir matcha">
                <p class="c_price">5€</p>
                <div class='c_description'>
                    <p>Ceci est la description du bbtea</p>                        
                    <button input type="submit"><label for="matcha">selectionner</label></button>
                    <input type="radio" name="base" value="matcha" id="matcha">
                </div>
            </div>
            <div class="c_bbtea">
                <img src="{{asset("images/taro.png")}}" alt="thé noir taro" title="thé noir taro">
                <p class="c_price">5€</p>
                <div class='c_description'>
                    <p>Ceci est la description du bbtea</p>                        
                    <button input type="submit"><label for="taro">selectionner</label></button>
                    <input type="radio" name="base" value="taro" id="taro">
                </div>
            </div>
            <div class="c_bbtea">
                <img src="{{asset("images/citron.png")}}" alt="thé vert citron" title="thé vert citron">
                <p class="c_price">5€</p>
                <div class='c_description'>
                    <p>Ceci est la description du bbtea</p>                        
                    <button input type="submit"><label for="citron">selectionner</label></button>
                    <input type="radio" name="base" value="citron" id="citron">
                </div>
            </div>
            <div class="c_bbtea">
                <img src="{{asset("images/fraise.png")}}" alt="thé vert fraise" title="thé vert fraise">
                <p class="c_price">5€</p>
                <div class='c_description'>
                    <p>Ceci est la description du bbtea</p>                        
                    <button input type="submit"><label for="fraise">selectionner</label></button>
                    <input type="radio" name="base" value="fraise" id="fraise">
                </div>
            </div>
            <div class="c_bbtea">
                <img src="{{asset("images/litchi.png")}}" alt="thé vert litchi" title="thé vert litchi">
                <p class="c_price">5€</p>
                <div class='c_description'>
                    <p>Ceci est la description du bbtea</p>                        
                    <button input type="submit"><label for="litchi">selectionner</label></button>
                    <input type="radio" name="base" value="litchi" id="litchi">
                </div>
            </div>
            <div class="c_bbtea">
                <img src="{{asset("images/mangue.png")}}" alt="thé vert mangue" title="thé vert mangue">
                <p class="c_price">5€</p>
                <div class='c_description'>
                    <p>Ceci est la description du bbtea</p>                        
                    <button input type="submit"><label for="mangue">selectionner</label></button>
                    <input type="radio" name="base" value="mangue" id="mangue">
                </div>
            </div>
        </form>
        <form class="c_recap" method = "POST" action="/">
            <div class="c_panier">
                <p class="c_panier_titre">-----> panier <-----</p>
                <p>Ceci est le récap du panier</p>
            </div>
            <div class="c_total">
                <p>Total = xxx €</p>
            </div>
            <div class="c_payer">
                <button input type="submit">payer</button>
            </div>
        </form>
    </div>    
</div>
@endsection