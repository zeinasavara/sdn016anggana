<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SDN 016 Anggana | Login</title>
    <link rel="shortcut icon" href="<?= site_url('assets/') ?>img/twh.png" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>dist/css/AdminLTE.min.css">
    <!-- SweetAlert 2 -->
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>plugins/sweetalert2/sweetalert2.min.css">
    <style>
        .swal2-modal {
            font-size: 10pt !important;
        }
    </style>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box" style="margin-top: 3%;">
        <div class="row">
            <div class="col-12" style="display: flex; justify-content: center;">
                <img src="<?= site_url('assets/img/twh.png') ?>" alt="Tut Wuri Handayani" style="width: 20%;">
            </div>
        </div>
        <div class="login-logo" style="margin-bottom: 10px;">
            <a href="<?= site_url('assets/admin/') ?>index2.html">SD Negeri 021 <b>Anggana</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body" style="border-radius: 20px;">
            <p class="login-box-msg">Silahkan login untuk memulai sesi anda.</p>

            <!-- FLASH MESSAGE -->
            <?php $this->view('admin/flash_message') ?>

            <form action="<?= site_url('auth') ?>" method="post">
                <div class="form-group has-feedback">
                    <input name="username" type="username" class="form-control" placeholder="Username" value="<?= set_value('username'); ?>" autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <?= form_error('username', '<p class="text-danger text-center">', '</p>') ?>
                </div>
                <div class="form-group has-feedback">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('password', '<p class="text-danger text-center">', '</p>') ?>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <a href="<?= site_url() ?>" class="btn btn-warning btn-block"><i class="fa fa-arrow-circle-left"></i> Website</a>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4 pull-right">
                        <button type="submit" class="btn btn-primary btn-block" name="login">Masuk</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?= site_url('assets/admin/') ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= site_url('assets/admin/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SweetAlert 2 -->
    <script src="<?= site_url('assets/admin/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- My Script -->
    <script src="<?= site_url('assets/js/') ?>script.js"></script>
</body>

</html>