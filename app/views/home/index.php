        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!--  Banner  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="col-lg-6 offset-lg-3 mt-5">
                                <h1 align="center">Kami Siap Membantu Anda!</h1>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 offset-5 mt-4">
                                    <a href="<?= BASEURL; ?>/reservasi/buatReservasi" class="btn btn-info">
                                        Buat Registrasi
                                    </a>                                    
                                </div>                                
                            </div>
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Banner -->
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a href="<?= BASEURL; ?>/pasien">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?= count($data['pasien']); ?></span></div>
                                            <div class="stat-heading">Pasien</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="<?= BASEURL; ?>/pegawai">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="fa fa-user-md"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?= count($data['pegawai']); ?></span></div>
                                            <div class="stat-heading">Pegawai</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="<?= BASEURL; ?>/reservasi">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="fa fa-stethoscope"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?= count($data['reservasi']); ?></span></div>
                                            <div class="stat-heading">Registrasi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="<?= BASEURL; ?>/inventaris">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="fa fa-suitcase"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class=""><?= count($data['inventaris']); ?></span></div>
                                            <div class="stat-heading">Inventaris</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <!-- /Widgets -->
                <!--  Service // Kalau mau nyalakan service blok mulai <div class="row"> dibawah ini sampai batas yang saya beri tanda //nb: baris ini tidak perlu diblok  -->
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <p align="right">
                                    <i class="fa fa-pencil"></i>
                                </p>
                                <h3 class="" align="center">Service</h1>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-5 offset-md-1">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Card with switch</strong>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Card with switch</strong>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-5 offset-lg-1">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Card with switch</strong>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Card with switch</strong>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div> -->
                <!--  /Service blok hingga </div> // nb: baris ini tidak perlu di blok juga // setelah itu tekan [ CTRL + / ] -->
                <!-- Galery -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="" align="center">Gallery</h3>
                            </div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <?php for ($i=0; $i < 6; $i++) { ?>
                                    <div class="col-md-4 mt-3">
                                        <a href="<?= BASEURL; ?>/img/gallery/<?=  $data['galeri'][$i]['gambar']; ?>" data-lightbox="example-set" data-title="<?=  $data['galeri'][$i]['nama']; ?>" class="example-image-link mode6">
                                            <img src="<?= BASEURL; ?>/img/gallery/<?=  $data['galeri'][$i]['gambar']; ?>" class="example-image" alt="" width="365px" height="250px">
                                        </a>
                                    </div>
                                    <?php } ?>                                    
                                </div> <!-- /.row -->
                                <div class="row text-center mt-3">
                                    <div class="col-12">
                                        <a href="<?= BASEURL; ?>/gallery">Lihat Semua</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!-- /Galery -->
                <div class="clearfix"></div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        
    </div>
    <!-- /#right-panel -->