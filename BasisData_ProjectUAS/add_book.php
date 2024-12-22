<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add book</title>
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




  <!-- form -->
<form action="function.php" method="post" enctype="multipart/form-data" class="form-add">
          <div class="">
              <label for="image">Image </label>
              <input type="file" name="image" id="image">
            </div>

            <div class="form-row">
            <div class="form-in">
                <label for="title">Book title</label><br>
                <input type="text" name="title" placeholder="Book Title" class="">
            </div>
            <div class="">
                <label for="author">Author name</label><br>
                <input type="text" name="author" placeholder="Author Name" class="">
            </div>
            </div>
            
            <div class="form-row">
            <div class="form-in">
                <label for="type">Book Type</label><br>
              <select name="type" class="">
                <option value="">Select Book Type</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Psikologi">Psikologi</option>
                <option value="Marketing">Marketing</option>
                <option value="Hukum">Hukum</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Novel">Novel</option>
                <option value="Self Development">Self Development</option>
              </select>
            </div>
            <div class="">
                <label for="description">Book Description</label><br>
                <input type="text" name="description" placeholder="Book Description" class="">
            </div>
            </div>
            
          
            <div class="btn-form">
                <input type="submit" value="Add book" name="create" class="">
            </div>
        </form>


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