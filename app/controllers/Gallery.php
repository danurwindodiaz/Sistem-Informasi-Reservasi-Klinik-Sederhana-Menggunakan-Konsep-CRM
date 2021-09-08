<?php

class Gallery extends Controller {
    public function index()
    {
        $data['gcv'] = 'active';
        $data['galeri'] = $this->model('Gallery_model')->getAllGallery();
        $data['judul'] = 'Dashboard';
        $this->view('templates/header', $data);
        $this->view('gallery/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    { 
        
        if ( $this->model('Gallery_model')->tambahDataGaleri($_POST) > 0 ) {
            
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Gambar');
            header('location: ' . BASEURL . '/gallery');
            exit;
        }else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Gambar');
            header('location: ' . BASEURL . '/gallery');
            exit;
        }
    }
    
    public function hapus($id)
    { 
        
        if ( $this->model('Gallery_model')->hapusDataGaleri($id) > 0 ) {
            
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'Gambar');
            header('location: ' . BASEURL . '/gallery');
            exit;
        }else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'Gambar');
            header('location: ' . BASEURL . '/gallery');
            exit;
        }
    }
}