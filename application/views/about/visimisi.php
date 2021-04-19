<div class="wrapper">
    <header>
        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="background-image: url('<?= site_url('assets/img/header/') ?>1.jpeg'); height: 400px;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Tentang Kami</h1>
                        <h4 class="mb-3">Visi & Misi</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Visi & Misi</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="content pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <?= $row->visi ?>
                        </div>
                        <div class="col-md-6">
                            <?= $row->misi ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>