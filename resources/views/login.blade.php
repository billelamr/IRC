<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bubble Tea</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    <div id="bg"></div>

    <form method="POST" action="{{ route('login.log') }}">
        @csrf <!-- Add this line to include the CSRF token -->

        <div class="form-field">
            <input type="email" name="email" placeholder="Email / Username" required />
        </div>

        <div class="form-field">
            <input type="password" name="password" placeholder="Password" required />
        </div>

        <div class="form-field">
            <button class="btn" type="submit">Log in</button>
        </div>
    </form>

</body>

</html>
