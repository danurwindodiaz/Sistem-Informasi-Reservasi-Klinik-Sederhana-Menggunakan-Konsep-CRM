        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Ubah Data Registrasi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Ubah Registrasi</li>
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

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Ubah Data Registrasi</strong>
                            </div>
                            <div class="card-body card-block">
                            <form method="post" action="<?= BASEURL; ?>/reservasi/ubah" enctype="multipart/form-data">
                                <div class="row form-group">
                                    <div class="col col-md-5"><label class=" form-control-label">No. Rekam
                                            Medis</label>
                                    </div>
                                    <div class="col col-md-7">
                                        <p class="form-control-static"><?= $data['reservasi']['no_rekam_medis']; ?></p>                   
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Pasien</label>
                                    <div class="input-group">
                                        <input class="form-control" name="nama" value="<?= $data['reservasi']['nama']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Masuk Pasien</label>
                                    <div class="input-group">                                        
                                        <input class="form-control" name="tanggal_masuk" type="date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="<?= $data['reservasi']['tanggal_masuk']; ?>">
                                    </div>
                                    <small class="form-text text-muted">ex. mm/dd/yyyy</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Keluar Pasien</label>
                                    <div class="input-group">                                        
                                        <input class="form-control" name="tanggal_keluar" type="date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="<?= $data['reservasi']['tanggal_keluar']; ?>">
                                    </div>
                                    <small class="form-text text-muted">ex. mm/dd/yyyy</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jenis Perawatan</label>
                                    <div class="input-group">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="perawatan"
                                                    value="Rawat Inap" class="form-check-input" <?php if ($data['reservasi']['perawatan']=='Rawat Inap') {
                                                    echo 'checked';
                                                } ?>>Rawat Inap
                                            </label>
                                        </div>
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="perawatan"
                                                    value="Rawat Jalan" class="form-check-input" <?php if ($data['reservasi']['perawatan']=='Rawat Jalan') {
                                                    echo 'checked';
                                                } ?>>Rawat Jalan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Penanggung Jawab</label>
                                    <div class="input-group">
                                        <input class="form-control" name="nama_penanggung" value="<?= $data['reservasi']['nama_penanggung']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Hubungan</label>
                                    <div class="input-group">
                                        <input class="form-control" name="hubungan" value="<?= $data['reservasi']['hubungan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nomor Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" name="no_tlp" value="<?= $data['reservasi']['no_tlp']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label for="select" class=" form-control-label">Status</label>                     
                                        <div class="input-group">
                                            <select name="status" id="select" class="form-control">                              
                                                <option value="Dalam Perawatan" <?php if ($data['reservasi']['status']=='Dalam Perawatan') {
                                                    echo 'selected';
                                                } ?>>Dalam Perawatan</option>
                                                <option value="Tidak Dalam Perawatan" <?php if ($data['reservasi']['status']=='Tidak Dalam Perawatan') {
                                                    echo 'selected';
                                                } ?>>Tidak Dalam Perawatan</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Diagnosisi</label>
                                    <div class="input-group">
                                        <textarea name="diagnosis" id="textarea-input" rows="3"
                                           class="form-control"><?= $data['reservasi']['diagnosis']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="kd_reservasi" value="<?= $data['reservasi']['kd_reservasi']; ?>">
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
    