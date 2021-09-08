<?php

class Login extends Controller {

    public function index()
    {
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function admin()
    {
        $this->view('login/login-admin');
        $this->view('templates/footer');
    }

    public function profile()
    {
        $data['petugas'] =  $this->model('Login_model')->getUserById($_SESSION['admin']); 
        $this->view('login/profile', $data);
        $this->view('templates/footer');
    }

    public function profileAdmin()
    {
        $data['admin'] =  $this->model('Login_model')->getAdminrById($_SESSION['guest']); 
        $this->view('login/profile-admin', $data);
        $this->view('templates/footer');
    }

    public function signIn()
    {         
        if ( $this->model('Login_model')->getLogin($_POST) > 0 ) {            
            $_SESSION['admin'] = $_POST['username'];
            header('location: ' . BASEURL . '/');
            exit;
        }else {
            Flasher::setFlash('tidak', 'ditemukan', 'danger', 'user');
            header('location: ' . BASEURL . '/login');           
            exit;
        }
    }

    public function signInAdmin()
    {         
        if ( $this->model('Login_model')->getLoginAdmin($_POST) > 0 ) {            
            $_SESSION['guest'] = $_POST['username'];
            header('location: ' . BASEURL . '/home/admin');
            exit;
        }else {
            Flasher::setFlash('tidak', 'ditemukan', 'danger', 'admin');
            header('location: ' . BASEURL . '/login');           
            exit;
        }
    }

    public function signOut()
    {
        session_destroy();
        header('location: ' . BASEURL . '/login');           
        exit;
    }

    public function ubah()
    {
        if ( $this->model('Login_model')->ubahDataPetugas($_POST) > 0 ) {            
            Flasher::setFlash('berhasil', 'dirubah', 'success', 'user');
            $_SESSION['admin'] = $_POST['username'];
            header('location: ' . BASEURL . '/login/profile');
            exit;
        }else {
            Flasher::setFlash('gagal', 'dirubah', 'danger', 'user');
            header('location: ' . BASEURL . '/login/profile');
            exit;
        }
    }

    public function ubahAdmin()
    {
        if ( $this->model('Login_model')->ubahDataAdmin($_POST) > 0 ) {            
            Flasher::setFlash('berhasil', 'dirubah', 'success', 'user');
            $_SESSION['guest'] = $_POST['username'];
            header('location: ' . BASEURL . '/login/profileAdmin');
            exit;
        }else {
            Flasher::setFlash('gagal', 'dirubah', 'danger', 'user');
            header('location: ' . BASEURL . '/login/profileAdmin');
            exit;
        }
    }
}