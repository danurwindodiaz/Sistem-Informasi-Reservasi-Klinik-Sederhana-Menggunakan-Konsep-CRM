<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Registrasi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Data Registrasi</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="mt">
                <?php Flasher::flash(); ?>
            </div>            
            <div class="animated fadeIn">
                <div class="row mt">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-11">
                                        <strong class="card-title">Data Table</strong>
                                    </div>
                                    <div class="col-1">
                                        <button title="Cetak Laporan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalPrint"><i class="fa fa-print"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>                                         
                                            <th>No Rekam Medis</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Keluar</th>
                                            <th>Jenis Perawatan</th>
                                            <th>Status</th>
                                            <th>Diagnosis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1; 
                                    foreach ( $data['reservasi'] as $rsv) : ?>
                                    <?php if ($rsv['tanggal_keluar']=='0000-00-00') {
                                                    $tanggal_keluar = '00/00/00';
                                                }else {
                                                   $tanggal_keluar = date("d/m/y", strtotime($rsv['tanggal_keluar']));
                                                }  ?>
                                        <tr>                                    
                                            <td><?= $rsv['no_rekam_medis']; ?></td>
                                            <td><?= date("d/m/y", strtotime($rsv['tanggal_masuk'])); ?></td>
                                            <td><?= $tanggal_keluar; ?></td>
                                            <td><?= $rsv['perawatan']; ?></td>
                                            <td><?= $rsv['status']; ?></td>
                                            <td><?= $rsv['diagnosis']; ?></td>
                                            <td>
                                            <div class="btn-group btn-group-toggle">
                                                <a title="Hapus" href="<?= BASEURL; ?>/reservasi/hapus/<?=  $rsv['kd_reservasi']; ?>" onclick="return confirm('Yakin?');" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <a title="Edit" href="<?= BASEURL; ?>/reservasi/getUbah/<?=  $rsv['kd_reservasi']; ?>" class="btn btn-success">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 
                                                <a title="Cetak" href="<?= BASEURL; ?>/reservasi/cetakReservasi/<?=  $rsv['kd_reservasi']; ?>" class="btn btn-info">
                                                    <i class="fa fa-print"></i>
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
                        <form action="<?= BASEURL; ?>/reservasi/cetak" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group">
                                    <label class=" form-control-label">Cetak Berdasarkan :</label>
                                    <div class="input-group">
                                        <select name="print" id="select" class="form-control">
                                            <option value="sm">Semua</option>
                                            <option value="tgl">Tanggal</option>
                                            <option value="bln">Bulan</option>
                                            <option value="thn">Tahun</option>
                                            <option value="dp">Dalam Perawatan</option>
                                            <option value="tdp">Tidak Dalam Perawatan</option>                   
                                        </select>
                                    </div>                                    
                            </div>
                             <div class="form-group" id="form-tanggal">
                                    <label class=" form-control-label">Tanggal Masuk Pasien</label>
                                    <div class="input-group">                                        
                                        <input class="form-control" name="tanggal" type="date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                    </div>                                    
                                </div>
                            <div class="form-group" id="form-bulan">
                                    <label class=" form-control-label">Bulan :</label>
                                    <div class="input-group">
                                            <select name="bulan" class="form-control">
                                                <option value="">Pilih</option>
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                    </div>                                   
                            </div>                            
                            <div class="form-group">
                                    <div class="input-group" id="form-tahun">
                                            <select name="tahun" class="form-control">
                                                <?php foreach ( $data['tahun'] as $thn) : ?>
                                                    <option value="<?= $thn['tahun']; ?>"><?= $thn['tahun']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                            </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>