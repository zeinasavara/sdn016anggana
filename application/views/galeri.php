<div class="wrapper">
    <div class="main-content py-2">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center justify-content-lg-end justify-content-md-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galeri Sekolah</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="content">
                <section class="galeri-konten">
                    <div class="container">
                        <div class="row">
                            <?php foreach ($row->result() as $key => $g) { ?>
                                <div class="col-12 col-lg-3 col-md-4 col-sm-6 galeri-item">
                                    <div class="bg-image hover-overlay ripple item" data-mdb-ripple-color="success" data-mdb-toggle="modal" data-mdb-target="#view<?= $g->id_galeri ?>">
                                        <img src="<?= site_url('assets/img/galeri/' . $g->thumbnail) ?>" class="img-fluid img-gallery" alt="<?= $g->thumbnail ?>" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Modal Gallery -->
                                <div class="modal fade" id="view<?= $g->id_galeri ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <img src="<?= site_url('assets/img/galeri/' . $g->thumbnail) ?>" class="img-fluid shadow-2-strong img-modal" alt="<?= $g->thumbnail ?>" />
                                            <span class="pt-3 text-center">
                                                <h5 class="text-uppercase fw-bold" style="margin-bottom: 0;"><?= $g->judul ?></h5>
                                                <p style="font-size: 10pt; margin-bottom: 5px;"><?= $g->jabatan ?> - <?= date('d/m/Y', strtotime($g->tgl)) ?></p>
                                                <p><?= $g->deskripsi ?></p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <nav class="mt-4 d-flex justify-content-center">
                                <?= $this->pagination->create_links(); ?>
                            </nav>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>