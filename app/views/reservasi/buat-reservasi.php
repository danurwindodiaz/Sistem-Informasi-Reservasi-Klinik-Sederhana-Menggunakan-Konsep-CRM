<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tambah Data Registrasi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Buat Registari</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                            data-target="#modalCari"><i class="fa fa-search"></i>&nbsp;
                            Cari Data Pasien</button>
                        <a title="Reset Pasien" href="<?= BASEURL; ?>/reservasi/reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i></a>                        
                    </div>
                </div>
                <?php
                if(!empty($_SESSION['psn'])){?>
                <div class="row mt-3">
                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Indentitas Pasien</strong>
                            </div>
                            <div class="card-body card-block">
                            <form method="post" action="<?= BASEURL; ?>/reservasi/tambah" enctype="multipart/form-data">
                                <div class="row form-group">
                                    <div class="col col-md-5"><label class=" form-control-label">No. Rekam
                                            Medis</label>
                                    </div>
                                    <div class="col col-md-7">
                                        <p class="form-control-static"><?= $_SESSION['psn']; ?></p>
                                        <input type="hidden" class="form-control" id="no_rekam_medis" name="no_rekam_medis" value="<?= $_SESSION['psn']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Pasien</label>
                                    <div class="input-group">
                                        <input class="form-control" name="nama" value="<?= $data['psn']['nama']; ?>">
                                    </div>
                                    <small class="form-text text-muted">Masukkan Nama Pasien</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">NIK</label>
                                    <div class="input-group">
                                        <input class="form-control" name="nik" value="<?= $data['psn']['nik']; ?>">
                                    </div>
                                    <small class="form-text text-muted">Masukkan NIK Pasien</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Lahir</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control" name="tanggal_lahir" value="<?= $data['psn']['tanggal_lahir']; ?>">
                                    </div>
                                    <small class="form-text text-muted">ex. mm/dd/yyyy</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Umur</label>
                                    <div class="input-group">                                    
                                        <input type="text" id="disabled-input" class="form-control" name="umur" value="<?= $data['psn']['umur']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jenis Kelamin</label>
                                    <div class="input-group">
                                       <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki"
                                                        class="form-check-input" <?php if ($data['psn']['jenis_kelamin']=='Laki-laki') {
                                                            echo 'checked';
                                                        } ?>>Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan"
                                                        class="form-check-input" <?php if ($data['psn']['jenis_kelamin']=='Perempuan') {
                                                            echo 'checked';
                                                        } ?>>Perempuan
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Agama</label>
                                    <div class="input-group">
                                        <select name="agama" id="select" class="form-control">
                                                <option value="0">Please select</option>
                                                <option value="Islam" <?php if ($data['psn']['agama']=='Islam') {
                                                    echo 'selected';
                                                } ?>>Islam</option>
                                                <option value="Kristen" <?php if ($data['psn']['agama']=='Kristen') {
                                                    echo 'selected';
                                                } ?>>Kristen</option>
                                                <option value="Katolik" <?php if ($data['psn']['agama']=='Katolik') {
                                                    echo 'selected';
                                                } ?>>Katolik</option>
                                                <option value="Hindu" <?php if ($data['psn']['agama']=='Hindu') {
                                                    echo 'selected';
                                                } ?>>Hindu</option>
                                                <option value="Budha" <?php if ($data['psn']['agama']=='Budha') {
                                                    echo 'selected';
                                                } ?>>Budha</option>
                                                <option value="Konghucu" <?php if ($data['psn']['agama']=='Konghucu') {
                                                    echo 'selected';
                                                } ?>>Konghucu</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Pekerjaan Pasien</label>
                                    <div class="input-group">
                                        <input class="form-control" name="pekerjaan" value="<?= $data['psn']['pekerjaan']; ?>">
                                    </div>
                                    <small class="form-text text-muted">Silahkan Masukkan Pekerjaan Pasien</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Alamat</label>
                                    <div class="input-group">
                                        <textarea id="textarea-input" rows="4"
                                            placeholder="" class="form-control" name="alamat"><?= $data['psn']['alamat']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Riwayat Penyakit</label>
                                    <div class="input-group">
                                        <textarea id="textarea-input" rows="3"
                                            placeholder="" class="form-control" name="riwayat_penyakit"><?= $data['psn']['riwayat_penyakit']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }else {?>
                    <form method="post" action="<?= BASEURL; ?>/reservasi/tambah" enctype="multipart/form-data">
                    <div class="row mt-3">
                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Indentitas Pasien</strong>                                
                            </div>
                            <div class="card-body card-block">
                            <form method="post" action="<?= BASEURL; ?>/reservasi/tambah" enctype="multipart/form-data">
                                <div class="row form-group">
                                    <div class="col col-md-5"><label class=" form-control-label">No. Rekam
                                            Medis</label>
                                    </div>
                                    <div class="col col-md-7">
                                        <p class="form-control-static"><?= $data['kodePsn']; ?></p>
                                        <input type="hidden" class="form-control" id="no_rekam_medis" name="no_rekam_medis" value="<?= $data['kodePsn']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Pasien</label>
                                    <div class="input-group">
                                        <input class="form-control" name="nama">
                                    </div>
                                    <small class="form-text text-muted">Masukkan Nama Pasien</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">NIK</label>
                                    <div class="input-group">
                                        <input class="form-control" name="nik">
                                    </div>
                                    <small class="form-text text-muted">Masukkan NIK Pasien</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Lahir</label>
                                    <div class="input-group">
                                        
                                        <input class="form-control" name="tanggal_lahir" type="date">
                                    </div>
                                    <small class="form-text text-muted">ex. mm/dd/yyyy</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Umur</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="umur">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jenis Kelamin</label>
                                    <div class="input-group">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="jenis_kelamin"
                                                    value="Laki-laki" class="form-check-input">Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="jenis_kelamin"
                                                    value="Perempuan" class="form-check-input">Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Agama</label>
                                    <div class="input-group">
                                        <select name="agama" id="select" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Pekerjaan Pasien</label>
                                    <div class="input-group">
                                        <input class="form-control" name="pekerjaan">
                                    </div>
                                    <small class="form-text text-muted">Silahkan Masukkan Pekerjaan Pasien</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Alamat</label>
                                    <div class="input-group">
                                        <textarea name="alamat" id="textarea-input" rows="4"
                                            placeholder="Alamat..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Riwayat Penyakit</label>
                                    <div class="input-group">
                                        <textarea name="riwayat_penyakit" id="textarea-input" rows="3"
                                            placeholder="Riwat Penyakit..." class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    // unset($_SESSION['psn']);
                    ?>

                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Data Registrasi</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Masuk Pasien</label>
                                    <div class="input-group">
                                        
                                        <input class="form-control" name="tanggal_masuk" type="date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                    </div>
                                    <small class="form-text text-muted">ex. mm/dd/yyyy</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jenis Perawatan</label>
                                    <div class="input-group">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="perawatan"
                                                    value="Rawat Inap" class="form-check-input">Rawat Inap
                                            </label>
                                        </div>
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="perawatan"
                                                    value="Rawat Jalan" class="form-check-input">Rawat Jalan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Penanggung Jawab</label>
                                    <div class="input-group">
                                        <input class="form-control" name="nama_penanggung">
                                    </div>
                                    <small class="form-text text-muted">Masukkan nama penanggung jawab pasien</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Hubungan</label>
                                    <div class="input-group">
                                        <input class="form-control" name="hubungan">
                                    </div>
                                    <small class="form-text text-muted">Hubungan antara penggung jawab dan
                                        pasien</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nomor Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" name="no_tlp">
                                    </div>
                                    <small class="form-text text-muted">Nomor telepon yang dapat dihubungi</small>
                                </div>
                                
                            </div>
                            <input type="hidden" name="kd_reservasi" value="<?= $data['kode']; ?>">
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Save
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->
    <!-- Modal -->
        <div class="modal fade" id="modalCari" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Cari Data Pasien</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                      <div class="row">
                        <div class="col-md-12">
                            <div class="card">                                
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No. Rekam Medis</th>
                                                <th>Nama Pasien</th>
                                                <th>NIK</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $no = 1; 
                                        foreach ( $data['pasien'] as $psn) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $psn['no_rekam_medis']; ?></td>
                                                <td><?= $psn['nama']; ?></td>
                                                <td><?= $psn['nik']; ?></td>
                                                <td><?= $psn['jenis_kelamin']; ?></td>
                                                <td>
                                                    <a href="<?= BASEURL; ?>/reservasi/addPasien/<?= $psn['no_rekam_medis']; ?>" onclick="return confirm('Yakin?');" class="btn btn-success">
                                                        <i class="fa fa-plus"></i>                                          
                                                </td>                                                
                                            </tr>
                                        <?php endforeach; ?>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>