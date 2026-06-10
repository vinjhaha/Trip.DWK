<?php
session_start();
include "koneksi.php";

$pesan = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah email terdaftar dulu
    $cekUsername = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    
    if(mysqli_num_rows($cekUsername) == 0){
        // Email tidak ditemukan
        $pesan = "<p style='color:red;'>Username belum terdaftar! Silahkan <a href='register.php'>Register</a> dulu.</p>";
    } else {
        // Email ada, cek password
        $cekPassword = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
        
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
    background-image: url('asset/pantai.kapal.bening.jpg');
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

<input type="username" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">Login</button>

</form>

<p>Belum punya akun?</p>

<a href="register.php">Register</a>

</div>

</body>
</html>