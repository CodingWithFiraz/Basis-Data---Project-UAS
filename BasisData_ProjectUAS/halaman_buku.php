<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Buku</title>
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
    <!-- BUNG ABHQORI -->
    <div class="container-fluid">
  <!-- Navbar start -->
    <!-- Navbar start -->
    <div class="navbar">
    <h1>PustakaKita</h1>

    <ul>
    <li><a href="index.php">
      Beranda
    </a></li>
    <li><a href="index.php">
      Tentang Kami
    </a></li>
    <li><a href="list_buku2.php">
      Koleksi Buku
    </a></li>
    <li><a href="blog.php">
      Blog
    </a></li>
    </ul>
    
    <div class="icon_nav">
      <a href="add_book.php"><i class="bi bi-book"></i></a>
      <a href="login.php" class="btn_icon">Ayo Baca</a>
    </div>
  
    
  </div>

    <?Php 
            if(isset( $_GET["id"])){
                $id = $_GET["id"];
                include("connect.php");
                $sql = "SELECT * FROM book WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>

    <div class="container-book">
              <div class="dek-buku row">
                <div class="col-md-4">
                <img src="asset/<?php echo $row["image"]; ?>" alt="" class="">
                </div>

                <div class="col-md-8">
                <p class="title_book"><?php echo $row["title"]; ?></p>

                <span class="stock">
                  stok buku
                </span>
                <div class="stock-number">
                  <span>99</span>
                  <a href="#">Pinjam buku</a>
                </div>


                <hr class="line_book">
                <span class="author">Penulis: <p class=""><?php echo $row["author"]; ?></p></span>
                <span class="author">Kategori: <p class=""> <?php echo $row["type"]; ?></p></span>
                
                <hr class="line_book2">
                <h6 class="title_D">Deskripsi</h6>
                <p class=""><?php echo $row["description"]; ?></p>
                
                </div>
              </div>
              
                </div>
                
               

                <?php
            }
             ?>
 <!-- footer start -->
 <div class="footer row">
    <div class="col-md-12">
      <h3>PustakaKita</h3>

      <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="index.php">Tentang Kami</a></li>
        <li><a href="list_buku2.php">Koleksi Buku</a></li>
        <li><a href="blog.php">Blog</a></li>
      </ul>

      <ul class="social-footer">
        <li><a href="#">Ig</a></li>
        <li><a href="#">Yt</a></li>
        <li><a href="#">Tw</a></li>
      </ul>
    </div>

    <div class="col-md-8">
      <div class="footer-pinjam">
        <h1>Pinjam Buku Gratis</h1>
        <a href="#"><i class="bi bi-arrow-up-short"></i></a>
      </div>

      <div class="footer-copy">
        <p>© PustakaKita 2024.</p>
        <a href="#">|Kebijakan Privasi|</a>
        <a href="#">Syarat dan Ketentuan</a>
      </div>

      <span>Semua hak cipta dilindungi undang-undang</span>
    </div>
    <div class="col-md-4">
      <p>Berlangganan ke email kita</p>
      <div class="subs">
        <p>Email</p>
        <a href="#">Berlangganan</a>
      </div>
    </div>
  </div>
  <!-- footer end -->







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>