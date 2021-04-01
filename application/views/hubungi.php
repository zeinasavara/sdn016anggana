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

                                <form class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <input type="text" class="form-control" id="nama_lengkap" required />
                                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <input type="email" class="form-control" id="email" required />
                                            <label for="email" class="form-label">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <textarea class="form-control" id="pesan" rows="5" required></textarea>
                                            <label for="pesan" class="form-label">Pesan</label>
                                        </div>
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