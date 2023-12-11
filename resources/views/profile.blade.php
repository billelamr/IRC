@extends('default')
@section('css') 
<link rel="stylesheet" href="<?php echo asset('css/profile.css')?>" type="text/css">
@endsection
@section('title','Profil')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
@endif
    <form action="" method="POST">
        @csrf
        <label for="email">Adresse E-mail</label><br>
        <input type="email" name="email" id="email" value={{$mail}}><br><br>
        <label for="cpassword">Mot de passe actuel</label><br>
        <input type="password" name="cpassword" id="cpassword"><br><br>
        <label for="npassword">Nouveau mot de passe</label><br>
        <input type="password" name="npassword" id="npassword"><br><br>
        <label for="confirm_password">Confirmez le mot de passe</label><br>
        <input type="password" name="confirm_password" id="confirm_password"><br><br>
        <label for="phone">Téléphone</label><br>
        <input type="text" name="phone" id="phone" value={{$phone}}><br><br>
        <label for="address">Adresse</label><br>
        <input type="text" name="address" id="address" value={{$address}}><br><br>
        <button>Enregistrer</button>
    </form>
    <a href="/profile/history">Historique</a>
@endsection
