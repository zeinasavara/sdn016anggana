<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kurikulum
            <small>Control Data Kurikulum</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Kurikulum</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">


            <div class="col-lg-7">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Data Ekstrakurikuler</h3>
                        <a href="<?= base_url('kurikulum/tambah') ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Ekstrakurikuler</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="dataTables" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center" width="5px">#</th>
                                    <th>Ekstrakurikuler</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($kurikulum->result() as $key => $kur) { ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td><?= $kur->ekskul ?></td>
                                        <td class="text-center"><span class="badge <?= $kur->status == 1 ? 'bg-green' : 'bg-red' ?>"><?= $kur->status == 1 ? 'Aktif' : 'Nonaktif' ?></span></td>
                                        <td class="text-center" style="white-space: nowrap;">
                                            <a href="<?= base_url('kurikulum/update/' . $kur->id_kurikulum) ?>" class="btn btn-primary btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= base_url('kurikulum/hapus/' . $kur->id_kurikulum) ?>" class="btn btn-danger btn-xs konfirHapus">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Ekstrakurikuler</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-lg-5">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Kalender Akademik</h3>
                        <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#change-kalemik"><i class="fa fa-refresh"></i> Ganti Kalender</button>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <img src="<?= site_url('assets/img/kurikulum/' . $kalemik->kalemik) ?>" alt="" class="img img-responsive img-thumbnail">


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

<!-- Modal Change Kalender Akademik -->
<div class="modal fade" id="change-kalemik">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="<?= base_url('kurikulum/changekalemik') ?>" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kalemik">Kalender Akademik <small class="text-danger">* (jpeg, png, jpg | Max 2MB)</small></label>

                        <input type="file" name="kalemik" id="kalemik" class="form-control" required>
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