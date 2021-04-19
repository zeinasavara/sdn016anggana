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

            <div class="col-md-8">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Profile Sekolah</h3>
                        <a href="<?= base_url('setting/tambahprf') ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Data Profile</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="dataTables2" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5px">#</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($profile->result() as $key => $prf) { ?>
                                    <tr>
                                        <td width="5px"><?= $no++ ?></td>
                                        <td><?= $prf->title ?></td>
                                        <td><?= substr($prf->description, 0, 50) . ' ....' ?></td>
                                        <td><span class="badge <?= $prf->status == 1 ? 'bg-green' : 'bg-red' ?>"><?= $prf->status == 1 ? 'Aktif' : 'Nonaktif' ?></span></td>
                                        <td class="text-center" style="white-space: nowrap;">
                                            <a href="<?= base_url('setting/updateprf/' . $prf->id_profilesekolah) ?>" class="btn btn-primary btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= base_url('setting/hapusprf/' . $prf->id_profilesekolah) ?>" class="btn btn-danger btn-xs konfirHapus">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th width="5px">#</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <div class="col-md-4">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Struktur Organisasi</h3>
                        <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#change-struktur"><i class="fa fa-refresh"></i> Ganti Struktur</button>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <img src="<?= site_url('assets/img/' . $svm->struktur_organisasi) ?>" alt="" class="img img-responsive img-thumbnail">
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <div class="col-xs-12">
                <div class="box box-success">
                    <form action="<?= base_url('setting/processvm/' . $svm->id_strukturvisimisi) ?>" method="POST">
                        <div class="box-header">
                            <h3 class="box-title">Visi & Misi</h3>
                            <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-paper-plane"></i> Update Visi Misi</button>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-md-6">
                                <textarea id="editor1" name="visi"><?= $svm->visi ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <textarea id="editor2" name="misi"><?= $svm->misi ?></textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </form>
                </div>
                <!-- /.box -->
            </div>

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>


<!-- Modal Change Struktur Organisasi -->
<div class="modal fade" id="change-struktur">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="<?= base_url('setting/changeStruktur') ?>" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="struktur_organisasi">Struktur Organisasi<small class="text-danger">* (jpeg, png, jpg | Max 2MB)</small></label>

                        <input type="file" name="struktur_organisasi" id="struktur_organisasi" class="form-control" required>
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