<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
<link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="{{route('login_process')}}" method="POST">
            @csrf
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <div class="toggle-form">
            <a href="{{route('register')}}">belum punya akun? Registrasi di sini.</a>
        </div>
    </div>

</body>
</html>
