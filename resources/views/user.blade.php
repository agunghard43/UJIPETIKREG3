<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" /> 
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/layets.css">
    <link rel="stylesheet" href="assets/css/sass.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="assets/css/cdntable.css".css"> 
    <link rel="stylesheet" href="assets/css/cdntablebs.css".css"> 
</head>
<body>
    @include('templates.nav')
    @include('templates.side')

    <div class="content-wrapper">
        <section class="dashboard-top-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="order-list">
                            <div class="order-ac-list">
                                <div class="panel-heading">
                                    <div class="panel-tittle">LIST DATA USER</div>
                                    <div class="panel-option">  
                                        <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="uil uil-user-plus"></i>
                                            Create User
                                        </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel">
                                                        <i class="uil uil-user-plus"></i>
                                                        Tambah Akun</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mt-2 mb-3 fs-6">
                                                            <label for="" class="col-sm-4">WITEL</label>
                                                            <div class="col-sm-8 fs-3">
                                                                <select class="form-select" name="" id="">
                                                                    <option value="" selected>BANDUNG</option>
                                                                    <option value="">KARAWANG</option>
                                                                    <option value="">TASIKMALAYA</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row mt-2 mb-3 fs-6">
                                                            <label for="" class="col-sm-4">Nama Lengkap</label>
                                                            <div class="col-sm-8 fs-6">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2 mb-3 fs-6">
                                                            <label for="" class="col-sm-4">Username</label>
                                                            <div class="col-sm-8 fs-6">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2 mb-3 fs-6">
                                                            <label for="" class="col-sm-4">Type Login</label>
                                                            <div class="col-sm-8 fs-6">
                                                                <select class="form-select" id="">
                                                                    <option value="1"selected>Local Password</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2 mb-3 fs-6">
                                                            <label for="" class="col-sm-4">Password</label>
                                                            <div class="col-sm-8 fs-6">
                                                                <input class="form-control" type="password">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2 mb-3 fs-6">
                                                            <label for="" class="col-sm-4">Akses</label>
                                                            <div class="col-sm-8 fs-6">
                                                                <select class="form-select" name="" id="">
                                                                    <option value="" selected>Guest</option>
                                                                    <option value="">Admin</option>
                                                                    <option value="">Petugas</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="button" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-hover table-bordered" style="width: 100%;font-size:12px;text-align: center;">
                                                <thead>
                                                    <tr>
                                                        <td>NO</td>
                                                        <td>WITEL</td>
                                                        <td>NAMA</td>
                                                        <td>USERNAME</td>
                                                        <td>TYPE AUTH</td>
                                                        <td>AKSES</td>
                                                        <td>STATUS</td>
                                                        <td>OPTION</td>
                                                    </tr>
                                                </thead>
            
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>BANDUNG</td>
                                                        <td>AGUNG</td>
                                                        <td>agung</td>
                                                        <td>Local Password</td>
                                                        <td>Admin</td>
                                                        <td>Active</td>
                                                        <td>
                                                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none;">
                                                                <i class="uil uil-pen"></i>
                                                                Update
                                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h4 class="modal-title" id="exampleModalLabel">
                                                                            <i class="uil uil-pen"></i>
                                                                            Update Akun</h4>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row mt-2 mb-3 fs-6">
                                                                                <label for="" class="col-sm-4">WITEL</label>
                                                                                <div class="col-sm-8 fs-3">
                                                                                    <select class="form-select" name="" id="">
                                                                                        <option value="" selected>BANDUNG</option>
                                                                                        <option value="">KARAWANG</option>
                                                                                        <option value="">TASIKMALAYA</option>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="row mt-2 mb-3 fs-6">
                                                                                <label for="" class="col-sm-4">Nama Lengkap</label>
                                                                                <div class="col-sm-8 fs-6">
                                                                                    <input class="form-control" type="text">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-2 mb-3 fs-6">
                                                                                <label for="" class="col-sm-4">Username</label>
                                                                                <div class="col-sm-8 fs-6">
                                                                                    <input class="form-control" type="text">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-2 mb-3 fs-6">
                                                                                <label for="" class="col-sm-4">Type Login</label>
                                                                                <div class="col-sm-8 fs-6">
                                                                                    <select class="form-select" id="">
                                                                                        <option value="1"selected>Local Password</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-2 mb-3 fs-6">
                                                                                <label for="" class="col-sm-4">Password</label>
                                                                                <div class="col-sm-8 fs-6">
                                                                                    <input class="form-control" type="password">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-2 mb-3 fs-6">
                                                                                <label for="" class="col-sm-4">Akses</label>
                                                                                <div class="col-sm-8 fs-6">
                                                                                    <select class="form-select" name="" id="">
                                                                                        <option value="" selected>Guest</option>
                                                                                        <option value="">Admin</option>
                                                                                        <option value="">Petugas</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                        <button type="button" class="btn btn-primary">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </div>
                                                            </a>
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/e360b5871d.js" crossorigin="anonymous"></script>
</body>
</html>