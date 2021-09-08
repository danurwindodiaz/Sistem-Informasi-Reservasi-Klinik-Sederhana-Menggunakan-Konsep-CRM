<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tambah Data Pasien</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Pasien</a></li>
                                    <li class="active">Tambah Pasien</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="mt-3">
                <?php Flasher::flash(); ?>
            </div>
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form Pasien</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="<?= BASEURL; ?>/pasien/tambah" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">No. Rekam
                                                Medis</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static"><?= $data['kode']; ?></p>
                                            <input type="hidden" value="<?= $data['kode']; ?>" name="no_rekam_medis">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input"
                                                class=" form-control-label">Nama Pasien</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama" name="nama"
                                                placeholder="Nama Lengkap" class="form-control"><small
                                                class="form-text text-muted">Silahkan
                                                Masukkan Nama Pasien</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input"
                                                class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="NIK" name="nik"
                                                placeholder="NIK" class="form-control"><small
                                                class="form-text text-muted">Silahkan
                                                Masukkan NIK Pasien</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input"
                                                class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-5">
                                            <div class="input-group">
                                                <input class="form-control" name="tanggal_lahir" type="date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                            </div>
                                            <small class="form-text text-muted">ex. mm/dd/yyyy</small>
                                        </div>
                                        <div class="col-1">
                                            <div class="col col-md-3"><label for="email-input"
                                                    class=" form-control-label">Umur</label></div>
                                        </div>
                                        <div class="col-2">
                                            <div class="col-12 col-md-9"><input type="text" id="umur"
                                                    class="form-control" name="umur"></div>
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Jenis
                                                Kelamin</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label">
                                                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki"
                                                        class="form-check-input" checked>Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label">
                                                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan"
                                                        class="form-check-input">Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-3"><label for="select" class=" form-control-label">Agama</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <select name="agama" id="select" class="form-control">
                                                <option value="0">Please select</option>
                                                <option value="Islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input"
                                                class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="pekerjaan" name="pekerjaan"
                                                placeholder="Pekerjaan" class="form-control"><small
                                                class="form-text text-muted">Silahkan
                                                Masukkan Pekerjaan Pasien</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-3"><label for="textarea-input"
                                                class=" form-control-label">Alamat</label></div>
                                        <div class="col-9"><textarea name="alamat" id="alamat" rows="4"
                                                placeholder="Alamat..." class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-3"><label for="textarea-input"
                                                class=" form-control-label">Riwayat Penyakit</label></div>
                                        <div class="col-9"><textarea name="riwayat_penyakit" id="riwayat_penyakit" rows="4"
                                                placeholder="Riwayat Penyakit..." class="form-control"></textarea></div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Save
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->