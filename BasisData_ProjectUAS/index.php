<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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

<!-- animate -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  </head>
  <body>
    <!-- BUNG PRASSSSSSS -->
<div class="container-fluid">
  <!-- Navbar start -->
  <div class="navbar">
    <h1>PustakaKita</h1>

    <ul>
    <li><a href="index.php">
      Beranda
    </a></li>
    <li><a href="#tentang">
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

  <!-- Navbar End -->

  <!-- Jumbotron start -->
  <div class="jumbo">
  <iframe src='https://my.spline.design/booksleeveexperiment-58476fc0c86464a037eb6f005c59cba5/' frameborder='0' width='100%' height='100%' class="spline-img"></iframe>
    <span >#1 WEBSITE PEMINJAMAN BUKU</span>
    <h1 class="animate__animated animate__slideInLeft">Membaca Bersama, <br>
    Tumbuh Bersama</h1>
    <p class="animate__animated animate__slideInLeft">Kami adalah perpustakaan digital yang berkomitmen untuk memberikan akses mudah dan nyaman bagi semua orang untuk menikmati dunia literasi</p>
    <a href="#koleksi" class="hidden-bottom">Pinjam Buku Favoritmu</a>

    <hr>
    <div class="bottom-jumbo">
      <p>Petualangan Membaca Tanpa Batas, Hanya dengan Sentuhan Jari</p>
      <a href="#koleksi"><i class="bi bi-arrow-down-short"></i></a>
    </div>
  </div>

  <!-- Jumbotron end -->

  <!-- Tentang Kami start -->
   <div class="tentang" id="tentang">
    <div class="row">
    <div class="col-md-6 hidden-left">
      <h2>Tentang Kami</h2>
      <p> Dengan koleksi buku yang terus bertambah dan fitur-fitur yang inovatif, kami hadir untuk menemani Anda dalam setiap perjalanan membaca</p>
      
      <div class="d-flex">
      <img src="asset/OWNER.png" alt="" class="owner">
      <p>Pembuat Pustaka</p>
      </div>
      
    </div>
    <div class="col-md-6 hidden-right ">
      <img src="asset/botak-nuklis-tentang.png" alt="" class="images-tentang">
    </div>
    </div>
   
<!-- kelebihan start -->
    <div class="kelebihan row">
      <h2>Lebih dari Sekadar Buku, <br>
      Ini adalah Petualangan Membaca yang Interaktif</h2>
      <!-- card1 -->
      <div class="parent col-md-3 hidden-top">
  <div class="card">
      <div class="content-box">
          <span class="card-title">Koleksi Buku Lengkap</span>
          <p class="card-content">
          Temukan jutaan judul buku dari berbagai genre, mulai dari fiksi hingga non-fiksi, semua tersedia dalam genggaman Anda 
          </p>
      </div>
      <div class="date-box">
          <i class="bi bi-journals"></i>
      </div>
  </div>
</div>

  <!-- card2 -->
  <div class="parent col-md-3 hidden-top">
  <div class="card">
      <div class="content-box">
          <span class="card-title">Akses 24/7</span>
          <p class="card-content">
          Nikmati kebebasan membaca kapan saja dan di mana saja, tanpa perlu khawatir tentang jam buka perpustakaan
          </p>
      </div>
      <div class="date-box">
      <i class="bi bi-people-fill"></i>
      </div>
  </div>
</div>


  <!-- card3 -->
  <div class="parent col-md-3 hidden-top">
  <div class="card">
      <div class="content-box">
          <span class="card-title">Pinjam Buku Gratis</span>
          <p class="card-content">
          Pinjam buku favorit Anda secara gratis dan nikmati tanpa batas waktu 
          </p>
      </div>
      <div class="date-box">
      <i class="bi bi-cash-stack"></i>
      </div>
  </div>
</div>


  <!-- card4 -->
  <div class="parent col-md-3 hidden-top">
  <div class="card">
      <div class="content-box">
          <span class="card-title">Rekomendasi Buku</span>
          <p class="card-content">
          Dapatkan rekomendasi buku yang sesuai dengan minat Anda, sehingga Anda tidak akan pernah kehabisan bacaan
          </p>
      </div>
      <div class="date-box">
      <i class="bi bi-journal-bookmark-fill"></i>
      </div>
  </div>
