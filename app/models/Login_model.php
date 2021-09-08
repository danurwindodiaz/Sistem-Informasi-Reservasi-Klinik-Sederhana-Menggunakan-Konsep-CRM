<?php

class Login_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLogin($data)
    {
        $this->db->query("SELECT * FROM tb_petugas WHERE username = :user AND passwd = :passwd");
        $this->db->bind('user', $data['username']);
        $this->db->bind('passwd', $data['passwd']);

        return $this->db->single();
    }

    public function getLoginAdmin($data)
    {
        $this->db->query("SELECT * FROM tb_admin WHERE username = :user AND passwd = :passwd");
        $this->db->bind('user', $data['username']);
        $this->db->bind('passwd', $data['passwd']);

        return $this->db->single();
    }

    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM tb_petugas WHERE username = :user");
        $this->db->bind('user', $id);       

        return $this->db->single();
    }

    public function getAdminrById($id)
    {
        $this->db->query("SELECT * FROM tb_admin WHERE username = :user");
        $this->db->bind('user', $id);       

        return $this->db->single();
    }

    public function ubahDataPetugas($data)
    {
        $query = 'UPDATE tb_petugas SET username = :username, passwd = :passwd, nama = :nama WHERE id = :id';

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('passwd', $data['passwd']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataAdmin($data)
    {
        $query = 'UPDATE tb_admin SET username = :username, passwd = :passwd WHERE id = :id';

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('passwd', $data['passwd']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}