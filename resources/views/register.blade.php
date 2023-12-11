<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulaire d'Inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <style>
        body {
            background-image: url('/images/background.jpg');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            color: rgb(116, 29, 29);
        }

        .container {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="mb-4">Formulaire d'Inscription</h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
            </ul>
         </div>
        @endif
        <form method="post" action="{{ route('register.store') }}">
            @csrf
            <div class="form-group">
                    <label for="inputEmail">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Votre E-mail">
            </div>

            <div class="form-group">
                <label for="inputTelephone">Numéro de Téléphone</label>
                <input type="tel" class="form-control" id="inputTelephone" name="inputTelephone" placeholder="Votre Numéro de Téléphone">
            </div>
            <div class="form-group">
                <label for="inputAdresse">Adresse</label>
                <input type="text" class="form-control" id="inputAdresse" name="inputAdresse" placeholder="Votre Adresse">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword">Mot de passe</label>
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Mot de passe">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>

    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-U9I97I5iLHpLdD/lnznD7+4Nico4FI1b1P2p1A8a7J2aZsXiFpRTdMIwDJqcS6E6"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JziRSN+8rWh6WWp4PEWkMl25DT6h3//Wrf4hLc5G5fom7yoH6BD8hX6jBj5qDgPI"
        crossorigin="anonymous"></script>

</body>

</html>
