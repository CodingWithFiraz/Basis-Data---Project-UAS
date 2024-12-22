<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
      <a href="#koleksi" class="btn_icon">Ayo Baca</a>
    </div>
  
    
  </div>




  <!-- form -->
<form action="function.php" method="post" enctype="multipart/form-data" class="bg-[#8B5DFF] rounded-xl py-5 px-7 font-semibold">
          <div class="form-element my-4 flex items-center gap-12">
              <label for="image">Image </label>
              <input type="file" name="image" id="image">
            </div>

            <div class="flex gap-5">
            <div class="form-element my-4 w-6/12">
                <label for="title">Book title</label><br>
                <input type="text" name="title" placeholder="Book Title" class="form-control bg-[#563A9C] px-5 py-3 w-full rounded-lg font-normal">
            </div>
            <div class="form-element my-4 w-6/12">
                <label for="author">Author name</label><br>
                <input type="text" name="author" placeholder="Author Name" class="form-control bg-[#563A9C] px-5 py-3 w-full rounded-lg font-normal">
            </div>
            </div>
            
            <div class="flex gap-5">
            <div class="form-element my-4 w-6/12">
                <label for="type">Book Type</label><br>
              <select name="type" class="form-control bg-[#563A9C] px-5 py-3 w-full rounded-lg font-normal">
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
            <div class="form-element my-4 w-6/12">
                <label for="description">Book Description</label><br>
                <input type="text" name="description" placeholder="Book Description" class="form-control bg-[#563A9C] px-5 py-3 w-full rounded-lg font-normal">
            </div>
            </div>
            
          
            <div class="form-element mt-8">
                <input type="submit" value="Add book" name="create" class="px-5 py-2 rounded-xl font-semibold border-2 border-white hover:bg-[#6A42C2] hover:border-purple-500 cursor-pointer">
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




    
</body>
</html>