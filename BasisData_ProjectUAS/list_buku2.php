<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <style>
    <?php include "style.css"?>
    </style>

</head>

<body>
    <!-- BUNG IPAN -->



    <div class="container-fluid">
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

        <div class="buku-navbar">
            <h1>Daftar buku-buku</h1>
        </div>
        
        
        <div class="buku-list row">
            <!-- page 1 -->
           

        <?Php 
                include("connect.php");
                $sql = "SELECT * FROM book";
                $result = mysqli_query($conn,$sql);
               
                

                while ( $row = mysqli_fetch_array($result)) {
                  
                    ?>

<div class="col-md-4 hidden-left">
                <img src="asset/<?php echo $row['image']?>" alt="">
                <div class="buku-para">
                    <h2><?php echo $row["title"]?></h2>
                    <p><?php echo $row["author"]?></p>
                    <a href="#"><?php echo $row["type"]?></a>
                    <br><br>
                    <a href="halaman_buku.php?id=<?php  echo $row["id"]; ?>" class="tambahkan-buku card-button">Tambahkan</a>
                </div>

            </div>

            <?php
                    
                }
                ?>
           

           

        </div>

        <!-- Komentar orang start-->


        <div class="komentar-ipan hidden-top" id="komentar-ipan">
            <div class="komentar-flex">
                <img src="asset/Talk-Ipan.png" alt="" class="komentator">
                <h2>Ipan Ramadan</h2>
                <p>Mahasiswa</p>
                <h2> “Wahh bukunya keren-keren, banyak juga bukunya sehingga gw bisa banyak buku, apalagi yang teknologi
                    digital.”</h2>

                <!-- Radio -->
                <div class="radio-input-ipan">
                    <label>
                        <input value="value-1" name="value-radio" id="value-1" type="radio" checked="">
                        <span>1</span>
                    </label>
                    <label>
                        <input value="value-2" name="value-radio" id="value-2" type="radio">
                        <span>2</span>
                    </label>
                    <label>
                        <input value="value-3" name="value-radio" id="value-3" type="radio">
                        <span>3</span>
                    </label>
                    <label>
                        <input value="value-3" name="value-radio" id="value-3" type="radio">
                        <span>4</span>
                    </label>
                    <span class="selection"></span>
                </div>
                <!-- Radio -->
            </div>
        </div>


        <!--  Komentar Orang end-->


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


    </div>



    <script src="script.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>


