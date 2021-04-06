<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Akun Pengguna
            <small>Control Akun Pengguna</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Akun Pengguna</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Data Pengguna</h3>
                        <a href="<?= base_url('pengguna/tambah') ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Pengguna</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="dataTables" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($user->result() as $key => $usr) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $usr->full_name ?></td>
                                        <td><?= $usr->jabatan ?></td>
                                        <td><?= $usr->username ?></td>
                                        <td><?= $usr->password ?></td>
                                        <td><span class="badge bg-default"><?= $usr->role == 1 ? 'Admin' : 'User'; ?></span></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('pengguna/update/' . $usr->id_user) ?>" class="btn btn-primary btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= base_url('pengguna/hapus/' . $usr->id_user) ?>" class="btn btn-danger btn-xs konfirHapus">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>