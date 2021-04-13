<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $header ?>
            <small>Control Data Kurikulum</small>
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
                            <input type="hidden" name="id_kurikulum" value="<?= $row->id_kurikulum ?>">
                            <div class="form-group">
                                <label for="ekskul">Ekstrakurikuler <small class="text-danger">*</small></label>

                                <input type="text" name="ekskul" class="form-control" id="ekskul" placeholder="Masukkan Ekstrakurikuler" value="<?= set_value('ekskul') ? set_value('ekskul') : $row->ekskul ?>">
                                <?= form_error('ekskul') ?>
                            </div>
                            <div class="form-group">
                                <?php if ($this->uri->segment(2) == 'tambah') { ?>
                                    <label for="thumbnail">Thumbnail <small class="text-danger">* (format: jpg, jpeg, png | size: max 2MB)</small></label>
                                <?php } else { ?>
                                    <label for="thumbnail">Thumbnail <small class="text-danger">(jpg, jpeg, png | max 2MB | Abaikan jika tidak merubah thumbnail)</small></label>
                                <?php } ?>
                                <?php if ($this->uri->segment(2) == 'update') { ?>
                                    <img src="<?= site_url('assets/img/kurikulum/' . $row->thumbnail) ?>" alt="<?= $row->thumbnail ?>" class="img-thumbnail img-responsive" style="margin: 0 0 5px 0;">
                                <?php } ?>
                                <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                <?= form_error('thumbnail') ?>
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
                                <a href="<?= base_url('kurikulum') ?>" class="btn btn-warning btn-sm pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>

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