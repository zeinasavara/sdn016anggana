<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SDN 016 Anggana | CPanel</title>

    <link rel="shortcut icon" href="<?= site_url('assets/img/' . $this->fungsi->setting()->icon_title) ?>" />

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
    <!-- Froala Editor -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>bower_components/froala_editor/css/froala_editor.css">
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
                                <?php if (count($this->fungsi->inbox()) != NULL) { ?>
                                    <span class="label label-warning"><?= count($this->fungsi->inbox()) ?></span>
                                <?php } ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if (count($this->fungsi->inbox()) != NULL) { ?>
                                    <li class="header">Anda mendapat <?= count($this->fungsi->inbox()) ?> pesan baru.</li>
                                <?php } else { ?>
                                    <li class="header text-center">Tidak ada pesan masuk</li>
                                <?php } ?>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <?php foreach ($this->fungsi->inbox() as $key => $inbox) { ?>
                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="<?= site_url('assets/img/visitors.png') ?>" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        <?= $inbox->nama_lengkap ?>
                                                        <small><i class="fa fa-clock-o"></i> <?= time_ago(strtotime($inbox->sent))  ?></small>
                                                    </h4>
                                                    <p><?= substr($inbox->pesan, 0, 30) . ' ....' ?></p>
                                                    <p><?= date('d F Y H:i:s', strtotime($inbox->sent)) ?></p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li class="footer"><a href="<?= base_url('inbox') ?>">Lihat Semua Pesan</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= site_url('assets/img/admin.png') ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $this->fungsi->user_login()->full_name ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= site_url('assets/img/admin.png') ?>" class="img-circle" alt="User Image">

                                    <p class="text-capitalize">
                                        <?= $this->fungsi->user_login()->full_name ?> - <?= $this->fungsi->user_login()->jabatan ? $this->fungsi->user_login()->jabatan : 'Null' ?>
                                        <small>Member since <?= date('M. Y', strtotime($this->fungsi->user_login()->created)) ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?= base_url('akunsaya') ?>" class="btn btn-default btn-flat">Akun Saya</a>
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
                        <img src="<?= site_url('assets/img/admin.png') ?>" class="img-circle" alt="User Image">
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
                    <li <?= $this->uri->segment(1) == 'galeri' ? 'class="active"' : '' ?>><a href="<?= base_url('galeri/data') ?>"><i class="fa fa-image"></i> <span>Galeri</span></a></li>

                    <li class="header">KONFIGURASI WEB</li>
                    <li <?= $this->uri->segment(1) == 'tentangkami' ? 'class="active"' : '' ?>><a href="<?= base_url('tentangkami') ?>"><i class="fa fa-address-card"></i> <span>Tentang Kami</span></a></li>
                    <li <?= $this->uri->segment(1) == 'inbox' ? 'class="active"' : '' ?>><a href="<?= base_url('inbox') ?>"><i class="fa fa-envelope-square"></i> <span>Pesan Masuk</span></a></li>
                    <li <?= $this->uri->segment(1) == 'setting' ? 'class="active"' : '' ?>><a href="<?= base_url('setting') ?>"><i class="fa fa-gears"></i> <span>Setting</span></a></li>

                    <?php if ($this->fungsi->user_login()->role == 1) : ?>
                        <li class="header">PENGATURAN</li>
                        <li <?= $this->uri->segment(1) == 'pengguna' ? 'class="active"' : '' ?>><a href="<?= base_url('pengguna') ?>"><i class="fa fa-users"></i> <span>Akses Pengguna</span></a></li>
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
    <!-- CK Editor -->
    <script src="<?= site_url('assets/admin/') ?>/bower_components/ckeditor/ckeditor.js"></script>
    <!-- Froala Editor -->
    <script type="text/javascript" src="<?= site_url('assets/admin/') ?>bower_components/froala_editor/js/froala_editor.min.js"></script>
    <script type="text/javascript" src="<?= site_url('assets/admin/') ?>bower_components/froala_editor/js/plugins/align.min.js"></script>
    <script type="text/javascript" src="<?= site_url('assets/admin/') ?>bower_components/froala_editor/js/plugins/paragraph_format.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= site_url('assets/admin/') ?>bower_components/chart.js/Chart.js"></script>
    <!-- My Script -->
    <script src="<?= site_url('assets/js/') ?>script.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $('#dataTables').DataTable({
                "scrollX": true
            })
            $('#dataTables1').DataTable({
                "scrollX": true
            })
            $('#dataTables2').DataTable({
                "pageLength": 5,
                "lengthMenu": [
                    [5, 25, 50, -1],
                    [5, 25, 50, "All"]
                ],
                "scrollX": true
            })
        })

        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            CKEDITOR.replace('editor2')
        })

        new FroalaEditor('textarea#froala-editor')
    </script>

    <script>
        $(function() {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            var areaChartData = {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktoner', 'November', 'Desember'],
                datasets: [{
                        label: 'Pengunjung',
                        fillColor: 'rgba(210, 214, 222, 1)',
                        strokeColor: 'rgba(210, 214, 222, 1)',
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [65, 59, 80, 81, 56, 55, 40, 23, 15, 22, 25, 12]
                    },
                    {
                        label: 'Pesan Masuk',
                        fillColor: 'rgba(60,141,188,0.9)',
                        strokeColor: 'rgba(60,141,188,0.8)',
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [28, 48, 40, 19, 86, 27, 90, 12, 34, 54, 34, 19]
                    }
                ]
            }

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChart = new Chart(barChartCanvas)
            var barChartData = areaChartData
            barChartData.datasets[1].fillColor = '#00a65a'
            barChartData.datasets[1].strokeColor = '#00a65a'
            barChartData.datasets[1].pointColor = '#00a65a'
            var barChartOptions = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: true,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - If there is a stroke on each bar
                barShowStroke: true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth: 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing: 5,
                //Number - Spacing between data sets within X values
                barDatasetSpacing: 1,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to make the chart responsive
                responsive: true,
                maintainAspectRatio: true
            }

            barChartOptions.datasetFill = false
            barChart.Bar(barChartData, barChartOptions)
        })
    </script>

</body>

</html>