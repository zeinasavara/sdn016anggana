<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $header ?>
            <small>Control Akun Pengguna</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= base_url('pengguna') ?>">Akun Pengguna</a></li>
            <li class="active"><?= $header ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                <div class="box box-success">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="POST">
                            <input type="hidden" name="id_user" value="<?= $row->id_user ?>">
                            <div class="form-group">
                                <label for="full_name">Nama Lengkap <small class="text-danger">*</small></label>

                                <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Masukkan Nama Lengkap" value="<?= set_value('full_name') ? set_value('full_name') : $row->full_name ?>">
                                <?= form_error('full_name') ?>
                            </div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan <small class="text-danger">*</small></label>

                                <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukkan Jabatan" value="<?= set_value('jabatan') ? set_value('jabatan') : $row->jabatan ?>">
                                <?= form_error('jabatan') ?>
                            </div>
                            <div class="form-group">
                                <label for="username">Username <small class="text-danger">*</small></label>

                                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username" value="<?= set_value('username') ? set_value('username') : $row->username ?>">
                                <?= form_error('username') ?>
                            </div>
                            <div class="form-group">
                                <?php if ($this->uri->segment(2) == 'update') { ?>
                                    <label for="password">Password <small class="text-danger">(Abaikan jika tidak ingin ubah password)</small></label>
                                <?php } else { ?>
                                    <label for="password">Password <small class="text-danger">*</small></label>
                                <?php } ?>

                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                <?= form_error('password') ?>
                            </div>
                            <div class="form-group">
                                <label for="role">Role <small class="text-danger">*</small></label>

                                <select name="role" id="role" class="form-control" placeholder="Pilih Role">
                                    <option value="" selected disabled>- Pilih Role -</option>
                                    <option value="1" <?= set_value('role') == 1 ? "selected" : NULL ?> <?= $row->role == 1 ? "selected" : NULL ?>>Admin</option>
                                    <option value="2" <?= set_value('role') == 2 ? "selected" : NULL ?> <?= $row->role == 2 ? "selected" : NULL ?>>User</option>
                                </select>
                                <?= form_error('role') ?>
                            </div>
                            <div class="form-group">
                                <a href="<?= base_url('pengguna') ?>" class="btn btn-warning btn-sm pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>

                                <button name="<?= $btn ?>" type="submit" class="btn btn-success btn-sm pull-right" style="margin-left: 5px;"><i class="fa fa-paper-plane-o"></i> Simpan</button>

                                <button type="reset" class="btn btn-default btn-sm pull-right"><i class="fa fa-undo"></i> Reset</button>
                            </div>
                        </form>
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