<?php

class Gallery_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGallery()
    {
        $this->db->query("SELECT * FROM tb_galeri ORDER BY id DESC");
        return $this->db->resultSet();
    }

    public function getGalleryById($id)
    {
        $this->db->query("SELECT * FROM tb_galeri WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function uploadGambar()
    {
        $gambar = $_FILES['gambar']['name'];
        $tmp   = $_FILES['gambar']['tmp_name'];
        $nama = $_POST['nama'];
      
        $ekstensi = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $gambar);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

            if (!in_array($ekstensiGambar, $ekstensi)) {
                echo "
                <script>
                    alert ('bukan gambar')
                </script>
            ";
            }
        $file = 'galeri_';
        $file .= $nama;
        $file .= '.';
        $file .= $ekstensiGambar;
        // pindahkan file
        $destinationPath = getcwd().DIRECTORY_SEPARATOR;
        $targetPath = $destinationPath . 'img/gallery/' . basename($file);

        move_uploaded_file($tmp, $targetPath);
        
        return $file;
    }

    public function tambahDataGaleri($data)
    {
        $namafile = $this->uploadGambar();

        $query = 'INSERT INTO tb_galeri VALUES (NULL , :nama, :gambar)';

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('gambar', $namafile);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataGaleri($id)
    {
        $query = "SELECT gambar FROM tb_galeri WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $barisGambar = $this->db->single();

        unlink('img/gallery/'.$barisGambar['gambar']);

        $query = "DELETE FROM tb_galeri WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

}