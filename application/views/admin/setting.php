<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Web
            <small>Control Website</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Konfigurasi Web</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title"><strong>Setting Homepage</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <!-- /input-group -->
                            <div class="form-group">
                                <label for="icon_title">Jumbotron</label>
                                <div class="input-group input-group-sm">
                                    <div class="col-sm-6">
                                        <img src="<?= site_url('assets/img/' . $row->jumbotron) ?>" alt="<?= $row->jumbotron ?>" class="img-fluid img-responsive" name="jumbotron">
                                        <button type="button" data-toggle="modal" data-target="#change-jumbotron" class="btn btn-info btn-flat" style="margin-top: 5px;">Ganti Jumbotron</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?= site_url('assets/img/' . $row->head_img) ?>" alt="<?= $row->head_img ?>" class="img-fluid img-responsive" name="head_img">
                                        <button type="button" data-toggle="modal" data-target="#change-header" class="btn btn-info btn-flat" style="margin-top: 5px;">Ganti Header</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumbotron_title">Teks Jumbotron</label>
                                <textarea name="jumbotron_title" rows="3" class="form-control"><?= $row->jumbotron_title ?></textarea>
                                <?= form_error('jumbotron_title') ?>
                            </div>
                            <!-- /input-group -->
                            <div class="form-group">
                                <label for="icon_title">Kepala Sekolah</label>
                                <div class="input-group input-group-sm">
                                    <div class="col-sm-4">
                                        <img src="<?= site_url('assets/img/' . $row->foto_kepsek) ?>" alt="<?= $row->foto_kepsek ?>" class="img-fluid img-responsive" name="foto_kepsek">
                                        <button type="button" data-toggle="modal" data-target="#change-fotokepsek" class="btn btn-info btn-flat" style="margin-top: 5px;">Ganti Foto</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sambutan">Sambutan Sekolah</label>
                                <textarea name="sambutan" rows="3" id="editor1" class="form-control"><?= $row->sambutan ?></textarea>
                                <?= form_error('sambutan') ?>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title"><strong>Setting Website</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="form-group">
                                <label for="nama_website">Nama Sekolah</label>
                                <input type="text" class="form-control" id="nama_website" name="nama_website" value="<?= $row->nama_website ?>">
                                <?= form_error('nama_website') ?>
                            </div>
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title" value="<?= $row->meta_title ?>">
                                <?= form_error('meta_title') ?>
                            </div>
                            <!-- /input-group -->
                            <div class="form-group">
                                <label for="icon_title">Icon Title</label>
                                <div class="input-group input-group-sm">
                                    <div class="col-sm-12">
                                        <img src="<?= site_url('assets/img/' . $row->icon_title) ?>" alt="<?= $row->icon_title ?>" class="img-fluid img-responsive" style="width: 25%;">
                                    </div>
                                    <div class="col-sm-12" style="margin-top: 10px;">
                                        <button type="button" data-toggle="modal" data-target="#change-icontitle" class="btn btn-info btn-flat" style="margin-left: 15px;">Ganti Icon</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="meta_desc">Meta Description</label>
                                <textarea name="meta_desc" id="meta_desc" rows="3" class="form-control"><?= $row->meta_desc ?></textarea>
                                <?= form_error('meta_desc') ?>
                            </div>
                            <div class="form-group">
                                <label for="meta_keyword">Meta keyword</label>
                                <textarea name="meta_keyword" id="meta_keyword" rows="3" class="form-control"><?= $row->meta_keyword ?></textarea>
                                <?= form_error('meta_keyword') ?>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title"><strong>Kontak</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" rows="4" class="form-control"><?= $row->alamat ?></textarea>
                                <?= form_error('alamat') ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?= $row->email ?>">
                                <?= form_error('email') ?>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="text" name="telepon" id="telepon" class="form-control" value="<?= $row->telepon ?>">
                                <?= form_error('telepon') ?>
                            </div>


                            <button type="submit" class="btn btn-success pull-right"><i class="fa fa-paper-plane"></i> Update Website</button>

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



<!-- Modal Change Icon Title -->
<div class="modal fade" id="change-icontitle">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="<?= base_url('setting/changeIcon') ?>" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="icon_title">Icon Title<small class="text-danger">* (jpeg, png, jpg | Max 2MB)</small></label>

                        <input type="file" name="icon_title" id="icon_title" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane-o"></i> Simpan</button>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Change Jumbotron -->
<div class="modal fade" id="change-jumbotron">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="<?= base_url('setting/changeJumbotron') ?>" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jumbotron">Jumbotron<small class="text-danger">* (jpeg, png, jpg | Max 2MB)</small></label>

                        <input type="file" name="jumbotron" id="jumbotron" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane-o"></i> Simpan</button>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Change Header Background -->
<div class="modal fade" id="change-header">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="<?= base_url('setting/changeHeader') ?>" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="head_img">Header Background<small class="text-danger">* (jpeg, png, jpg | Max 2MB)</small></label>

                        <input type="file" name="head_img" id="head_img" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane-o"></i> Simpan</button>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Change Foto Kepsek -->
<div class="modal fade" id="change-fotokepsek">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="<?= base_url('setting/changeFotoKepsek') ?>" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="foto_kepsek">Foto Kepala Sekolah<small class="text-danger">* (jpeg, png, jpg | Max 2MB)</small></label>

                        <input type="file" name="foto_kepsek" id="foto_kepsek" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane-o"></i> Simpan</button>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->