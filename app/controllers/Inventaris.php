<?php

if (isset($_SESSION['admin'])) {

class Inventaris extends Controller {
    public function index()
    {
        $data['icv'] = 'active';
        $data['kode'] = $this->model('Inventaris_model')->kdBarang();
        $data['inventaris'] = $this->model('Inventaris_model')->getAllInventaris();
        $data['judul'] = 'Inventaris';
        $this->view('templates/header', $data);
        $this->view('inventaris/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    { 
        
        if ( $this->model('Inventaris_model')->tambahDataInventaris($_POST) > 0 ) {
            
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'inventaris');
            header('location: ' . BASEURL . '/inventaris');
            exit;
        }else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'inventaris');
            header('location: ' . BASEURL . '/inventaris');
            exit;
        }
    }

    public function hapus($id)
    { 
        
        if ( $this->model('Inventaris_model')->hapusDataInventaris($id) > 0 ) {
            
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'Gambar');
            header('location: ' . BASEURL . '/inventaris');
            exit;
        }else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'Gambar');
            header('location: ' . BASEURL . '/inventaris');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Inventaris_model')->getInventarisById($_POST['kd_barang']));
    }
    
    public function ubah()
    {
        if ( $this->model('Inventaris_model')->ubahDataInventaris($_POST) > 0 ) {
            
            Flasher::setFlash('berhasil', 'dirubah', 'success', 'inventaris');
            header('location: ' . BASEURL . '/inventaris');
            exit;
        }else {
            Flasher::setFlash('gagal', 'dirubah', 'danger', 'inventaris');
            header('location: ' . BASEURL . '/inventaris');
            exit;
        }
    }
    
    public function cetak()
    {
        if ($_POST['print']=='semua') {
            $data['inventaris'] = $this->model('Inventaris_model')->getAllInventaris();
        }elseif ($_POST['print']=='rusak') {
            $data['rusak'] = $this->model('Inventaris_model')->getPrintRusak();
        }elseif ($_POST['print']=='baik') {
            $data['baik'] = $this->model('Inventaris_model')->getPrintBaik();
        }
        $this->view('inventaris/cetak-laporan', $data);        
    }
}
}else {
    Flasher::setLogin('login', 'terlebih dahulu', 'danger');
    header('location: ' . BASEURL . '/login');           
    exit;
}