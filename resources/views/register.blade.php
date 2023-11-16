<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
    <div class="container">
        <h2>Registrasi</h2>
        <form id="register-form" action="{{route('register_process')}}" method="POST">
            @csrf 
            <label for="register-name">Name:</label>
            <input type="text" id="register-name" name="name" required>

            <label for="register-username">Username:</label>
            <input type="text" id="register-username" name="username" required>

            <label for="register-email">Email:</label>
            <input type="email" id="register-email" name="email" required>

            <label for="register-password">Password:</label>
            <input type="password" id="register-password" name="password" required>

            <button type="submit">Registrasi</button>
        </form>
        <div class="toggle-form">
            <a href="{{route('login')}}">Sudah punya akun? Login di sini.</a>
        </div>
    </div>
</body>
</html>
