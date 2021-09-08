<?php

if (isset($_SESSION['admin'])) {

class Pasien extends Controller {
    public function index()
    {
        $data['pcv'] = 'active';
        $data['pasien'] = $this->model('Pasien_model')->getAllPasien();        
        $data['judul'] = 'Pasien';
        $this->view('templates/header', $data);
        $this->view('pasien/index', $data);
        $this->view('templates/footer');
    }

    public function tambahPasien()
    {
        $data['pcv'] = 'active';
        $data['kode'] = $this->model('Pasien_model')->noRekamMedis();
        $data['judul'] = 'Tambah Data Pasien';
        $this->view('templates/header', $data);
        $this->view('pasien/tambah-pasien', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    { 
        
        if ( $this->model('Pasien_model')->tambahDataPasien($_POST) > 0 ) {
            
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'pasien');
            header('location: ' . BASEURL . '/pasien');
            exit;
        }else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'pasien');
            header('location: ' . BASEURL . '/pasien');
            exit;
        }
    }

    public function hapus($id)
    {
        if ( $this->model('Pasien_model')->hapusDataPasien($id) > 0 ) {            
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'pasien');
            header('location: ' . BASEURL . '/pasien');
            exit;
        }else {
            Flasher::setFlash('gagal', 'hapus', 'danger', 'pasien');
            header('location: ' . BASEURL . '/pasien');
            exit;
        }
    }

    public function ubahPasien($id)
    {
        $data['pcv'] = 'active';
        $data['pasien'] = $this->model('Pasien_model')->getPasienById($id);
        $data['judul'] = 'Ubah Data Pasien';
        $this->view('templates/header', $data);
        $this->view('pasien/ubah-pasien', $data);
        $this->view('templates/footer');
    }

    public function ubah()
    {
        if ( $this->model('Pasien_model')->ubahDataPasien($_POST) > 0 ) {            
            Flasher::setFlash('berhasil', 'dirubah', 'success', 'pasien');
            header('location: ' . BASEURL . '/pasien');
            exit;
        }else {
            Flasher::setFlash('gagal', 'dirubah', 'danger', 'pasien');
            header('location: ' . BASEURL . '/pasien');
            exit;
        }
    }

    public function detailPasien($id)
    {
        $data['pasien'] = $this->model('Pasien_model')->getPasienById($id);       
        $this->view('pasien/detail-pasien', $data);
    }

    public function cetak()
    {
       $data['pasien'] = $this->model('Pasien_model')->getAllPasien(); 
       $this->view('pasien/cetak-laporan', $data); 
    }

    public function cetakIdentitas($id)
    {
        $data['pasien'] = $this->model('Pasien_model')->getPasienById($id);
        $this->view('pasien/cetak-identitas', $data);
    }
}
}else {
   Flasher::setLogin('login', 'terlebih dahulu', 'danger');
   header('location: ' . BASEURL . '/login');           
   exit; 
}