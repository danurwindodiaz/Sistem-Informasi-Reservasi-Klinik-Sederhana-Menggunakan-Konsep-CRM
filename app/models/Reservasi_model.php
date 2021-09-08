<?php

class Reservasi_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function kdReservasi()
    {
        $query = "SELECT max(kd_reservasi) as maxKode FROM tb_reservasi";
        $this->db->query($query);
        $this->db->execute();

        $hasil = $this->db->single();

        $kdReservasi = $hasil['maxKode'];
        $noUrut = (int) substr($kdReservasi, 5, 5);
        $noUrut++;
        $char = "RG";
        $newID = $char . sprintf("%06s", $noUrut);

        return $newID;
    }

    public function getAllReservasi()
    {
        $this->db->query("SELECT * FROM tb_reservasi INNER JOIN tb_pasien ON tb_pasien.no_rekam_medis=tb_reservasi.no_rekam_medis");
        return $this->db->resultSet();
    }

    public function getReservasiById($id)
    {
        $this->db->query("SELECT * FROM tb_reservasi INNER JOIN tb_pasien ON tb_pasien.no_rekam_medis=tb_reservasi.no_rekam_medis WHERE tb_reservasi.kd_reservasi=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataReservasi($data)
    {
        $tanggal='00/00/0000';
        $status='Dalam Perawatan';
        $diagnosis = '';

        $query = 'INSERT INTO tb_reservasi VALUES (:kd_reservasi, :no_rekam_medis, :tanggal_masuk, :tanggal_keluar, :perawatan, :nama_penanggung, :hubungan, :no_tlp, :status, :diagnosis)';

        $this->db->query($query);
        $this->db->bind('kd_reservasi', $data['kd_reservasi']);
        $this->db->bind('no_rekam_medis', $data['no_rekam_medis']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind('tanggal_keluar', $tanggal);
        $this->db->bind('perawatan', $data['perawatan']);
        $this->db->bind('nama_penanggung', $data['nama_penanggung']);
        $this->db->bind('hubungan', $data['hubungan']);
        $this->db->bind('no_tlp', $data['no_tlp']);
        $this->db->bind('status', $status);
        $this->db->bind('diagnosis', $diagnosis);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataReservasi($id)
    {
        $query = "DELETE FROM tb_reservasi WHERE kd_reservasi = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataReservasi($data)
    {
        $query = 'UPDATE tb_reservasi SET tanggal_masuk = :tanggal_masuk, tanggal_keluar = :tanggal_keluar, perawatan = :perawatan, nama_penanggung = :nama_penanggung, hubungan = :hubungan, no_tlp = :no_tlp, status = :status, diagnosis = :diagnosis WHERE kd_reservasi = :kd_reservasi';

        $this->db->query($query);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind('tanggal_keluar', $data['tanggal_keluar']);
        $this->db->bind('perawatan', $data['perawatan']);
        $this->db->bind('nama_penanggung', $data['nama_penanggung']);
        $this->db->bind('hubungan', $data['hubungan']);
        $this->db->bind('no_tlp', $data['no_tlp']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('kd_reservasi', $data['kd_reservasi']);
        $this->db->bind('diagnosis', $data['diagnosis']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getDirawat()
    {
        $id="Dalam Perawatan";
        $this->db->query("SELECT * FROM tb_reservasi INNER JOIN tb_pasien ON tb_pasien.no_rekam_medis=tb_reservasi.no_rekam_medis WHERE tb_reservasi.status = :id");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getTidakDirawat()
    {
        $id="Tidak Dalam Perawatan";
        $this->db->query("SELECT * FROM tb_reservasi INNER JOIN tb_pasien ON tb_pasien.no_rekam_medis=tb_reservasi.no_rekam_medis WHERE tb_reservasi.status = :id");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
    
    public function getTahun()
    {
        $this->db->query("SELECT YEAR(tanggal_masuk) AS tahun FROM tb_reservasi GROUP BY YEAR(tanggal_masuk)");
        return $this->db->resultSet();
    }

    public function cetakTgl($id)
    {
        $this->db->query("SELECT * FROM tb_reservasi INNER JOIN tb_pasien ON tb_pasien.no_rekam_medis=tb_reservasi.no_rekam_medis WHERE DATE(tanggal_masuk) = :id");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function cetakBln($data)
    {
        $this->db->query("SELECT * FROM tb_reservasi INNER JOIN tb_pasien ON tb_pasien.no_rekam_medis=tb_reservasi.no_rekam_medis WHERE MONTH(tanggal_masuk) = :bulan AND YEAR(tanggal_masuk) = :tahun");
        $this->db->bind('bulan', $data['bulan']);
        $this->db->bind('tahun', $data['tahun']);
        return $this->db->resultSet();
    }

    public function cetakThn($data)
    {
        $this->db->query("SELECT * FROM tb_reservasi INNER JOIN tb_pasien ON tb_pasien.no_rekam_medis=tb_reservasi.no_rekam_medis WHERE YEAR(tanggal_masuk) = :tahun");        
        $this->db->bind('tahun', $data['tahun']);
        return $this->db->resultSet();
    }
}