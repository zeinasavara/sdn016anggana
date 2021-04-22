<div class="wrapper">
    <header>
        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="background-image: url('<?= site_url('assets/img/' . $this->fungsi->setting()->head_img) ?>'); height: 400px;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Kurikulum</h1>
                        <h4 class="mb-3">Ekstrakurikuler</h4>
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
                            <li class="breadcrumb-item"><a href="#">Kurikulum</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ekstrakurikuler</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="content pb-5">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
                    <?php foreach ($ekskul->result() as $key => $eks) { ?>
                        <div class="col">
                            <div class="card text-center h-100 hover-shadow hover-zoom">
                                <div class="bg-image">
                                    <img src="<?= site_url('assets/img/kurikulum/' . $eks->thumbnail) ?>" class="w-100" style="height: 200px;" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $eks->ekskul ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>