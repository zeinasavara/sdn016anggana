<div class="wrapper">
    <header>
        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="background-image: url('<?= site_url('assets/img/' . $this->fungsi->setting()->head_img) ?>'); height: 400px;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Guru & Tenaga Kependidikan</h1>
                        <h4 class="mb-3">Tenaga Kependidikan</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <div class="main-content py-2">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center justify-content-lg-end justify-content-md-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">PTK</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tenaga Kependidikan</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="content pb-3">
                <div class="row col-12 col-md-5 ms-auto me-auto mb-3">
                    <form class="d-flex justify-content-center">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari PTK berdasarkan nama ..." name="cariptk" />
                            <button class="btn btn-success btn-sm" type="submit" data-mdb-ripple-color="dark">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="row row-cols-2 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
                    <?php foreach ($tendik->result() as $key => $t) { ?>

                        <div class="col">
                            <div class="card text-center h-100 hover-shadow hover-zoom">
                                <div class="bg-image">
                                    <img src="<?= site_url('assets/img/ptk/' . $t->foto) ?>" alt="<?= $t->foto ?>" class="w-100" style="height: 250px;" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0"><a href="javascript:;" data-mdb-toggle="modal" data-mdb-target="#detail-ptk<?= $t->id_gtk ?>"><?= $t->nama ?></a></h5>
                                    <p class="card-text">
                                        <?= $t->jabatan ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Gallery -->
                        <div class="modal fade" id="detail-ptk<?= $t->id_gtk ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content p-3">
                                    <div class="row">
                                        <div class="col-6 ms-auto me-auto">
                                            <img src="<?= site_url('assets/img/ptk/' . $t->foto) ?>" class="img-fluid shadow-2-strong img-modal" alt="<?= $t->foto ?>" />
                                        </div>
                                        <div class="col-sm-6 col-12 text-center text-sm-start mt-3 mt-sm-0">
                                            <h6 class="mb-0">Nama</h6>
                                            <p><?= $t->nama ?></p>
                                            <h6 class="mb-0">NIP</h6>
                                            <p><?= $t->nip ?></p>
                                            <h6 class="mb-0">Jabatan</h6>
                                            <p><?= $t->jabatan ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>

                <nav class="mt-4 d-flex justify-content-center">
                    <?= $this->pagination->create_links(); ?>
                </nav>
            </div>
        </div>
    </div>
</div>