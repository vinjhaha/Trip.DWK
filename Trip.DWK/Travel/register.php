<?php
include "koneksi.php";

if(isset($_POST['register'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users VALUES('', '$email', '$password')");

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register</title>

<link rel="stylesheet" href="style.css">

<style>

body{
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    background:#dedede;
}

.box{
    background:white;
    padding:40px;
    width:300px;
    border-radius:10px;
    text-align:center;
}

.box input{
    width:100%;
    padding:10px;
    margin-top:10px;
    box-sizing:border-box;
}

.box button{
    width:100%;
    padding:10px;
    margin-top:20px;
    background:chocolate;
    border:none;
    color:white;
    border-radius:5px;
}

</style>
</head>

<body>

<div class="box">

<h2>Register</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="register">Register</button>

</form>

<p>Sudah punya akun?</p>

<a href="login.php">Login</a>

</div>

</body>
</html>