    
    <div class="modal-header">
        <a href="<?= BASEURL; ?>/pasien">
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button></a>
    </div>
    <div class="modal-body">
        <table>
            <tr>
                <th>No. Rekam Medis</th>
                <td>:</td>
                <td><?= $data['pasien']['no_rekam_medis']; ?></td>
            </tr>
            <tr>
                <th>Nama Pasiens</th>
                <td>:</td>
                <td><?= $data['pasien']['nama']; ?></td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>:</td>
                <td><?= $data['pasien']['nik']; ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td><?= $data['pasien']['tanggal_lahir']; ?></td>
            </tr>
            <tr>
                <th>Umur</th>
                <td>:</td>
                <td><?= $data['pasien']['umur']; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td><?= $data['pasien']['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td><?= $data['pasien']['agama']; ?></td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>:</td>
                <td><?= $data['pasien']['pekerjaan']; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><?= $data['pasien']['alamat']; ?></td>
            </tr>
            <tr>
                <th>Riwayat Penyakit</th>
                <td>:</td>
                <td><?= $data['pasien']['riwayat_penyakit']; ?></td>
            </tr>
        </table>  
                     
                        
    </div>
    <div class="modal-footer">

            <a title="cetak" href="<?= BASEURL; ?>/pasien/cetakIdentitas/<?= $data['pasien']['no_rekam_medis']; ?>" class="btn btn-success"><i class="fa fa-print"></i></a>

            <a href="<?= BASEURL; ?>/pasien" class="btn btn-secondary">Cancel</a>                  
    </div>