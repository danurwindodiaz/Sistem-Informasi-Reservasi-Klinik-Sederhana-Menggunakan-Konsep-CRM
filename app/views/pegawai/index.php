<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Pegawai</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Pegawai</a></li>
                                    <li class="active">Data Pegawai</li>
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
                                        <a title="Cetak Laporan" href="<?= BASEURL; ?>/pegawai/cetak" class="btn btn-success"><i class="fa fa-print"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Pegawai</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1; 
                                    foreach ( $data['pegawai'] as $pgw) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $pgw['id_pegawai']; ?></td>
                                            <td><?= $pgw['nama']; ?></td>
                                            <td><?= $pgw['jabatan']; ?></td>
                                            <td><?= $pgw['jenis_kelamin']; ?></td>
                                            <td>
                                            <div class="btn-group btn-group-toggle">
                                                <a title="Hapus" href="<?= BASEURL; ?>/pegawai/hapus/<?=  $pgw['id_pegawai']; ?>" onclick="return confirm('Yakin?');" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <a title="Edit" href="<?= BASEURL; ?>/pegawai/ubahPegawai/<?=  $pgw['id_pegawai']; ?>" class="btn btn-success">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a title="Detail" href="<?= BASEURL; ?>/pegawai/detailPegawai/<?=  $pgw['id_pegawai']; ?>" class="btn btn-info" data-toggle="modal" data-target="#modalDetailPegawai">
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
        <div class="modal fade" id="modalDetailPegawai" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    
                    
                </div>
            </div>
        </div>