<?php

if (isset($_SESSION['admin'])) {

class Reservasi extends Controller {
    public function index()
    {
        $data['tahun'] = $this->model('Reservasi_model')->getTahun();;
        $data['rcv'] = 'active';        
        $data['reservasi'] = $this->model('Reservasi_model')->getAllReservasi();
        $data['judul'] = 'Reservasi';
        $this->view('templates/header', $data);
        $this->view('reservasi/index', $data);
        $this->view('templates/footer');
    }

    public function buatReservasi()
    {
        if(!empty($_SESSION['psn']))
        {
            $data['psn'] = $this->model('Pasien_model')->getPasienById($_SESSION['psn']);
        }
        $data['kodePsn'] = $this->model('Pasien_model')->noRekamMedis();
        $data['kode'] = $this->model('Reservasi_model')->kdReservasi();
        $data['pasien'] = $this->model('Pasien_model')->getAllPasien();
        $data['judul'] = 'Tambah Data Reservasi';
        $this->view('templates/header', $data);
        $this->view('reservasi/buat-reservasi', $data);
        $this->view('templates/footer');
    }

    public function addPasien($id)
    {
        if ($_SESSION['psn'] == $id ) {
            Flasher::setFlash('telah', 'ditambahkan', 'danger', 'pelanggan');
            header('location: ' . BASEURL . '/reservasi/buatReservasi');
            exit;
        }else {
            $_SESSION['psn'] = $id;
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Pelanggan');
            header('location: ' . BASEURL . '/reservasi/buatReservasi');
            exit;
        }
    }

    public function hapus($id)
    {
        if ( $this->model('Reservasi_model')->hapusDataReservasi($id) > 0 ) {            
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'reservasi');
            header('location: ' . BASEURL . '/reservasi');
            exit;
        }else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'reservasi');
            header('location: ' . BASEURL . '/reservasi');
            exit;
        }
    }

    public function tambah()
    {
        if (!empty($_SESSION['psn'])) {
            if ( $this->model('Reservasi_model')->tambahDataReservasi($_POST) > 0 ) {
                $this->model('Pasien_model')->ubahDataPasien($_POST);                
                Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'reservasi');
                header('location: ' . BASEURL . '/reservasi');
                unset($_SESSION['psn']);
                exit;
            }else {
                Flasher::setFlash('gagal', 'dirubah', 'danger', 'reservasi');
                header('location: ' . BASEURL . '/reservasi');
                unset($_SESSION['psn']);
                exit;
            }            
        } else {
            if ( $this->model('Pasien_model')->tambahDataPasien($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'reservasi');
                
                if ( $this->model('Reservasi_model')->tambahDataReservasi($_POST) > 0 ) {                        
                        Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'reservasi');
                        header('location: ' . BASEURL . '/reservasi/tambahReservasi');
                        exit;
                    }else {
                        Flasher::setFlash('gagal', 'dirubah', 'danger', 'reservasi');
                        header('location: ' . BASEURL . '/reservasi/tambahReservasi');
                        exit;
                    }
                header('location: ' . BASEURL . '/reservasi/tambahReservasi');    
            }else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'pelanggan');
                header('location: ' . BASEURL . '/reservasi/tambahReservasi');
                exit;
            }            

        }
    }

    public function getUbah($id)
    {
        $data['rcv'] = 'active';
        $data['reservasi'] = $this->model('Reservasi_model')->getReservasiById($id);
        $data['judul'] = 'Ubah Data Registrasi';
        $this->view('templates/header', $data);
        $this->view('reservasi/ubah-reservasi', $data);
        $this->view('templates/footer');
    }

    public function cetak()
    {
        if ($_POST['print']=='tdp') {
           $data['tdirawat'] = $this->model('Reservasi_model')->getTidakDirawat(); 
        }elseif ($_POST['print']=='dp') {
            $data['dirawat'] = $this->model('Reservasi_model')->getDirawat();
        }elseif ($_POST['print']=='tgl') {
            $data['tanggal'] = $this->model('Reservasi_model')->cetakTgl($_POST['tanggal']);
        }elseif ($_POST['print']=='bln') {
            $data['bulan'] = $this->model('Reservasi_model')->cetakBln($_POST);
        }elseif ($_POST['print']=='thn') {
            $data['tahun'] = $this->model('Reservasi_model')->cetakThn($_POST);
        }
        else {
            $data['reservasi'] = $this->model('Reservasi_model')->getAllReservasi();            
        }
       $this->view('reservasi/cetak-laporan', $data); 
    }

    public function cetakReservasi($id)
    {
        $data['reservasi'] = $this->model('Reservasi_model')->getReservasiById($id);
        $this->view('reservasi/cetak-reservasi', $data);
    }

    public function ubah()
    {
        if ( $this->model('Reservasi_model')->ubahDataReservasi($_POST) > 0 ) {            
            Flasher::setFlash('berhasil', 'dirubah', 'success', 'reservasi');
            header('location: ' . BASEURL . '/reservasi');
            exit;
        }else {
            Flasher::setFlash('gagal', 'dirubah', 'danger', 'reservasi');
            header('location: ' . BASEURL . '/reservasi');
            exit;
        }
    }

    public function reset()
    {
        unset($_SESSION['psn']);
        header('location: ' . BASEURL . '/reservasi/buatReservasi');

    }

}
}else {
    Flasher::setLogin('login', 'terlebih dahulu', 'danger');
    header('location: ' . BASEURL . '/login');           
    exit;
}