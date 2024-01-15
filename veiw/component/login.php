<?php
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login</span></div>
            <h1></h1>
            <form action="/post_login" method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" id="email" placeholder="Email or Phone">
                    <div class="error"></div>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password">
                    <div class="error"></div>
                </div>
                <div class="pass"><a href="#">Forgot password?</a></div>
                <div class="row button">
                    <input type="submit" value="Login" name="Login">
                </div>
                <span style="color:red;"></span>
                <div class="signup-link">Not a member? <a href="/register">Signup now</a></div>
            </form>
        </div>
    </div>
    <script>
        const email = document.getElementById('email');
        const password = document.getElementById('password');

        const isValidEmail = (email) => {
            const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            return re.test(String(email).toLowerCase());
        }
    </script>
</body>

</html>