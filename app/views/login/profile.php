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
    <title>Kilinik Raharjo Medika | Login</title>
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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>

<body>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="mt-3">
                    <?php Flasher::flash(); ?>
                </div>
                <div class="login-logo">
                    <a href="">
                        <img class="align-content rounded-circle" src="<?= BASEURL; ?>/img/admin.png" alt="" width="150px">
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?= BASEURL; ?>/login/ubah" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama</label>
                             <input type="text" class="form-control" name="nama" value="<?= $data['petugas']['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $data['petugas']['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="passwd" value="<?= $data['petugas']['passwd'] ?>">
                        </div>
                            <input type="hidden" value="<?= $data['petugas']['id'] ?>" name="id">
                        <div class="row form-group">
                            <div class="col-6">
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Save</button>
                            </div>
                            <div class="col-6">
                                <a href="<?= BASEURL; ?>/" class="btn btn-secondary btn-flat m-b-30 m-t-30">Close</a>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>