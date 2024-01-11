<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration</title>
    <link rel="stylesheet" href="assets/css/register.css">
</head>

<body>
    <div class="wrapper">
        <h2>Registration</h2>
        <form action="/post_register" method="post">
            <div class="input-box">
                <input type="text" placeholder="Enter your name" name="name" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Enter your email" name="email" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Create password" name="password" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm password" name="confpassword" required>
            </div>
            <div class="policy">
                <input type="checkbox">
                <h3>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Register Now" name="Register">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="/login">Login now</a></h3>
            </div>
        </form>
    </div>
</body>

</html>