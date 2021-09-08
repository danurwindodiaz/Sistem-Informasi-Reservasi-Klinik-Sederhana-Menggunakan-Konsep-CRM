<?php

class Pegawai_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function idPegawai()
    {
        $query = "SELECT max(id_pegawai) as maxKode FROM tb_pegawai";
        $this->db->query($query);
        $this->db->execute();

        $hasil = $this->db->single();

        $idPegawai = $hasil['maxKode'];
        $noUrut = (int) substr($idPegawai, 4, 4);
        $noUrut++;
        $char = "PGW";
        $newID = $char . sprintf("%03s", $noUrut);

        return $newID;
    }

    public function getAllPegawai()
    {
        $this->db->query("SELECT * FROM tb_pegawai ORDER BY id_pegawai DESC");
        return $this->db->resultSet();
    }

    public function getPegawaiById($id)
    {
        $this->db->query("SELECT * FROM tb_pegawai WHERE id_pegawai=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPegawai($data)
    {        
        $query = 'INSERT INTO tb_pegawai VALUES (:id_pegawai, :nama, :nik, :tanggal_lahir, :jenis_kelamin, :agama, :pendidikan_terakhir, :jabatan, :no_tlp, :sts, :alamat)';

        $this->db->query($query);

        $this->db->bind('id_pegawai', $data['id_pegawai']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('pendidikan_terakhir', $data['pendidikan_terakhir']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('no_tlp', $data['no_tlp']);
        $this->db->bind('sts', $data['sts']);
        $this->db->bind('alamat', $data['alamat']);

       
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPegawai($id)
    {
        $query = "DELETE FROM tb_pegawai WHERE id_pegawai = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDatapegawai($data)
    {
        $query = 'UPDATE tb_pegawai SET nama = :nama, nik = :nik, tanggal_lahir = :tanggal_lahir, jenis_kelamin = :jenis_kelamin, agama = :agama, pendidikan_terakhir = :pendidikan_terakhir, jabatan = :jabatan, no_tlp = :no_tlp, sts = :sts, alamat = :alamat WHERE id_pegawai = :id_pegawai';

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('pendidikan_terakhir', $data['pendidikan_terakhir']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('no_tlp', $data['no_tlp']);
        $this->db->bind('sts', $data['sts']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id_pegawai', $data['id_pegawai']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}