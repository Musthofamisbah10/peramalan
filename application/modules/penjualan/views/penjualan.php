<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
       <!-- page header -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Blank Pageheader </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blank Pageheader</li>
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
                <div class="card">
                    <h5 class="card-header">Data Penjualan</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <form>
                                    <div class="form-group">
                                        <select class="form-control" id="input-select">
                                            <option>Pilih Data Penjualan</option>
                                            <option>Sandal Jepit</option>
                                            <option>Sdandal Suwalo</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3">
                                <button class="btn btn-primary btn-sm float-right mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Data</button>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>First</th>
                                    <th>Last</th>
                                    <th>Handle</th>
                                    <th colspan="2">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td width="2px">
                                        <a href="#" class="badge badge-pill badge-danger"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                    <td width="2px">
                                        <a href="#" class="badge badge-pill badge-warning"><i class="fas fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td width="2px">
                                        <a href="#" class="badge badge-pill badge-danger"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                    <td width="2px">
                                        <a href="#" class="badge badge-pill badge-warning"><i class="fas fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td width="2px">
                                        <a href="#" class="badge badge-pill badge-danger"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                    <td width="2px">
                                        <a href="#" class="badge badge-pill badge-warning"><i class="fas fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td width="2px">
                                        <a href="#" class="badge badge-pill badge-danger"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                    <td width="2px">
                                        <a href="#" class="badge badge-pill badge-warning"><i class="fas fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td width="2px">
                                        <a href="#" class="badge badge-pill badge-danger"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                    <td width="2px">
                                        <a href="#" class="badge badge-pill badge-warning"><i class="fas fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
        <!-- and content -->
    </div>

    <!-- Modal Penjualan -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <form id="form" data-parsley-validate="" novalidate="">
                        <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Stock</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputEmail2" type="email" required="" data-parsley-type="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Kategori</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputEmail2" type="email" required="" data-parsley-type="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Bulan</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputPassword2" type="password" required="" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Tahun</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputWebSite" type="url" required="" data-parsley-type="url" placeholder="URL" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Keluar</a>
                        <a href="#" class="btn btn-primary">Tambah Data</a>
                    </div>
                </form>
            </div>
        </div>
    </div>