<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Gallery</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Gallery</li>
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
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#modalTambah"><i class="fa fa-upload"></i>&nbsp;
                            Upload Gambar</button>
                    </div>
                </div>
            </div>
            <div class="animated fadeIn mt-4">
                <div class="row">
                    <div class="col">
                        <div class="card">

                            <div class="container card-body">
                                <div class="row">
                                <?php foreach ( $data['galeri'] as $glr) : ?>
                                    <div class="col-md-4 mt-3">
                                        <a href="<?= BASEURL; ?>/img/gallery/<?= $glr['gambar']; ?>" data-lightbox="example-set" data-title="<?= $glr['nama']; ?>" class="example-image-link mode6">
                                            <img src="<?= BASEURL; ?>/img/gallery/<?= $glr['gambar']; ?>" class="example-image" alt="" width="365px" height="250px">
                                        </a>
                                        <a title="Hapus" href="<?= BASEURL; ?>/gallery/hapus/<?= $glr['id']; ?>" onclick="return confirm('Yakin?');">
                                            <p class="mode"><i class="fa fa-trash"></i></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>                                    
                                </div> <!-- /.row -->
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div>



            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Modal -->
    <div class="modal fade" id="modalTambah" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/gallery/tambah" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-4"><label for="email-input" class=" form-control-label">Judul</label>
                            </div>
                            <div class="col-12 col-md-8"><input type="text" id="email-input" name="nama"
                                    placeholder="Nama" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class=" form-control-label">Pilih Gambar</label></div>
                            <div class="col col-md-8">
                                <input type="file" name="gambar" />
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>