<?php
require 'function.php';


if(isset($_POST['register'])) {
//jika tombol dipencet

    if(registrasi($_POST) > 0) {
    //mengecek apakah data berhasil ditambahkan
        echo "<Script> alert('user baru berhasil ditambhakan')</script>";
    } else {
        echo mysqli_error($conn);
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- CSS -->
<style>
  <?php include "style.css" ?>
</style>

</head>

<body>

<h1>Register</h1>
<p>Daftar akun mu</p>

<form method="POST">

<ul>
    <li>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </li>
    <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <label for="password2">Konfirmasi Password</label>
        <input type="password" name="password2" id="password2">
    </li>
    <li>
        <button type="submit" name="register">Register</button>
    </li>
</ul>

<p>Sudah punya akun? <a href="login.php">login</a></p>
</form>
    






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>