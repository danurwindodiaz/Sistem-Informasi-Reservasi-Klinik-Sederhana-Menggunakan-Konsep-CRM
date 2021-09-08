<?php

class Inventaris_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    

    public function kdBarang()
    {
        $query = "SELECT max(kd_barang) as maxKode FROM tb_inventaris";
        $this->db->query($query);
        $this->db->execute();

        $hasil = $this->db->single();

        $kodeBarang = $hasil['maxKode'];
        $noUrut = (int) substr($kodeBarang, 5, 5);
        $noUrut++;
        $char = "INV";
        $newID = $char . sprintf("%04s", $noUrut);

        return $newID;
    }
    

    public function getAllInventaris()
    {
        $this->db->query("SELECT * FROM tb_inventaris ORDER BY kd_barang DESC");
        return $this->db->resultSet();
    }

    public function getInventarisById($id)
    {
        $this->db->query("SELECT * FROM tb_inventaris WHERE kd_barang=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getPrintRusak()
    {
        $data = 'Rusak';
        $this->db->query("SELECT * FROM tb_inventaris WHERE kondisi=:id");
        $this->db->bind('id', $data);
        return $this->db->resultSet();
    }

    public function getPrintBaik()
    {
        $data = 'Baik';
        $this->db->query("SELECT * FROM tb_inventaris WHERE kondisi=:id");
        $this->db->bind('id', $data);
        return $this->db->resultSet();
    }

    public function tambahDataInventaris($data)
    {
        $query = 'INSERT INTO tb_inventaris VALUES (:kd_barang, :nama, :kondisi, :catatan)';

        $this->db->query($query);
        $this->db->bind('kd_barang', $data['kd_barang']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kondisi', $data['kondisi']);
        $this->db->bind('catatan', $data['catatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataInventaris($id)
    {        
        $query = "DELETE FROM tb_inventaris WHERE kd_barang = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataInventaris($data)
    {
        $query = 'UPDATE tb_inventaris SET nama = :nama, kondisi = :kondisi, catatan = :catatan WHERE kd_barang = :kd_barang';

        $this->db->query($query);
        $this->db->bind('kd_barang', $data['kd_barang']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kondisi', $data['kondisi']);
        $this->db->bind('catatan', $data['catatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}