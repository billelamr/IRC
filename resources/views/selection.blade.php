@extends('./default')
@section('main')
<form class="c_selection" method = "post" action="/">
    @csrf
    @foreach ($choice as $info)
    <div class="c_image">
        <img src="{{asset("images/{$info->name}.png")}}" alt="{{$info->nom_base}} {{$info->name}}" title="{{$info->nom_base}} {{$info->name}}">
    </div>
    <div class="c_text">
        <p>{{$info->nom_base}} avec une base {{$info->name}} à {{$info->first_price}}€ (hors poppings)</p>
        @endforeach        
    </div>
    <div class="c_option">
        <p class="c_option_title c_cat">poppings:</p>
        <p class="c_option_list c_cat">
        <input type="checkbox" name="tapioca" id="tapioca"><label for="tapioca">tapioca</label><br>
        <input type="checkbox" name="herbe" id="herbe"><label for="herbe">gelée d'herbe</label><br>
        <input type="checkbox" name="aloe" id="aloe"><label for="aloe">aloé véra</label><br>
        <input type="checkbox" name="pomme" id="pomme"><label for="pomme">bille pomme</label><br>
        <input type="checkbox" name="litchi" id="litchi"><label for="litchi">bille litchi</label><br>
        <input type="checkbox" name="fraise" id="fraise"><label for="fraise">bille fraise</label><br>
        <input type="checkbox" name="mangue" id="mangue"><label for="mangue">bille mangue</label><br>
        </p>
    </div>
    <div class="c_option_autre c_cat">
        sucre: <input type="number" id="sucre" name="sucre" min ="0" max="5" step="1" value ="0"><br>
        taille: <input type="radio" name="taille" value="moyen" id="moyen"><label for="moyen">moyen</label>
        <input type="radio" name="taille" value="grand" id="grand"><label for="grand">grand</label><br>
        quantité: <input type="number" id="quantite" name="quantite" min ="1" max="25" step="1" value ="1"><br>
    </div>
    <div class="c_total_option c_cat">
        <button input type="submit">ajouter</button>
        <p>ici 8.50€</p>
    </div> 
</form>
@endsection