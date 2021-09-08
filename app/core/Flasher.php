<?php

class Flasher {

    public static function setFlash($pesan, $aksi, $tipe, $data)
    {
        $_SESSION['flash'] =[
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
            'data' => $data
        ];
    }

    public static function flash()
    {
        if ( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Data ' . $_SESSION['flash']['data'] . ' <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['flash']);
        }
    }

    public static function setLogin($pesan, $aksi, $tipe)
    {
        $_SESSION['log'] =[
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe            
        ];
    }

    public static function notLogin()
    {
        if ( isset($_SESSION['log']) ) {
            echo '<div class="alert alert-' . $_SESSION['log']['tipe'] . ' alert-dismissible fade show" role="alert">
                   Silahkan <strong>' . $_SESSION['log']['pesan'] . '</strong> ' . $_SESSION['log']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['log']);
        }
    }
}