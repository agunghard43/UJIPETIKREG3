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
    <link rel="stylesheet" href="assets/css/style.css">
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
                                    <div class="panel-tittle">
                                        <b>Data Pelanggan</b>
                                    </div>
                                </div>

                                <form action="" method="">
                                    <div class="form-group">
                                        <label for="" style="">Periode :</label>
                                        <div class="bulan">
                                            <select class="form-cs" type="text" name="bulan" id="">
                                          <option value="01">Januari</option>
                                          <option value="02">Februari</option>
                                          <option value="03">Maret</option>
                                          <option value="04">April</option>
                                          <option value="05">Mei</option>
                                          <option value="06">Juni</option>
                                          <option value="07" selected>Juli</option>
                                          <option value="08">Agustus</option>
                                          <option value="09">September</option>
                                          <option value="10">Oktober</option>
                                          <option value="11">November</option>
                                          <option value="12">Desember</option>
                                        </select>
                                        </div>
                      
                                        <div class="tahun">
                                            <select class="form-cs" type="text" name="tahun" id="">
                                                <option value="01" selected>2023</option>
                                                <option value="02">2023</option>
                                                <option value="03">2023</option>
                                            </select>
                                        </div>
                      
                                        <div class="tombol">
                                            <button type="submit" name="filter" class="button">
                                                <i class="uil uil-setting"></i>
                                                Filter
                                            </button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="uil uil-plus"></i>
                                            Data Pelanggan
                                        </button>
                                      
                                          <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <i class="uil uil-plus-circle"></i>
                                                        Data Pelanggan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">AREA</label>
                                                                <select class="form-select form-select-sm" name="" id="">
                                                                    <option value="" selected>BANDUNG</option>
                                                                    <option value="BDG">BANDUNG</option>
                                                                    <option value="BDG">BANDUNG BARAT</option>
                                                                    <option value="CRB">CIREBON</option>
                                                                    <option value="KRW">KARAWANG</option>
                                                                    <option value="SKB">SUKABUMI</option>
                                                                    <option value="TSM">TASIMALAYA</option>
                                                                </select>
                                                            </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">CODE AREA</label>
                                                            <fieldset disabled="disabled">
                                                                <select class="form-select form-select-sm" name="" id="">
                                                                    <option value="" selected>BDG</option>
                                                                    <option value="BDG">BDG</option>                    
                                                                    <option value="CRB">CRB</option>
                                                                    <option value="KRW">KRW</option>
                                                                    <option value="SKB">SKB</option>
                                                                    <option value="TSM">TSM</option>
                                                                  </select>
                                                              </fieldset>
                                                          </div>
                                                          <div class="mb-3">
                                                              <label for="" class="form-label">Pelanggan</label>
                                                              <input type="text" class="form-control">
                                                          </div>
                                                          <div class="mb-3">
                                                              <label for="exampleInputPassword1" class="form-label">Kontak</label>
                                                              <input type="number" class="form-control">
                                                            </div>
                                                          <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Location</label>
                                                            <input type="text" class="form-control">
                                                          </div>
                                                          <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">ODP_LOC</label>
                                                            <input type="text" class="form-control">
                                                          </div>
                                                        </form>
                                                  </div>
                                                  <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                  </div>
                                              </div>
                                              </div>
                                            </div>
                                      </div>
                                    </div>
                                </form>
                                <div class="data-table-section table-responsive">
                                    <table id="example" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <td>NO</td> 
                                                <td>AREA</td> 
                                                <td>ORDER_ID</td> 
                                                <td>NAMA PELANGGAN</td> 
                                                <td>LOC_ID</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    BANDUNG <br> 
                                                <span class="label">BDG</span>
                                                </td>
                                                <td>SC.123487
                                                    <small>(/12345)</small><br>
                                                    <span class="label-sales">NEW SALES</span>
                                                    <span class="label-tanggal">13-JUL-2023</span>
                                                </td>
                                                <td>AGUNG (+62-123456) <br> JALAN TELEKOMUNIKASI NO.1</td>
                                                <td>ODP-BDG-TST/123</td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    BANDUNG <br> 
                                                <span class="label">BDG</span>
                                                </td>
                                                <td>SC.123487
                                                    <small>(/12345)</small><br>
                                                    <span class="label-sales">NEW SALES</span>
                                                    <span class="label-tanggal">13-JUL-2023</span>
                                                </td>
                                                <td>AGUNG (+62-123456) <br> JALAN TELEKOMUNIKASI NO.1</td>
                                                <td>ODP-BDG-TST/123</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    BANDUNG <br> 
                                                <span class="label">BDG</span>
                                                </td>
                                                <td>SC.123487
                                                    <small>(/12345)</small><br>
                                                    <span class="label-sales">NEW SALES</span>
                                                    <span class="label-tanggal">13-JUL-2023</span>
                                                </td>
                                                <td>JAMAL (+62-123456) <br> JALAN TELEKOMUNIKASI NO.1</td>
                                                <td>ODP-BDG-TST/123</td>
                                            </tr>
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
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