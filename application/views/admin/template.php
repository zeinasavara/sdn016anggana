<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SDN 016 Anggana | Dashboard</title>
    <link rel="shortcut icon" href="<?= site_url('assets/') ?>img/twh.png" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>dist/css/skins/_all-skins.min.css">
    <!-- SweetAlert 2 -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>plugins/sweetalert2/sweetalert2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <style>
        .swal2-modal {
            font-size: 10pt !important;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green-light sidebar-mini fixed">
    <div class="wrapper">

        <!-- FLASH MESSAGE -->
        <?php $this->view('admin/flash_message') ?>


        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">0<b>16</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">SDN 016 <b>Anggana</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Kembali Ke Website -->
                        <li>
                            <a href="<?= site_url() ?>" target="_blank">
                                <i class="fa fa-arrow-circle-left"></i> Lihat Website
                            </a>
                        </li>
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?= site_url('assets/admin/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?= site_url('assets/admin/') ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?= site_url('assets/admin/') ?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?= site_url('assets/admin/') ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?= site_url('assets/admin/') ?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= site_url('assets/admin/') ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Administrator</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= site_url('assets/admin/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p class="text-capitalize">
                                        <?= $this->fungsi->user_login()->full_name ?> - <?= $this->fungsi->user_login()->jabatan ? $this->fungsi->user_login()->jabatan : 'Null' ?>
                                        <small>Member since <?= date('M. Y', strtotime($this->fungsi->user_login()->created)) ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Akun Saya</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= site_url('auth/logout') ?>" class="btn btn-danger btn-flat konfirLogout">Keluar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= site_url('assets/admin/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p class="text-capitalize"><?= $this->fungsi->user_login()->full_name ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li <?= $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li class="header">POSTS</li>
                    <li <?= $this->uri->segment(1) == 'gtk' ? 'class="active"' : '' ?>><a href="<?= base_url('gtk') ?>"><i class="fa fa-users"></i> <span>GTK</span></a></li>
                    <li <?= $this->uri->segment(1) == 'kurikulum' ? 'class="active"' : '' ?>><a href="<?= base_url('kurikulum') ?>"><i class="fa fa-book"></i> <span>Kurikulum</span></a></li>
                    <li><a href="javascript:;"><i class="fa fa-image"></i> <span>Galeri</span></a></li>
                    <li class="header">KONFIGURASI WEB</li>
                    <li><a href="javascript:;"><i class="fa fa-envelope-square"></i> <span>Pesan Masuk</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-address-card"></i>
                            <span>Tentang Kami</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="javascript:;"><i class="fa fa-circle-o"></i> Profile Sekolah</a></li>
                            <li><a href="javascript:;"><i class="fa fa-circle-o"></i> Visi & Misi</a></li>
                            <li><a href="javascript:;"><i class="fa fa-circle-o"></i> Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <?php if ($this->fungsi->user_login()->role == 1) : ?>
                        <li class="header">PENGATURAN</li>
                        <li <?= $this->uri->segment(2) == 'pengguna' ? 'class="active"' : '' ?>><a href="<?= base_url('pengguna') ?>"><i class="fa fa-users"></i> <span>Akses Pengguna</span></a></li>
                        <li><a href="<?= base_url('akun') ?>"><i class="fa fa-user"></i> <span>Akun Saya</span></a></li>
                    <?php endif ?>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <?= $contents ?>

        <!-- /.content-wrapper -->
        <footer class="main-footer text-center">
            <strong>&copy; <?= date('Y', time()) ?> <a href="https://sdn016anggana.sch.id/">SD Negeri 016 Anggana</a>.</strong> All rights
            reserved.
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?= site_url('assets/admin/') ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= site_url('assets/admin/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?= site_url('assets/admin/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= site_url('assets/admin/') ?>bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= site_url('assets/admin/') ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= site_url('assets/admin/') ?>dist/js/demo.js"></script>
    <!-- SweetAlert 2 -->
    <script src="<?= site_url('assets/admin/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- DataTables -->
    <script src="<?= site_url('assets/admin/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= site_url('assets/admin/') ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- My Script -->
    <script src="<?= site_url('assets/js/') ?>script.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $('#dataTables').DataTable()
        })
    </script>
</body>

</html>