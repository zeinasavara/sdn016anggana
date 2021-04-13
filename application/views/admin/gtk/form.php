<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $header ?>
            <small>Control Data GTK</small>
        </h1>
        <ol class="breadcrumb text-capitalize">
            <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><?= $breadcrumb ?></a></li>
            <li class="active"><?= $header ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <form role="form" method="POST" enctype="multipart/form-data">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                    <div class="box box-success">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <input type="hidden" name="id_gtk" value="<?= $row->id_gtk ?>">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap <small class="text-danger">*</small></label>

                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" value="<?= set_value('nama') ? set_value('nama') : $row->nama ?>">
                                <?= form_error('nama') ?>
                            </div>
                            <div class="form-group">
                                <label for="nip">NIP</label>

                                <input type="number" name="nip" class="form-control" id="nip" placeholder="Masukkan NIP" value="<?= set_value('nip') ? set_value('nip') : $row->nip ?>">
                                <?= form_error('nip') ?>
                            </div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan <small class="text-danger">*</small></label>

                                <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukkan Jabatan" value="<?= set_value('jabatan') ? set_value('jabatan') : $row->jabatan ?>">
                                <?= form_error('jabatan') ?>
                            </div>
                            <div class="form-group">
                                <label for="gtk">GTK <small class="text-danger">*</small></label>

                                <select name="gtk" id="gtk" class="form-control" placeholder="Pilih GTK">
                                    <option value="" selected disabled>- Pilih GTK -</option>
                                    <option value="1" <?= set_value('gtk') == 1 ? "selected" : NULL ?> <?= $row->gtk == 1 ? "selected" : NULL ?>>Guru</option>
                                    <option value="2" <?= set_value('gtk') == 2 ? "selected" : NULL ?> <?= $row->gtk == 2 ? "selected" : NULL ?>>Tenaga Kependidikan</option>
                                </select>
                                <?= form_error('gtk') ?>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto <small>(format: jpg, jpeg, png | size: max 2MB | default jika tidak ada foto)</small></label>
                                <?php if ($this->uri->segment(2) == 'update') { ?>
                                    <img src="<?= site_url('assets/img/ptk/' . $row->foto) ?>" alt="<?= $row->foto ?>" class="profile-user-img img-responsive" style="margin: 0 0 5px 0;">
                                    <a href="<?= base_url('gtk/rstfoto/' . $row->id_gtk) ?>" class="btn btn-danger btn-sm konfirReset" style="margin: 0 0 5px 12px;">Reset Foto</a>
                                <?php } ?>
                                <input type="file" name="foto" id="foto" class="form-control">
                                <?= form_error('foto') ?>
                            </div>
                            <div class="form-group">
                                <label for="status">Status <small class="text-danger">*</small></label>
                                <br>
                                <label for="stat1" style="font-weight: normal; margin-bottom: 0;">
                                    <input type="radio" name="status" id="stat1" value="1" <?= set_value('status') == 1 ? "checked" : NULL ?> <?= $row->status == 1 ? "checked" : NULL ?>> Aktif
                                </label>
                                <label for="stat2" style="font-weight: normal; margin-bottom: 0;">
                                    <input type="radio" name="status" id="stat2" value="2" style="margin: 0 0 0 10px;" <?= set_value('status') == 2 ? "checked" : NULL ?> <?= $row->status == 2 ? "checked" : NULL ?>> Nonaktif
                                </label>
                                <br>
                                <?= form_error('status') ?>
                            </div>
                            <div class="form-group">
                                <a href="<?= base_url('gtk') ?>" class="btn btn-warning btn-sm pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>

                                <button name="<?= $btn ?>" type="submit" class="btn btn-success btn-sm pull-right" style="margin-left: 5px;"><i class="fa fa-paper-plane-o"></i> Simpan</button>

                                <button type="reset" class="btn btn-default btn-sm pull-right"><i class="fa fa-undo"></i> Reset</button>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </form>

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>