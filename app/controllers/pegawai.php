<?php

if (isset($_SESSION['admin'])) {

class Pegawai extends Controller {
    public function index()
    {
        $data['pwcv'] = 'active';
        $data['pegawai'] = $this->model('Pegawai_model')->getAllPegawai();
        $data['judul'] = 'Pegawai';
        $this->view('templates/header', $data);
        $this->view('pegawai/index', $data);
        $this->view('templates/footer');
    }

    public function tambahPegawai()
    {
        $data['pwcv'] = 'active';
        $data['kode'] = $this->model('Pegawai_model')->idPegawai();
        $data['judul'] = 'Tambah Data Pegawai';
        $this->view('templates/header', $data);
        $this->view('pegawai/tambah-pegawai', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {         
        if ( $this->model('Pegawai_model')->tambahDataPegawai($_POST) > 0 ) {
            
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'inventaris');
            header('location: ' . BASEURL . '/pegawai');
            exit;
        }else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'inventaris');
            header('location: ' . BASEURL . '/pegawai');
            exit;
        }
    }

    public function hapus($id)
    {
        if ( $this->model('Pegawai_model')->hapusDataPegawai($id) > 0 ) {            
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'pegawai');
            header('location: ' . BASEURL . '/pegawai');
            exit;
        }else {
            Flasher::setFlash('gagal', 'hapus', 'danger', 'pegawai');
            header('location: ' . BASEURL . '/pegawai');
            exit;
        }
    }

    public function ubahPegawai($id)
    {
        $data['pwcv'] = 'active';
        $data['pegawai'] = $this->model('Pegawai_model')->getPegawaiById($id);
        $data['judul'] = 'Ubah Data Pegawai';
        $this->view('templates/header', $data);
        $this->view('pegawai/ubah-pegawai', $data);
        $this->view('templates/footer');
    }

    public function ubah()
    {
        if ( $this->model('pegawai_model')->ubahDatapegawai($_POST) > 0 ) {            
            Flasher::setFlash('berhasil', 'dirubah', 'success', 'pegawai');
            header('location: ' . BASEURL . '/pegawai');
            exit;
        }else {
            Flasher::setFlash('gagal', 'dirubah', 'danger', 'pegawai');
            header('location: ' . BASEURL . '/pegawai');
            exit;
        }
    }

    public function detailPegawai($id)
    {
        $data['pegawai'] = $this->model('Pegawai_model')->getPegawaiById($id);       
        $this->view('pegawai/detail-pegawai', $data);
    }

    public function cetak()
    {
       $data['pegawai'] = $this->model('Pegawai_model')->getAllPegawai(); 
       $this->view('pegawai/cetak-laporan', $data); 
    }
    
    public function cetakIdentitas($id)
    {
        $data['pegawai'] = $this->model('Pegawai_model')->getPegawaiById($id);
        $this->view('pegawai/cetak-identitas', $data);
    }
}
}else {
   Flasher::setLogin('login', 'terlebih dahulu', 'danger');
   header('location: ' . BASEURL . '/login');           
   exit; 
}