<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pesan Masuk
            <small>Control Pesan Masuk</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pesan Masuk</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title"><strong>Pesan Masuk Diterima</strong></h3>
                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="dataTables" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5px">#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Pesan Masuk</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pesan->result() as $key => $psn) { ?>
                                    <tr>
                                        <td width="5px"><?= $no++ ?></td>
                                        <td><?= $psn->nama_lengkap ?></td>
                                        <td><?= $psn->email ?></td>
                                        <td><?= substr($psn->pesan, 0, 50) . ' ....' ?></td>
                                        <td class="text-center" style="white-space: nowrap;">
                                            <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#view<?= $psn->id_pesan ?>"><i class="fa fa-info-circle"></i></button>
                                            <a href="<?= base_url('inbox/hapus/' . $psn->id_pesan) ?>" class="btn btn-danger btn-xs konfirHapus">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Modal Change Kalender Akademik -->
                                    <div class="modal fade" id="view<?= $psn->id_pesan ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- /.box-header -->
                                                <div class="box-body no-padding">
                                                    <div class="mailbox-read-info">
                                                        <h3><strong><?= $psn->nama_lengkap ?></strong></h3>
                                                        <h5>From: <?= $psn->email ?>
                                                            <span class="mailbox-read-time pull-right"><?= date('d M. Y | H:i', strtotime($psn->sent)) ?></span>
                                                        </h5>
                                                    </div>
                                                    <!-- /.mailbox-read-info -->
                                                    <div class="mailbox-read-message">
                                                        <div class="attachment-block clearfix">
                                                            <div class="attachment-text">
                                                                <p><?= $psn->pesan ?></p>
                                                            </div>
                                                            <!-- /.attachment-text -->
                                                        </div>
                                                    </div>
                                                    <!-- /.mailbox-read-message -->
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
                                                    <a href="mailto:<?= $psn->email ?>" class="btn btn-success"><i class="fa fa-paper-plane"></i> Kirim Pesan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal -->
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th width="5px">#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Pesan Masuk</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>



            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title"><strong>Drafts</strong></h3>
                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="dataTables1" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5px">#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Pesan Masuk</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($drafts->result() as $key => $drf) { ?>
                                    <tr>
                                        <td width="5px"><?= $no++ ?></td>
                                        <td><?= $drf->nama_lengkap ?></td>
                                        <td><?= $drf->email ?></td>
                                        <td><?= substr($drf->pesan, 0, 50) . ' ....' ?></td>
                                        <td class="text-center" style="white-space: nowrap;">
                                            <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#view<?= $drf->id_pesan ?>"><i class="fa fa-info-circle"></i></button>
                                            <a href="<?= base_url('inbox/terima/' . $drf->id_pesan) ?>" class="btn btn-info btn-xs terimaPesan">
                                                <i class="fa fa-check"></i>
                                            </a>
                                            <a href="<?= base_url('inbox/tolak/' . $drf->id_pesan) ?>" class="btn btn-danger btn-xs tolakPesan">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Modal Change Kalender Akademik -->
                                    <div class="modal fade" id="view<?= $drf->id_pesan ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- /.box-header -->
                                                <div class="box-body no-padding">
                                                    <div class="mailbox-read-info">
                                                        <h3><strong><?= $drf->nama_lengkap ?></strong></h3>
                                                        <h5>From: <?= $drf->email ?>
                                                            <span class="mailbox-read-time pull-right"><?= date('d M. Y | H:i', strtotime($drf->sent)) ?></span>
                                                        </h5>
                                                    </div>
                                                    <!-- /.mailbox-read-info -->
                                                    <div class="mailbox-read-message">
                                                        <div class="attachment-block clearfix">
                                                            <div class="attachment-text">
                                                                <p><?= $drf->pesan ?></p>
                                                            </div>
                                                            <!-- /.attachment-text -->
                                                        </div>
                                                    </div>
                                                    <!-- /.mailbox-read-message -->
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal -->
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th width="5px">#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Pesan Masuk</th>
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