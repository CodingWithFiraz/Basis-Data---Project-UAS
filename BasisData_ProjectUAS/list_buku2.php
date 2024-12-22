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
        <div class="navbar">
            <h1>PustakaKita</h1>

            <ul>
                <li><a href="#">
                        Beranda
                    </a></li>
                <li><a href="#">
                        Tentang Kami
                    </a></li>
                <li><a href="#">
                        Koleksi Buku
                    </a></li>
                <li><a href="#">
                        Blog
                    </a></li>
            </ul>

            <div class="icon_nav">
                <a href="#"><i class="bi bi-book"></i></a>
                <a href="#" class="btn_icon">Ayo Baca</a>
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
            <div class="col-md-4">
                <img src="asset/<?php echo $row['image']?>" alt="">
                <div class="buku-para">
                    <h2><?php echo $row["title"]?></h2>
                    <p><?php echo $row["author"]?></p>
                    <a href="#"><?php echo $row["type"]?></a>
                    <br><br><br><br>
                    <a href="halaman_buku.php?id=<?php  echo $row["id"]; ?>" class="tambahkan-buku">Tambahkan</a>
                </div>

            </div>

            <?php
                    
                }
                ?>
           


        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>