</div>

    </div>
    <!-- kelebihan end -->
    <!-- koleksi starT -->
     <div class="row hidden-top" id="koleksi">
        <div class="col-md-6">
          <h3>Jelajahi koleksi kami dan temukan buku impian Anda!</h3>
          <p> Jangan lewatkan kesempatan untuk meminjam buku terbaru dari penulis favorit Anda. Klik di sini untuk mulai menjelajah!</p>

          <div class="koleksi-btn">
            <a href="list_buku2.php">Pinjam Buku Sekarang</a>
            <a href="login.php" class="btn-login">Login Sekarang</a>
          </div>
        </div>
        <div class="col-md-6">
          <img src="asset/patung-koleksi.png" alt="">
        </div>
     </div>
    <!-- koleksi end -->

    
   </div>
  <!-- Tentang Kami End -->

  <!-- perpustakaan start -->
   <div class="perpustakaan">
    <div class="row">
      <div class="col-md-6">
        <h3>Perpustakaan <br> Terbaik</h3>
      </div>
      <div class="col-md-6">
        <div class="lokasi-perpus">
          <a href="#">
          <p>Perpustakaan Nasional Republik Indonesia </p>
          </a>
          <span>Jakarta</span>
        </div>

        <div class="lokasi-perpus">
          <a href="#">
          <p>Perpustakaan Universitas Indonesia</p>
          </a>
          <span>Jakarta</span>
        </div>

        <div class="lokasi-perpus">
          <a href="#">
          <p>Perpustakaan Kota Bandung</p>
          </a>
          <span>Bandung</span>
        </div>
      </div>
    </div>

    <!-- blog -->
     <div class="blog row">
      <h3>Blog</h3>
      <div class="col-md-6 hidden-left">
        <a href="#">
        <img src="asset/bembeng-blog.jpeg" alt="">
        <h5>Kolaborasi Mahasiswa: Strategi untuk Sukses Akademik</h5>
        <p>Rekomendasi buku yang dapat membantu mahasiswa mengembangkan keterampilan kolaborasi dalam perkuliahan. Dari teknik komunikasi efektif hingga manajemen tim</p>
        </a>
       
      </div>

      <div class="col-md-6 hidden-right">
        <a href="#">
        <img src="asset/keluarga-blog.jpeg" alt="">
        <h5>Bukan hanya bakat: buku untuk membantu Anda percaya diri dan berhasil</h5>
        <p>Keberhasilan butuh lebih dari sekadar bakat. Temukan buku-buku yang membantu membangun kepercayaan diri dan mengembangkan potensi diri untuk meraih sukses</p>
        </a>
       
      </div>
     </div>
   </div>
  <!-- perpustakaan end -->

  <!-- best-seller start -->
   <div class="best-seller row">
    <!-- card1 -->
    <div class="col-md-4 hidden-left "  id="best-seller">
    <div class="flip-card col-md-4" id="best-seller">
    <div class="flip-card-inner">
        <div class="flip-card-front">
        <a href="#">

        <img src="asset/tereliye_best.png" alt="">
        </a>
        </div>
        <div class="flip-card-back">
            <p class="title">Bumi</p>
            <p>Tere Liye</p>
        </div>
    </div>
</div>
    </div>


    <!-- card2 -->
    <div class="col-md-4 hidden-top" >
    <div class="flip-card col-md-4" id="best-seller">
    <div class="flip-card-inner">
    <h3>3 Buku Terlaris</h3>
        <div class="flip-card-front">
        <a href="#">
       
        <img src="asset/atomic-best.png" alt="">
        </a>
        </div>
        <div class="flip-card-back">
            <p class="title">Atomic Habits</p>
            <p>James Clear</p>
        </div>
    </div>
</div>
    </div>



    <!-- card3 -->
    <div class="col-md-4 hidden-right">
    <div class="flip-card col-md-4" id="best-seller">
    <div class="flip-card-inner">
        <div class="flip-card-front">
        <a href="#">

        <img src="asset//potter-best.png" alt="">
        </a>
        </div>
        <div class="flip-card-back">
            <p class="title">Harry Potter and The Deathly Hallows</p>
            <p>J.K Rowling</p>
        </div>
    </div>
</div>
    </div>

   </div>
  <!-- best-seller end -->

  <!-- footer start -->
  <div class="footer row">
    <div class="col-md-12">
      <h3>PustakaKita</h3>

      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#tentang">Tentang Kami</a></li>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>