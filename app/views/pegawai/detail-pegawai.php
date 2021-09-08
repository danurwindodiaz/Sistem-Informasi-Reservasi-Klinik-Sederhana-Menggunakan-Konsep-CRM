    <div class="modal-header">
        <a href="<?= BASEURL; ?>/pegawai">
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button></a>
    </div>
    <div class="modal-body">
        <table>
            <tr>
                <th>No. Rekam Medis</th>
                <td>:</td>
                <td><?= $data['pegawai']['id_pegawai']; ?></td>
            </tr>
            <tr>
                <th>Nama Pegawais</th>
                <td>:</td>
                <td><?= $data['pegawai']['nama']; ?></td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>:</td>
                <td><?= $data['pegawai']['nik']; ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td><?= $data['pegawai']['tanggal_lahir']; ?></td>
            </tr>            
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td><?= $data['pegawai']['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td><?= $data['pegawai']['agama']; ?></td>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <td>:</td>
                <td><?= $data['pegawai']['pendidikan_terakhir']; ?></td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>:</td>
                <td><?= $data['pegawai']['jabatan']; ?></td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td>:</td>
                <td><?= $data['pegawai']['no_tlp']; ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>:</td>
                <td><?= $data['pegawai']['sts']; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><?= $data['pegawai']['alamat']; ?></td>
            </tr>
        </table>  
                     
                        
    </div>
    <div class="modal-footer">
        <a title="Cetak" href="<?= BASEURL; ?>/pegawai/cetakIdentitas/<?= $data['pegawai']['id_pegawai']; ?>" class="btn btn-success"><i class="fa fa-print"></i></a>
        <a href="<?= BASEURL; ?>/pegawai" class="btn btn-secondary">Cancel</a>                  
    </div>