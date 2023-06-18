<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOme page</title>
</head>
<body>
    @auth
    <p>Congrats you are logged in!</p>
    <form action="/logout" method="POST">
    @csrf
    <button>Logout</button>
    </form>
        @else
        <div style=" border: 3px solid black ">
            <h3>Registration page</h3>
            <form action="/register" method="POST">
                @csrf
                <input  type="text" name="name"placeholder="Name">
                <input type="text" name="email" placeholder="Eamil">
                <input type="password" name="password" placeholder="password">
                <button>Register</button>
            </form>
            <div style=" border: 3px solid black ">
                <h3>Login page</h3>
                <form action="/login" method="POST">
                    @csrf
                    <input  type="text" name="loginname"placeholder="Name">
                    <input type="password" name="loginpassword" placeholder="password">
                    <button>log in</button>
    @endauth
    </div>
</body>
</html>