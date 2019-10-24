<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
       <!-- page header -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Kategori </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- and page haeader -->
        <!-- content -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <?= $this->session->flashdata('msg') ?>
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary btn-sm float-right mb-2" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i> Tambah Data</button>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($kategori as $row): ?>
                                    <tr>
                                        <th width="2px"><?= $no++ ?></th>
                                        <td><?= $row->nama_kategori ?></td>
                                        <td width="2px">
                                            <a href="<?= site_url('kategori/delete/'. $row->id_kategori) ?>" class="badge badge-pill badge-danger"><i class="fas fa-trash"></i> Delete</a>
                                        </td>
                                        <td width="2px">
                                            <a href="<?= site_url('kategori/update/'. $row->id_kategori) ?>" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#editModal<?=$row->id_kategori?>"><i class="fas fa-edit"></i> Edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
        <!-- and content -->
    </div>

    <!-- Add Modal Kategori -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <form id="form" action="<?= base_url('kategori/add') ?>" method="post">
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-3 col-lg-2 col-form-label text-right">Kategori</label>
                            <div class="col-9 col-lg-10">
                                <input id="nama_kategori" type="text" name="nama_kategori" required="" data-parsley-type="nama_kategori" placeholder="Masukan Kategori" class="form-control">
                            </div>
                            <?php echo form_error('name_kategori', '<div class="text-danger small ml-3">') ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Modal Kategori -->
    <?php foreach ($kategori as $row): ?>
    <div class="modal fade" id="editModal<?=$row->id_kategori?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ediat Kategori</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <form id="form" action="<?= base_url('kategori/update') ?>" method="post">
                        <input type="hidden" class="form-control" name="id_kategori" value="<?= $row->id_kategori ?>">
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-3 col-lg-2 col-form-label text-right">Kategori</label>
                            <div class="col-9 col-lg-10">
                                <input id="nama_kategori" type="text" name="nama_kategori" required="" data-parsley-type="nama_kategori" value="<?= $row->nama_kategori ?>" class="form-control">
                            </div>
                            <?php echo form_error('name_kategori', '<div class="text-danger small ml-3">') ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; ?>