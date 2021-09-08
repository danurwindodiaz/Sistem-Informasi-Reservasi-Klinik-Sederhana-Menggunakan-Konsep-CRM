<?php

class Admin_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAdmin()
    {
        $this->db->query("SELECT * FROM tb_petugas ORDER BY id DESC");
        return $this->db->resultSet();
    }

    public function getAdminById($id)
    {
        $this->db->query("SELECT * FROM tb_petugas WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPetugas($data)
    {
        $query = 'INSERT INTO tb_petugas VALUES (NULL, :username, :passwd, :nama)';

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('passwd', $data['passwd']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPetugas($id)
    {        
        $query = "DELETE FROM tb_petugas WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekUserName($id)
    {
        $this->db->query("SELECT username FROM tb_petugas WHERE username = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}