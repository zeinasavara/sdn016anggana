<!-- FLASH MESSAGE -->
<?php $this->view('admin/flash_message') ?>

<div class="wrapper">
    <div class="main-content py-2">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center justify-content-lg-end justify-content-md-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="content pb-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="card">
                            <div class="card-body shadow-1-strong">

                                <form class="row g-3" action="" method="POST">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap') ?>" required />
                                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        </div>
                                        <?= form_error('nama_lengkap') ?>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <input type="email" class="form-control" name="email" id="email" value="<?= set_value('nama_lengkap') ?>" required />
                                            <label for="email" class="form-label">Email</label>
                                        </div>
                                        <?= form_error('email') ?>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <textarea class="form-control" id="pesan" name="pesan" rows="5" required><?= set_value('pesan') ?></textarea>
                                            <label for="pesan" class="form-label">Pesan</label>
                                        </div>
                                        <?= form_error('pesan') ?>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary float-end" type="submit">Kirim</button>
                                        <button class="btn btn-warning float-end me-1" type="reset">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>