<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <h1>

            Dashboard

            <small>Control Panel</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

            <li class="active">Dashboard</li>

        </ol>

    </section>



    <!-- Main content -->

    <section class="content">

        <!-- Small boxes (Stat box) -->

        <div class="row">

            <div class="col-lg-3 col-md-6">

                <!-- small box -->

                <div class="small-box bg-aqua">

                    <div class="inner">

                        <h3><?= count($guru) ?></h3>



                        <p>Guru</p>

                    </div>

                    <div class="icon">

                        <i class="fa fa-user"></i>

                    </div>

                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                </div>

            </div>

            <!-- ./col -->

            <div class="col-lg-3 col-md-6">

                <!-- small box -->

                <div class="small-box bg-green">

                    <div class="inner">

                        <h3><?= count($tendik) ?></h3>



                        <p>Tenaga Kependidikan</p>

                    </div>

                    <div class="icon">

                        <i class="fa fa-user"></i>

                    </div>

                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                </div>

            </div>

            <!-- ./col -->

            <div class="col-lg-3 col-md-6">

                <!-- small box -->

                <div class="small-box bg-yellow">

                    <div class="inner">

                        <h3>151+</h3>



                        <p>Peserta Didik</p>

                    </div>

                    <div class="icon">

                        <i class="fa fa-user"></i>

                    </div>

                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                </div>

            </div>

            <!-- ./col -->

            <div class="col-lg-3 col-md-6">

                <!-- small box -->

                <div class="small-box bg-red">

                    <div class="inner">

                        <h3>9+</h3>



                        <p>Rombel</p>

                    </div>

                    <div class="icon">

                        <i class="fa fa-user"></i>

                    </div>

                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                </div>

            </div>

            <!-- ./col -->

            <div class="col-lg-4 col-md-6">

                <!-- small box -->

                <div class="small-box bg-red">

                    <div class="inner">

                        <h3><?= $this->fungsi->visitors()['totalpengunjung'] ?></h3>



                        <p>Total Pengunjung</p>

                    </div>

                    <div class="icon">

                        <i class="ion ion-stats-bars"></i>

                    </div>

                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                </div>

            </div>

            <!-- ./col -->

            <div class="col-lg-4 col-md-6">

                <!-- small box -->

                <div class="small-box bg-blue">

                    <div class="inner">

                        <h3><?= $this->fungsi->visitors()['pengunjunghariini'] ?></h3>



                        <p>Pengunjung Hari Ini</p>

                    </div>

                    <div class="icon">

                        <i class="ion ion-stats-bars"></i>

                    </div>

                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                </div>

            </div>

            <!-- ./col -->

            <div class="col-lg-4 col-md-6">

                <!-- small box -->

                <div class="small-box bg-green">

                    <div class="inner">

                        <h3><?= $this->fungsi->visitors()['pengunjungonline'] ?></h3>



                        <p>Pengunjung Online</p>

                    </div>

                    <div class="icon">

                        <i class="ion ion-stats-bars"></i>

                    </div>

                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                </div>

            </div>

            <!-- ./col -->

            <!-- /.col (LEFT) -->

            <div class="col-md-12">

                <div class="callout callout-info">

                    <h4>Selamat Datang Admininstrator!</h4>



                    <p>Anda berada di halaman CPanel dari situs <?= $this->fungsi->setting()->nama_website ?>.</p>

                </div>

            </div>

            <!-- /.col (RIGHT) -->

        </div>

        <!-- /.row -->



    </section>

    <!-- /.content -->

</div>