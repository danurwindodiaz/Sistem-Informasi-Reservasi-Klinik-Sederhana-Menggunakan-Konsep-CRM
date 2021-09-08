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
    <title>Klinik Raharjo Medika | Admin</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
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

    <link href ="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel = "stylesheet" crossorigin="anonymous">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= BASEURL; ?>/css/lib/lightbox/lightbox.min.css">

    
    
     
</head>

<body>    
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= BASEURL; ?>/"><img src="<?= BASEURL; ?>/img/logo1.png" alt="Logo"></a>                    
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= BASEURL; ?>/img/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?= BASEURL; ?>/login/profileAdmin"><i class="fa fa- user"></i>Profile</a>

                            <a class="nav-link" href="<?= BASEURL; ?>/login/signOut"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
    </div>


    <div class="content">
        <div class="mt-3">
                <?php Flasher::flash(); ?>
            </div>
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-10">
                                    <strong class="card-title">Data Petugas</strong>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary btn-sm tampilTambahPetugas"
                                        data-toggle="modal" data-target="#modalAdmin"><i
                                            class="fa fa-plus"></i>&nbsp;
                                        Tambah Petugas</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Passwd</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1; 
                                    foreach ( $data['petugas'] as $ptg) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $ptg['nama']; ?></td>
                                            <td><?= $ptg['username']; ?></td>
                                            <td><?= $ptg['passwd']; ?></td>
                                            <td>
                                                <div class="btn-group btn-group-toggle">
                                                    <a title="Hapus" href="<?= BASEURL; ?>/home/hapus/<?=  $ptg['id']; ?>"
                                                        onclick="return confirm('Yakin?');" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                    <a title="Edit" href="" class="btn btn-success tampilUbahAdmin"
                                                        data-toggle="modal" data-target="#modalAdmin"
                                                        data-id="<?= $ptg['id']; ?>">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


    <div class="clearfix"></div>

     <!-- Modal -->
        <div class="modal fade" id="modalAdmin" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="">              
                            <?php Flasher::notLogin(); ?>
                        </div>
                        <h5 class="mb-15" id="largeModalLabel" align="center" ><b>Tambah Data Petugas</b></h5>                    
                        <form action="<?= BASEURL; ?>/admin/tambah" method="post" enctype="multipart/form-data" class="form-horizontal">                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Nama
                                        Petugas</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nama" name="nama"
                                        placeholder="Nama Petugas" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Username</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="username" name="username"
                                        placeholder="Username" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Password</label></div>
                                <div class="col-12 col-md-9"><input type="password" id="passwd" name="passwd"
                                         class="form-control"></div>
                            </div>
                            <input type="hidden" name="id" id="id">                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>




    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?= BASEURL; ?>/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="<?= BASEURL; ?>/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="<?= BASEURL; ?>/js/init/fullcalendar-init.js"></script>

    <script src="<?= BASEURL; ?>/js/lib/data-table/datatables.min.js"></script>
    <script src="<?= BASEURL; ?>/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?= BASEURL; ?>/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?= BASEURL; ?>/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?= BASEURL; ?>/js/lib/data-table/jszip.min.js"></script>
    <script src="<?= BASEURL; ?>/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?= BASEURL; ?>/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?= BASEURL; ?>/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?= BASEURL; ?>/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?= BASEURL; ?>/js/init/datatables-init.js"></script>
    <script src="<?= BASEURL; ?>/js/script.js" ></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="<?= BASEURL; ?>/js/lib/lightbox/lightbox-plus-jquery.min.js"></script> 

  
</body>

</html>