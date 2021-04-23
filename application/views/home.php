<section id="carousel">
	<div class="jumbotron jumbotron-fluid bg-cover" style="background-image: url('<?= site_url('assets/img/' . $this->fungsi->setting()->jumbotron) ?>')">
		<div class="overlay"></div>
		<div class="container pt-lg-5 pt-sm-5 pt-5">
			<h1 class="display-4 pt-lg-5 pt-sm-5 pt-5">Selamat Datang di
				<br>
				<p class="font-weight-bold" style="text-shadow: 3px 3px 5px #000;"><?= $this->fungsi->setting()->nama_website ?></p>
			</h1>
			<p class="lead fw-normal"><?= $this->fungsi->setting()->jumbotron_title ?></p>
		</div>
	</div>
</section>

<section id="sambutan" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center text-md-start">
				<?= $this->fungsi->setting()->sambutan ?>
			</div>
			<div class="col-md-4 text-center text-md-start">
				<img src="<?= site_url('assets/img/' . $this->fungsi->setting()->foto_kepsek) ?>" class="img-fluid rounded mx-auto d-block" alt="Kepala Sekolah" style="width: 250px;">
			</div>
		</div>
	</div>
</section>

<section id="visimisi" class="py-5" style="background-color:rgb(240, 255, 240);">
	<div class="container">
		<h1 class="text-center fw-bolder pt-3">Visi & Misi</h1>
		<div class="row">
			<div class="col-md-6 mb-3">
				<?= $visimisi->visi ?>
			</div>
			<div class="col-md-6">
				<?= $visimisi->misi ?>
			</div>
		</div>
	</div>
</section>

<section id="parallax">
	<!-- Container element -->
	<div class="parallax">
		<div class="container">
			<div class="row text-white py-5">
				<div class="col-lg-12">
					<div class="header">
						<h1 class="text-center fw-bold text-uppercase" style="text-shadow: 1px 1px 3px rgb(0, 0, 0);">Data Sekolah</h1>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mt-3">
					<h2 class="font-weight-bold text-center" style="text-shadow: 1px 1px 3px rgb(0, 0, 0);">151+
					</h2>
					<h4 class="text-center">Peserta Didik</h4>
				</div>
				<div class="col-lg-3 col-md-6 mt-3">
					<h2 class="font-weight-bold text-center" style="text-shadow: 1px 1px 3px rgb(0, 0, 0);"><?= count($guru) ?></h2>
					<h4 class="text-center">Guru</h4>
				</div>
				<div class="col-lg-3 col-md-6 mt-3">
					<h2 class="font-weight-bold text-center" style="text-shadow: 1px 1px 3px rgb(0, 0, 0);"><?= count($tendik) ?></h2>
					<h4 class="text-center">Tenaga Kependidikan</h4>
				</div>
				<div class="col-lg-3 col-md-6 mt-3">
					<h2 class="font-weight-bold text-center" style="text-shadow: 1px 1px 3px rgb(0, 0, 0);">9+</h2>
					<h4 class="text-center">Rombel</h4>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="galeri" class="py-5">
	<div class="container">
		<h1 class="text-center fw-bolder py-3">Galeri Sekolah</h1>
		<div class="row">
			<?php foreach ($galeri->result() as $key => $g) { ?>
				<div class="col-12 col-lg-3 col-md-4 col-sm-6 mb-3">
					<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="success" data-mdb-toggle="modal" data-mdb-target="#view<?= $g->id_galeri ?>">
						<img src="<?= site_url('assets/img/galeri/' . $g->thumbnail) ?>" alt="<?= $g->judul ?>" class="img-fluid img-gallery" />
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
			<div class="col-12 d-flex justify-content-center">
				<a href="<?= base_url('galeri') ?>" class="btn btn-success">Selengkapnya</a>
			</div>
		</div>
	</div>
</section>