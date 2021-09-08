<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Klinik Raharjo Medika | <?= $data['judul']; ?></title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style2.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/cs-skin-elastic.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= BASEURL; ?>/css/lib/lightbox/lightbox.min.css">


</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?= (isset($data['dcv'])) ? $data['dcv'] : ''; ?>">
                        <a href="<?= BASEURL; ?>/"><i class="menu-icon fa fa-laptop"></i> Dashboard </a>
                    </li>
                    <li class="<?= (isset($data['gcv'])) ? $data['gcv'] : ''; ?>">
                        <a href="<?= BASEURL; ?>/gallery"><i class="menu-icon fa fa-folder-open"></i> Gallery </a>
                    </li>
                    <li class="menu-title">Menu</li>
                    <li class="<?= (isset($data['icv'])) ? $data['icv'] : ''; ?>">
                        <a href="<?= BASEURL; ?>/inventaris"><i class="menu-icon fa fa-suitcase"></i> Inventaris </a>
                    </li>
                    <li class="menu-item-has-children dropdown <?= (isset($data['pcv'])) ? $data['pcv'] : ''; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i> Pasien</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="<?= BASEURL; ?>/pasien/tambahPasien"> Tambah Pasien</a></li>
                            <li><i class="fa fa-list"></i><a href="<?= BASEURL; ?>/pasien"> Data Pasien</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown <?= (isset($data['pwcv'])) ? $data['pwcv'] : ''; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-md"></i> Pegawai</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="<?= BASEURL; ?>/pegawai/tambahPegawai"> Tambah Pegawai</a></li>
                            <li><i class="fa fa-list"></i><a href="<?= BASEURL; ?>/pegawai"> Data Pegawai</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown <?= (isset($data['rcv'])) ? $data['rcv'] : ''; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-stethoscope"></i> Registrasi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="<?= BASEURL; ?>/reservasi/buatReservasi"> Buat Registrasi</a>
                            </li>
                            <li><i class="fa fa-list"></i><a href="<?= BASEURL; ?>/reservasi"> Data Registrasi</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= BASEURL; ?>/"><img src="<?= BASEURL; ?>/img/logo1.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= BASEURL; ?>/img/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?= BASEURL; ?>/login/profile"><i class="fa fa- user"></i>Profile</a>

                            <a class="nav-link" href="<?= BASEURL; ?>/login/signOut"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->