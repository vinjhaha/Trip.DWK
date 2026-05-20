<?php
session_start();
include "koneksi.php";

$pesan = "";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek apakah email terdaftar dulu
    $cekEmail = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    
    if(mysqli_num_rows($cekEmail) == 0){
        // Email tidak ditemukan
        $pesan = "<p style='color:red;'>Email belum terdaftar! Silahkan <a href='register.php'>Register</a> dulu.</p>";
    } else {
        // Email ada, cek password
        $cekPassword = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
        
        if(mysqli_num_rows($cekPassword) > 0){
            $_SESSION['login'] = true;
            header("Location: index.php");
        } else {
            $pesan = "<p style='color:red;'>Password salah! Coba lagi.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>

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
body{
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    background-image: url('asset/background-bromo.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>
</head>

<body>

<div class="box">

<h2>Login</h2>
<?php echo $pesan; ?>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">Login</button>

</form>

<p>Belum punya akun?</p>

<a href="register.php">Register</a>

</div>

</body>
</html>