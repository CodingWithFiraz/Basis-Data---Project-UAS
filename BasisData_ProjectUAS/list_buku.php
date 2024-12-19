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
            <div class="col-md-4">
                <img src="asset/Buku-Ajar-Manajemen-Pemasaran_Achmad-Riza.png" alt="">
                <div class="buku-para">
                    <h2>Manajemen Pemasaran</h2>
                    <p>Membaca bersama mempererat hubungan anak dan orang tua. Temukan buku-buku seru dan edukatif yang
                        bisa dinikmati bersama, sambil menumbuhkan kecintaan membaca sejak dini.</p>
                    <a href="#">Baca seluruh post</a>
                </div>

            </div>
            <!-- page 2 -->
            <div class="col-md-4">
                <img src="asset//Buku-Ajar-Manajemen-Strategi_Zuriani.png" alt="">
                <div class="buku-para">
                    <h2>Manajemen Strategi (Teori dan Aplikasi)</h2>
                    <p>Beragam kisah cinta untuk dinikmati — dari yang lucu, aneh, mendalam, hingga tragis. Temukan
                        cerita yang sesuai dengan seleramu!</p>
                    <a href="#">Baca seluruh post</a>
                </div>

                <!-- page 3 -->

            </div>
            <div class="col-md-4">
                <img src="asset/Buku-Iman-Sebagai-Basis-Psikologi-Pengembangan-Karakter.png" alt="">
                <div class="buku-para">
                    <h2>Iman Sebagai Basis Psikologi Pengembangan Karakter</h2>
                    <p>Membaca bersama mempererat hubungan anak dan orang tua. Temukan buku-buku seru dan edukatif yang
                        bisa dinikmati bersama, sambil menumbuhkan kecintaan membaca sejak dini.</p>
                    <a href="#">Baca seluruh post</a>
                </div>

            </div>


        </div>
        <!-- page 4 -->
        <div class="buku-list row">
            <div class="col-md-4">
                <img src="asset/Cover-Buku-DIGITAL-MARKETING-MELALUI-APLIKASI-PLAYSTORE_Usman-Chamdani.png" alt="">
                <div class="buku-para">
                    <h2>DIGITAL MARKETING MELALUI APLIKASI PLAYSTORE</h2>
                    <p>Merekomendasi buku yang dapat membantu mahasiswa mengembangkan keterampilan kolaborasi dalam
                        perkuliahan. Dari teknik komunikasi efektif hingga manajemen tim</p>
                    <a href="#">Baca seluruh post</a>
                </div>

            </div>

            <!-- page 5 -->

            <div class="col-md-4">
                <img src="asset/Hukum-Perdata-International-Ronald-Saija.png" alt="">
                <div class="buku-para">
                    <h2>Hukum Perdata International</h2>
                    <p>temukan cara membaca buku jenis ini dengan lebih mendalam dan menikmati pengalaman literasi yang
                        lebih introspekti</p>
                    <a href="#">Baca seluruh post</a>
                </div>

            </div>

            <!-- page 6 -->

            <div class="col-md-4">
                <img src="asset/Hukum-Perkawinan-Islam-di-Indonesia-Hamdi.png" alt="">
                <div class="buku-para">
                    <h2>Hukum Perkawinan Islam di Indonesia</h2>
                    <p>Alumni Universitas Indonesia telah meraih prestasi membanggakan di berbagai bidang. Simak
                        kisah-kisah inspiratif mereka yang membawa perubahan positif dan menginspirasi banyak orang.</p>
                    <a href="#">Baca seluruh post</a>
                </div>

            </div>


        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>