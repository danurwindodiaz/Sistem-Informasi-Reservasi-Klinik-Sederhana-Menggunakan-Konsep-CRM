<?php

class Home extends Controller {
    public function index()
    {
        if (isset($_SESSION['admin'])) {
            $data['dcv'] = 'active';
            $data['galeri'] = $this->model('Gallery_model')->getAllGallery();
            $data['inventaris'] = $this->model('Inventaris_model')->getAllInventaris();
            $data['pasien'] = $this->model('Pasien_model')->getAllPasien();
            $data['pegawai'] = $this->model('Pegawai_model')->getAllPegawai();
            $data['reservasi'] = $this->model('Reservasi_model')->getAllReservasi();
            $data['judul'] = 'Dashboard';
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }else {
            Flasher::setLogin('login', 'terlebih dahulu', 'danger');
            header('location: ' . BASEURL . '/login');           
            exit;
        }        
    }


    public function admin()
    {
        if (isset($_SESSION['guest'])) {
            $data['petugas'] = $this->model('Admin_model')->getAllAdmin();
            $this->view('home/admin', $data);
        }else {
            Flasher::setLogin('login', 'terlebih dahulu', 'danger');
            header('location: ' . BASEURL . '/login');           
            exit;
        }        
    }

    public function tambah()
    {
        if ( $this->model('Admin_model')->cekUserName($_POST['username']) > 0 ) {
            Flasher::setLogin('masukkan username baru', ', Username telah terdaftar', 'danger');
            header('location: ' . BASEURL . '/home/admin');           
            exit;
        }else {
            if (isset($_SESSION['guest'])) {        
                if ( $this->model('Admin_model')->tambahDataPetugas($_POST) > 0 ) {
                    
                    Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'petugas');
                    header('location: ' . BASEURL . '/home/admin');
                    exit;
                }else {
                    Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'petugas');
                    header('location: ' . BASEURL . '/home/admin');
                    exit;
                }
            }else {
                Flasher::setLogin('login', 'terlebih dahulu', 'danger');
                header('location: ' . BASEURL . '/login');           
                exit;
            }
        }
    }

    public function hapus($id)
    {
        if (isset($_SESSION['guest'])) {       
            if ( $this->model('Admin_model')->hapusDataPetugas($id) > 0 ) {
                
                Flasher::setFlash('berhasil', 'dihapus', 'success', 'petugas');
                header('location: ' . BASEURL . '/home/admin');
                exit;
            }else {
                Flasher::setFlash('gagal', 'dihapus', 'danger', 'petugas');
                header('location: ' . BASEURL . '/home/admin');
                exit;
            }
        }else {
            Flasher::setLogin('login', 'terlebih dahulu', 'danger');
            header('location: ' . BASEURL . '/login');           
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Admin_model')->getAdminById($_POST['id']));
    }
    
    public function ubah()
    {
        if (isset($_SESSION['guest'])) {
            if ( $this->model('Login_model')->ubahDataPetugas($_POST) > 0 ) {
                
                Flasher::setFlash('berhasil', 'dirubah', 'success', 'petugas');
                header('location: ' . BASEURL . '/home/admin');
                exit;
            }else {
                Flasher::setFlash('gagal', 'dirubah', 'danger', 'home/petugas');
                header('location: ' . BASEURL . '/home/admin');
                exit;
            }
        }else {
            Flasher::setLogin('login', 'terlebih dahulu', 'danger');
            header('location: ' . BASEURL . '/login');           
            exit;
        }
    }
}