<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $header ?>
            <small>Control Data Galeri</small>
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
                            <input type="hidden" name="id_galeri" value="<?= $row->id_galeri ?>">
                            <div class="form-group">
                                <?php if ($this->uri->segment(2) == 'tambah') { ?>
                                    <label for="thumbnail">Thumbnail <small class="text-danger">* (jpg, jpeg, png | Max. 2MB)</small></label>
                                <?php } else { ?>
                                    <label for="thumbnail">Thumbnail <small class="text-danger">(jpg, jpeg, png | Max. 2MB | Abaikan jika tidak merubah thumbnail)</small></label>
                                <?php } ?>
                                <?php if ($this->uri->segment(2) == 'update') { ?>
                                    <img src="<?= site_url('assets/img/galeri/' . $row->thumbnail) ?>" alt="<?= $row->thumbnail ?>" class="img-thumbnail img-responsive" style="margin: 0 0 5px 0;">
                                <?php } ?>
                                <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                <?= form_error('thumbnail') ?>
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul <small class="text-danger">*</small></label>

                                <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan Judul" value="<?= set_value('judul') ? set_value('judul') : $row->judul ?>">
                                <?= form_error('judul') ?>
                            </div>
                            <div class="form-group">
                                <label for="tgl">Tanggal <small class="text-danger">*</small></label>

                                <input type="date" name="tgl" class="form-control" id="tgl" placeholder="Masukkan tgl" value="<?= set_value('tgl') ? set_value('tgl') : $row->tgl ?>">
                                <?= form_error('tgl') ?>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi <small class="text-danger">*</small></label>

                                <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control"><?= set_value('deskripsi') ? set_value('deskripsi') : $row->deskripsi ?></textarea>
                                <?= form_error('deskripsi') ?>
                            </div>
                            <div class="form-group">
                                <a href="<?= base_url('galeri/data') ?>" class="btn btn-warning btn-sm pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>

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