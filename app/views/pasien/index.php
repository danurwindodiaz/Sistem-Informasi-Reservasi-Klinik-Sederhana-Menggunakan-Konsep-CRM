<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Pasien</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Pasien</a></li>
                                    <li class="active">Data Pasien</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <div class="col-11">
                                        <strong class="card-title">Data Table</strong>
                                    </div>
                                    <div class="col-1">
                                        <a title="Cetak Laporan" href="<?= BASEURL; ?>/pasien/cetak" class="btn btn-success"><i class="fa fa-print"></i></a>
                                    </div>
                                </div>                                
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Rekam Medis</th>
                                            <th>Nama Pasien</th>
                                            <th>NIK</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1; 
                                    foreach ( $data['pasien'] as $psn) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $psn['no_rekam_medis']; ?></td>
                                            <td><?= $psn['nama']; ?></td>
                                            <td><?= $psn['nik']; ?></td>
                                            <td><?= $psn['jenis_kelamin']; ?></td>
                                            <td>
                                            <div class="btn-group btn-group-toggle">
                                                <a title="Hapus" href="<?= BASEURL; ?>/pasien/hapus/<?=  $psn['no_rekam_medis']; ?>" onclick="return confirm('Yakin?');" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <a title="Edit" href="<?= BASEURL; ?>/pasien/ubahPasien/<?=  $psn['no_rekam_medis']; ?>" class="btn btn-success">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a title="Detail" href="<?= BASEURL; ?>/pasien/detailPasien/<?=  $psn['no_rekam_medis']; ?>" class="btn btn-info" data-toggle="modal" data-target="#modalDetailPasien">
                                                    <i class="fa fa-list-alt"></i>
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



    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <!-- Modal -->
        <div class="modal fade" id="modalDetailPasien" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    
                    
                </div>
            </div>
        </div>