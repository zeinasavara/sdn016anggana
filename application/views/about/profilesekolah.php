<div class="wrapper">
    <header>
        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="background-image: url('<?= site_url('assets/img/' . $this->fungsi->setting()->head_img) ?>'); height: 400px;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Tentang Kami</h1>
                        <h4 class="mb-3">Profile Sekolah</h4>
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
                            <li class="breadcrumb-item"><a href="#">Tentang Kami</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile Sekolah</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="content pb-5">
                <div class="row">
                    <?php $n = 1; ?>
                    <?php foreach ($row->result() as $key => $prf) { ?>
                        <?php if ($n++ % 2 == 1) { ?>
                            <div class="col-12 col-lg-8 mt-3">
                                <h3 class="text-center text-md-start"><?= $prf->title ?></h3>
                                <?= $prf->description ?>
                            </div>

                            <div class="col-12 col-lg-4 mt-3">
                                <img src="<?= site_url('assets/img/profile/1.jpeg') ?>" alt="foto_sekolah" class="img-thumbnail hover-shadow hover-zoom">
                            </div>
                        <?php } else { ?>
                            <div class="col-12 col-lg-4 mt-3">
                                <img src="<?= site_url('assets/img/profile/2.jpeg') ?>" alt="foto_sekolah" class="img-thumbnail hover-shadow hover-zoom">
                            </div>

                            <div class="col-12 col-lg-8 mt-3">
                                <h3 class="text-center text-md-start"><?= $prf->title ?></h3>
                                <?= $prf->description ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>