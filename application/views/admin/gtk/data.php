<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Guru & Tenaga Kependidikan
            <small>Control Data GTK</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">GTK</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Data Guru & Tenaga Kependidikan</h3>
                        <a href="<?= base_url('gtk/tambah') ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Data GTK</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="dataTables" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5px">#</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIP</th>
                                    <th>Jabatan</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($gtk->result() as $key => $g) { ?>
                                    <tr>
                                        <td width="5px"><?= $no++ ?></td>
                                        <td><?= $g->nama ?></td>
                                        <td><?= $g->nip ?? '<small class="text-danger">NIP tidak ada</small>' ?></td>
                                        <td><?= $g->jabatan ?></td>
                                        <td><span class="badge <?= $g->status == 1 ? 'bg-green' : 'bg-red' ?>"><?= $g->status == 1 ? 'Aktif' : 'Nonaktif' ?></span></td>
                                        <td class="text-center" style="white-space: nowrap;">
                                            <a href="<?= base_url('gtk/update/' . $g->id_gtk) ?>" class="btn btn-primary btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= base_url('gtk/hapus/' . $g->id_gtk) ?>" class="btn btn-danger btn-xs konfirHapus">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th width="5px">#</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIP</th>
                                    <th>Jabatan</th>
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

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>