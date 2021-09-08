<?php

class Pasien_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function noRekamMedis()
    {
        $query = "SELECT max(no_rekam_medis) as maxKode FROM tb_pasien";
        $this->db->query($query);
        $this->db->execute();

        $hasil = $this->db->single();

        $noRekamMedis = $hasil['maxKode'];
        $noUrut = (int) substr($noRekamMedis, 5, 5);
        $noUrut++;        
        $newID = sprintf("%06s", $noUrut);

        return $newID;
    }
    

    public function getAllPasien()
    {
        $this->db->query("SELECT * FROM tb_pasien ORDER BY no_rekam_medis DESC");
        return $this->db->resultSet();
    }

    public function getPasienById($id)
    {
        $this->db->query("SELECT * FROM tb_pasien WHERE no_rekam_medis=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPasien($data)
    {
        $query = 'INSERT INTO tb_pasien VALUES (:no_rekam_medis, :nama, :nik, :tanggal_lahir, :umur, :jenis_kelamin, :agama, :pekerjaan, :alamat, :riwayat_penyakit)';

        $this->db->query($query);
        $this->db->bind('no_rekam_medis', $data['no_rekam_medis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('riwayat_penyakit', $data['riwayat_penyakit']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPasien($id)
    {        
        $query = "DELETE FROM tb_pasien WHERE no_rekam_medis = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPasien($data)
    {
        $query = 'UPDATE tb_pasien SET nama = :nama, nik = :nik, tanggal_lahir = :tanggal_lahir, umur = :umur, jenis_kelamin = :jenis_kelamin, agama = :agama, pekerjaan = :pekerjaan, alamat = :alamat, riwayat_penyakit = :riwayat_penyakit WHERE no_rekam_medis = :no_rekam_medis';

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('riwayat_penyakit', $data['riwayat_penyakit']);
        $this->db->bind('no_rekam_medis', $data['no_rekam_medis']);        

        $this->db->execute();

        return $this->db->rowCount();
    }
}