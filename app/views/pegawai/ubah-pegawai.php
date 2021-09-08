<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tambah Data Pegawai</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Pegawai</a></li>
                                    <li class="active">Tambah Pegawai</li>
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
                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form Pegawai</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="<?= BASEURL; ?>/pegawai/ubah" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Id Pegawai</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static"><?= $data['pegawai']['id_pegawai']; ?></p>
                                            <input type="hidden" value="<?= $data['pegawai']['id_pegawai']; ?>" name="id_pegawai">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama"
                                                class=" form-control-label">Nama Pegawai</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama" name="nama"
                                                placeholder="Nama Lengkap" class="form-control" value="<?= $data['pegawai']['nama']; ?>"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik"
                                                class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nik" name="nik"
                                                placeholder="NIK" class="form-control" value="<?= $data['pegawai']['nik']; ?>"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input"
                                                class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-5">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="tanggal_lahir" value="<?= $data['pegawai']['tanggal_lahir']; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                            </div>                                            
                                        </div>                                        
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Jenis
                                                Kelamin</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label">
                                                    <input type="radio" id="inline-radio1" name="jenis_kelamin"
                                                        value="Laki-laki" class="form-check-input" <?php if ($data['pegawai']['jenis_kelamin']=='Laki-laki') {
                                                            echo 'checked';
                                                        } ?>>Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label">
                                                    <input type="radio" id="inline-radio1" name="jenis_kelamin"
                                                        value="Perempuan" class="form-check-input" <?php if ($data['pegawai']['jenis_kelamin']=='Perempuan') {
                                                            echo 'checked';
                                                        } ?>>Perempuan
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
                                                <option value="Islam" <?php if ($data['pegawai']['agama']=='Islam') {
                                                    echo 'selected';
                                                } ?>>Islam</option>
                                                <option value="Kristen" <?php if ($data['pegawai']['agama']=='Kristen') {
                                                    echo 'selected';
                                                } ?>>Kristen</option>
                                                <option value="Katolik" <?php if ($data['pegawai']['agama']=='Katolik') {
                                                    echo 'selected';
                                                } ?>>Katolik</option>
                                                <option value="Hindu" <?php if ($data['pegawai']['agama']=='Hindu') {
                                                    echo 'selected';
                                                } ?>>Hindu</option>
                                                <option value="Budha" <?php if ($data['pegawai']['agama']=='Budha') {
                                                    echo 'selected';
                                                } ?>>Budha</option>
                                                <option value="Konghucu" <?php if ($data['pegawai']['agama']=='Konghucu') {
                                                    echo 'selected';
                                                } ?>>Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pendidikan_terakhir"
                                                class=" form-control-label">Pendidikan Terakhir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir"
                                                placeholder="SMA/S1/S2" class="form-control" value="<?= $data['pegawai']['pendidikan_terakhir']; ?>"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jabatan"
                                                class=" form-control-label">Jabatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="jabatan" name="jabatan"
                                                placeholder="Jabatan" class="form-control" value="<?= $data['pegawai']['jabatan']; ?>"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input"
                                                class=" form-control-label">No. Telepon</label></div>
                                        <div class="col-5">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                <input class="form-control" name="no_tlp" value="<?= $data['pegawai']['no_tlp']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Status</label>
                                        </div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="sts" class="form-check-label ">
                                                    <input type="radio" id="sts" name="sts"
                                                        value="Sudah Menikah" class="form-check-input" <?php if ($data['pegawai']['sts']=='Sudah Menikah') {
                                                            echo 'checked';
                                                        } ?>>Sudah Menikah
                                                </label>
                                            </div>
                                            <div class="form-check-inline form-check">
                                                <label for="sts" class="form-check-label ">
                                                    <input type="radio" id="sts" name="sts"
                                                        value="Belum Menikah" class="form-check-input" <?php if ($data['pegawai']['sts']=='Belum Menikah') {
                                                            echo 'checked';
                                                        } ?>>Belum Menikah
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-3"><label for="textarea-input"
                                                class=" form-control-label">Alamat</label></div>
                                        <div class="col-9"><textarea name="alamat" id="textarea-input" rows="4"
                                                class="form-control"><?= $data['pegawai']['alamat']; ?></textarea></div>
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
                            </form>
                        </div>
                    </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->