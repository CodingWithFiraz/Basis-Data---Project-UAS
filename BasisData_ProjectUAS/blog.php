<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
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
    <!-- BUNG IVANDER -->



    <div class="container-fluid">
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
                <a href="#"><i class="bi bi-book"></i></a>
                <a href="login.php" class="btn_icon">Ayo Baca</a>
            </div>


        </div>

        <div class="blog_bar">
            <h1>blog</h1>
        </div>

        <div class="blog-list row">
            <!-- page 1 -->
            <div class="col-md-4 hidden-left">
                <img src="asset/keluarga-blog.jpeg" alt="">
                <div class="blog-para">
                    <h2>Untuk anak dan orang tua: buku untuk dibaca bersama</h2>
                    <p>Membaca bersama mempererat hubungan anak dan orang tua. Temukan buku-buku seru dan edukatif yang
                        bisa dinikmati bersama, sambil menumbuhkan kecintaan membaca sejak dini.</p>
                    <a href="#">Baca seluruh post</a>
                </div>

            </div>
            <!-- page 2 -->
            <div class="col-md-4 hidden-left">
                <img src="asset/buku-blog.jpeg" alt="">
                <div class="blog-para">
                    <h2>Kisah cinta untuk setiap selera: lucu, aneh, dalam, tragis</h2>
                    <p>Beragam kisah cinta untuk dinikmati — dari yang lucu, aneh, mendalam, hingga tragis. Temukan
                        cerita yang sesuai dengan seleramu!</p>
                    <a href="#">Baca seluruh post</a>
                </div>

                <!-- page 3 -->

            </div>
            <div class="col-md-4 hidden-left">
                <img src="asset/cewe.jpeg" alt="">
                <div class="blog-para">
                    <h2>Bukan hanya bakat: buku untuk membantu Anda percaya diri dan berhasil</h2>
                    <p>Membaca bersama mempererat hubungan anak dan orang tua. Temukan buku-buku seru dan edukatif yang
                        bisa dinikmati bersama, sambil menumbuhkan kecintaan membaca sejak dini.</p>
                    <a href="#">Baca seluruh post</a>
                </div>

            </div>


        </div>
        <!-- page 4 -->
        <div class="blog-list row">
            <div class="col-md-4 hidden-left">
                <img src="asset/bembeng-blog.jpeg" alt="">
                <div class="blog-para">
                    <h2>Kolaborasi Mahasiswa: Strategi untuk Sukses Akademik</h2>
                    <p>Merekomendasi buku yang dapat membantu mahasiswa mengembangkan keterampilan kolaborasi dalam
                        perkuliahan. Dari teknik komunikasi efektif hingga manajemen tim</p>
                    <a href="#">Baca seluruh post</a>
                </div>

            </div>

            <!-- page 5 -->

            <div class="col-md-4 hidden-left">
                <img src="asset/orang-baca-blog.jpeg" alt="">
                <div class="blog-para">
                    <h2>Buku sunyi: Apa Itu dan Bagaimana Cara Membacanya</h2>
                    <p>temukan cara membaca buku jenis ini dengan lebih mendalam dan menikmati pengalaman literasi yang
                        lebih introspekti</p>
                    <a href="#">Baca seluruh post</a>
                </div>

            </div>

            <!-- page 6 -->

            <div class="col-md-4 hidden-left">
                <img src="asset/ui-blog.jpeg" alt="">
                <div class="blog-para">
                    <h2>Prestasi Gemilang Alumni Universitas Indonesia yang Menginspirasi</h2>
                    <p>Alumni Universitas Indonesia telah meraih prestasi membanggakan di berbagai bidang. Simak
                        kisah-kisah inspiratif mereka yang membawa perubahan positif dan menginspirasi banyak orang.</p>
                    <a href="#">Baca seluruh post</a>
                </div>

            </div>


        </div>

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