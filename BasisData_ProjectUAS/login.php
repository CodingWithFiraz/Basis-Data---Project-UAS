<?php

require 'function.php';

if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result)=== 1) {
        //cek apakah ada username di tabel

        $_SESSION['username'] = $username;
        header("Location: index.php");

        // cek password
        // $row = mysqli_fetch_assoc($result);
        //mengambil data dari conn


        // if(password_verify($password, $row['password'])) {
            //indikatornya ada 2 (pass yang belum diacak, yang sudah diacak)
            // header("Location : index.php");
            //jika berhasil maka akan masuk ke menu utama
        //     exit;
        // };
        //password_verify digunakan untuk mencocokan apakah data yang sudah di enkripsi sama dengan teks nya
    } 

    $error = true;
    
}

?>



<!doctype html>
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
    <!-- BUNG IPAN -->

    <h1>Login</h1>
    <p>Welcome back! Please login to your account</p>

<?php if(isset($error)) :?>
    <p style="color: red;">Username / password salah!</p>
<?php endif;?>

<form action="" method="POST">

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
    <li><button type="submit" name="login">Login</button></li>
</ul>
<p>Pengguna baru? <a href="regist.php">Register</a></p>
</form>
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>