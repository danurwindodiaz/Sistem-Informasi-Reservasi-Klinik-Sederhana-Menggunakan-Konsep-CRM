<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Inventaris</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Data Inventaris</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated-fadein">
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-primary btn-sm tampilTambahInventaris" data-toggle="modal"
                            data-target="#modalInventaris"><i class="fa fa-plus"></i>&nbsp;
                            Tambah Inventaris</button>
                        <button title="Cetak Laporan" type="button" class="btn btn-success btn-sm" data-toggle="modal"
                            data-target="#modalPrint"><i class="fa fa-print"></i></button>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <?php Flasher::flash(); ?>
            </div>
            <div class="animated fadeIn">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Kondisi</th>
                                            <th>Catatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1; 
                                    foreach ( $data['inventaris'] as $inv) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $inv['kd_barang']; ?></td>
                                            <td><?= $inv['nama']; ?></td>
                                            <td><?= $inv['kondisi']; ?></td>
                                            <td><?= $inv['catatan']; ?></td>
                                            <td>
                                                <div class="btn-group btn-group-toggle">
                                                    <a title="Hapus" href="<?= BASEURL; ?>/inventaris/hapus/<?=  $inv['kd_barang']; ?>"
                                                        onclick="return confirm('Yakin?');" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                    <a title="Edit" href="" class="btn btn-success tampilUbahInventaris"
                                                        data-toggle="modal" data-target="#modalInventaris"
                                                        data-id="<?= $inv['kd_barang']; ?>">
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

        

    </div><!-- /#right-panel -->
    <!-- Modal -->
        <div class="modal fade" id="modalInventaris" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="mb-15" id="largeModalLabel" align="center" ><b>Tambah Data Inventaris</b></h5>                    
                        <form action="<?= BASEURL; ?>/inventaris/tambah" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Kd Barang</label>
                                </div>
                                <div class="col-12 col-md-9">                                    
                                    <label for="" class="form-control-label" id="label"><?= $data['kode']; ?></label>
                                    <input type="hidden" name="kd_barang" id="kd_barang" value="<?= $data['kode']; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Nama
                                        Barang</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nama" name="nama"
                                        placeholder="Nama Barang" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Kondisi</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label">
                                            <input type="radio" id="kondisi1" name="kondisi" value="Baik"
                                                class="form-check-input" checked>Baik
                                        </label>
                                    </div>
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label">
                                            <input type="radio" id="kondisi2" name="kondisi" value="Rusak"
                                                class="form-check-input">Rusak
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-3"><label for="textarea-input"
                                        class=" form-control-label">Catatan</label></div>
                                <div class="col-9"><textarea name="catatan" id="catatan" rows="4"
                                        placeholder="Catatan..." class="form-control"></textarea></div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

<!-- Modal -->
        <div class="modal fade" id="modalPrint" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">                    
                        <form action="<?= BASEURL; ?>/inventaris/cetak" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group">
                                    <label class=" form-control-label">Cetak Berdasarkan :</label>
                                    <div class="input-group">
                                        <select name="print" id="select" class="form-control">
                                            <option value="semua">Semua</option>
                                            <option value="rusak">Kondisi Rusak</option>
                                            <option value="baik">Kondisi Baik</option>                                            
                                        </select>
                                    </div>
                            </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>