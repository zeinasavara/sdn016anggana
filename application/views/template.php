<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- MDB -->
    <link href="<?= site_url('assets/') ?>css/mdb.min.css" rel="stylesheet" />

    <!-- OverlayScrollbars -->
    <!-- <link rel="stylesheet" href="dist/OverlayScrollbars/css/OverlayScrollbars.min.css"/> -->

    <!-- My Style CSS -->
    <link rel="stylesheet" href="<?= site_url('assets/') ?>css/style.css">

    <title>SDN 016 Anggana</title>
    <link rel="shortcut icon" href="<?= site_url('assets/') ?>img/twh.png" />

    <style type="text/css">
        .bg-cover {
            background-image: url('<?= site_url('assets/') ?>img/banner/banner1.jpg');
        }
    </style>
</head>

<body id="beranda">

    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top" id="navbar-example2">
        <div class="container">
            <a class="navbar-brand fw-bolder" href="<?= site_url() ?>">SD Negeri 016 Anggana</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white <?= $this->uri->segment(1) == '' ? 'active' : '' ?>" href="<?= base_url('#beranda') ?>">Beranda</a>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white <?= $this->uri->segment(1) == 'ptk' ? 'active' : '' ?>" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            PTK
                            <i class="fas fa-caret-down"></i>
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu rounded-0" aria-labelledby="navbarDropdown" style="min-width: 100%;">
                            <li><a class="dropdown-item" href="<?= base_url('ptk/kalenderakademik') ?>">Tenaga Kependidikan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('ptk/esktrakurikuler') ?>">Guru</a></li>
                        </ul>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white <?= $this->uri->segment(1) == 'kurikulum' ? 'active' : '' ?>" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            Kurikulum
                            <i class="fas fa-caret-down"></i>
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu rounded-0" aria-labelledby="navbarDropdown" style="min-width: 100%;">
                            <li><a class="dropdown-item" href="<?= base_url('kurikulum/kalenderakademik') ?>">Kalender Akademik</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('kurikulum/ekstrakurikuler') ?>">Ekstrakurikuler</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('#galeri') ?>">Galeri</a>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white <?= $this->uri->segment(1) == 'about' ? 'active' : '' ?>" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                            <i class="fas fa-caret-down"></i>
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu rounded-0" aria-labelledby="navbarDropdown" style="min-width: 100%;">
                            <li><a class="dropdown-item" href="<?= base_url('about/profile') ?>">Profile Sekolah</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('#visimisi') ?>">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('about/struktur') ?>">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item my-lg-auto my-2 mx-lg-2 mx-auto border-0">
                        <a class="btn btn-primary btn-sm btn-rounded" href="<?= base_url('kontak') ?>">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <?= $contents ?>


    <footer class="bg-success text-white text-center text-md-start pt-4 pb-2">
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-4">
                    <h3 class="text-uppercase fw-bold">Kontak</h3>
                    <h5 class="text-uppercase">SD Negeri 016 Anggana</h5>

                    <span class="fw-bold">Email</span>
                    <p class="mb-0"><a href="mailto:sdn016anggana@gmail.com" class="text-white">sdn016anggana@gmail.com</a></p>
                    <span class="fw-bold">Telepon</span>
                    <p class="mb-0">+62-21 8932 3188</p>
                    <span class="fw-bold">Alamat</span>
                    <p class="mb-0">RT 07 Sepatin, Sepatin, Kec. Anggana, Kab. Kutai Kartanegara Prov. Kalimantan Timur
                        - Indonesia</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0 mx-auto">
                    <h3 class="text-uppercase fw-bold">Lokasi</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15957.798353677956!2d117.5927103!3d-0.7789683!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x627f2ba01b61d265!2sSDN%20016%20Anggana!5e0!3m2!1sen!2sid!4v1616059889896!5m2!1sen!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->
        <p class="text-center mt-3">© 2021 SD Negeri 016 Anggana. All Rights Reserved</p>
    </footer>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- MDB -->
    <script type="text/javascript" src="<?= site_url('assets/') ?>js/mdb.min.js"></script>

    <!-- OverlayScrollbars -->
    <!-- <script src="dist/OverlayScrollbars/js/OverlayScrollbars.min.js"></script> -->
    <script>
        $('.bg-image').on('click', function() {
            var img = $('.img-gallery', this).attr('src')
            $('.img-modal').attr('src', img)
        })
    </script>
</body>

</html>