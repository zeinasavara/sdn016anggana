<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Galeri
            <small>Control Data Galeri</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Galeri</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">


            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Data Galeri</h3>
                        <a href="<?= base_url('galeri/tambah') ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Galeri</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="dataTables2" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center" width="5px">#</th>
                                    <th style="width: 10%;">Thumbnail</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal</th>
                                    <th>User</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($row->result() as $key => $g) { ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td style="width: 10%;">
                                            <img src="<?= site_url('assets/img/galeri/' . $g->thumbnail) ?>" alt="<?= $g->thumbnail ?>" class="img-responsive">
                                        </td>
                                        <td><?= $g->judul ?></td>
                                        <td><?= $g->deskripsi ?></td>
                                        <td><?= $g->tgl ?></td>
                                        <td><?= $g->jabatan ?></td>
                                        <td style="white-space: nowrap;" class="text-center">
                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#view<?= $g->id_galeri ?>">
                                                <i class="fa fa-search-plus"></i>
                                            </button>
                                            <a href="<?= base_url('galeri/update/' . $g->id_galeri) ?>" class="btn btn-primary btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= base_url('galeri/hapus/' . $g->id_galeri) ?>" class="btn btn-danger btn-xs konfirHapus">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Modal Change Kalender Akademik -->
                                    <div class="modal fade" id="view<?= $g->id_galeri ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <img src="<?= site_url('assets/img/galeri/' . $g->thumbnail) ?>" class="img-responsive" alt="<?= $g->thumbnail ?>" />
                                                <div class="text-center">
                                                    <h4 class="text-uppercase" style="font-weight: bold;"><?= $g->judul ?></h4>
                                                    <p style="padding-bottom: 10px;"><?= $g->deskripsi ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal -->
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th style="width: 10%;">Thumbnail</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal</th>
                                    <th>User</th>
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