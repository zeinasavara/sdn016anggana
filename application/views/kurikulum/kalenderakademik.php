<div class="wrapper">
    <header>
        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="background-image: url('<?= site_url('assets/img/header/') ?>1.jpeg'); height: 400px;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Kurikulum</h1>
                        <h4 class="mb-3">Kalender Akademik</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Kalender Akademik</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="content pb-5">
                <div class="row">
                    <img src="<?= site_url('assets/img/kurikulum/' . $kalemik->kalemik) ?>" alt="<?= $kalemik->kalemik ?>">
                </div>
            </div>
        </div>
    </div>
</div>