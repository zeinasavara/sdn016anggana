<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $header ?>
            <small>Konfigurasi Profile Sekolah</small>
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
                            <input type="hidden" name="id_profilesekolah" value="<?= $row->id_profilesekolah ?>">
                            <div class="form-group">
                                <label for="title">Judul <small class="text-danger">*</small></label>

                                <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan title" value="<?= set_value('title') ? set_value('title') : $row->title ?>">
                                <?= form_error('title') ?>
                            </div>
                            <!-- <div class="form-group">
                                <label for="tgl">Tanggal <small class="text-danger">*</small></label>

                                <input type="date" name="tgl" class="form-control" id="tgl" placeholder="Masukkan tgl" value="<?= set_value('tgl') ? set_value('tgl') : $row->tgl ?>">
                            </div> -->
                            <div class="form-group">
                                <label for="description">Deskripsi <small class="text-danger">*</small></label>

                                <textarea name="description" id="editor1" class="form-control"><?= set_value('description') ? set_value('description') : $row->description ?></textarea>
                                <?= form_error('description') ?>
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
                                <a href="<?= base_url('setting') ?>" class="btn btn-warning btn-sm pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>

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