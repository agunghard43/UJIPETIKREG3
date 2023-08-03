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
    <link rel="stylesheet" href="assets/css/validator1.css">
    <link rel="stylesheet" href="assets/css/layets.css">
    <link rel="stylesheet" href="assets/css/sass.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
  @include('templates.nav')
  @include('templates.side')

    <div class="content-wrapper">
        <section class="dashboard-top-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive top-chart-earn sticky-top">
                                        <table class="table-condensed">
                                            <tbody>
                                    <input type="hidden" name="order_id" id="order_id" value="">
                                    <tr>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">
                                        NOMER SC</th>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">:
                                      </th>
                                      <td colspan="2"> 123456   </td>
                                    </tr>
                                    <tr>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">INET
                                      </th>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">:
                                      </th>
                                      <td colspan="2">  1231234 </td>
                                    </tr>
                                    <tr>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">NAMA
                                      </th>
                                      <th style="vertical-align: middl;" width="1%" nowrap="">:
                                      </th>
                                      <td colspan="2"> AGUNG HARDIANTO   </td>
                                    </tr>
                                    <tr>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">
                                        NO HP</th>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">:
                                      </th>
                                      <td colspan="2">  +62895344617930  </td>
                                    </tr>
                                    <tr>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">
                                        ALAMAT</th>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">:
                                      </th>
                                      <td colspan="2">  JLN. TELEKOMUNIKASI NO.1 </td>
                                    </tr>
                                    <tr>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">AREA
                                      </th>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">:
                                      </th>
                                      <td colspan="2"> BANDUNG - BDG  </td>
                                    </tr>
                                    <tr>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">
                                        LOC_ID</th>
                                      <th style="vertical-align: middle;" width="1%" nowrap="">:
                                      </th>
                                      <td colspan="2"> ODP-BDG-BJS/123 </td>
                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                  
                            <div class="col-lg-8">
                                <div class="alert alert-success alert-dismissible">
                                    <strong>Catatan Petugas :</strong>
                                    <i>OK</i>
                                    <br> 4 jam yang lalu
                                </div>
                                <div class="table-responsive table-cs">
                                    <h6>Wajib di ceklist isi semua !</h6>
                      
                                    <table class="table table-condensed table-striped" style="color:#000000">
                                      <tbody>
                                        <!-- kolom 1 -->
                                        <div class="kolom 1">
                                          <tr>
                                            <th style="color:red;" width="1%" nowrap="">CHEKLIST ODP </th>
                                            <th width="1%" nowrap="">:</th>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">1. Konektor dan Adapter tipe SC-UPC</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:100px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_1" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_1" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="/assets/images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">2. Instalasi kabel, pastikan rapi (tidak ada bending)</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_2" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_2" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">3. ODP bersih dari sampah instalasi, debu, air dan
                                              serangga</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_3" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_3" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">4. ODP Memiliki label drop core</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_4" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_4" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">5. Tidak menggunakan pigtail kearah ke pelanggan</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_5" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_5" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">6. Tidak memasukkan splitter tambahan (ODP gendong)</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_6" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_6" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">7. Kabel drop yang masuk ODP memiliki panjang yang sama
                                              dan terikat rapi</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_7" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_7" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">8. Kunci dome (Penutup ODP)</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_8" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_8" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Kunci Dome.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">9. Pintu ODP Tertutup/Terkunci</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_9" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_9" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Kunci Dome.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">10. Splitter, pastikan terpasang dengan baik</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_10" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_10" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">11. Port idle, pastikan seluruhnya terpasang dust cap</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_11" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_11" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">12. Bebas dari kabel drop yang sudah tidak terpakai</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_12" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_12" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="vertical-align: middle !important;font-size:12px;" width="1%" nowrap="">13. Pengukuran di ODP (Gunakan OPM)</td>
                                            <td style="vertical-align: middle !important;" width="1%">:</td>
                                            <td style="vertical-align: middle;width:10px;">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_13" value="Y" required="">
                                                  <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                    OKE
                                                  </div>
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="odp_13" value="N">
                                                  <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                    NOK
                                                  </div>
                                                </label>
                                              </div>
                                            </td>
                                            <td style="vertical-align: middle !important;">
                                              <font size="1">ok</font>
                                            </td>
                                            <td style="vertical-align: middle;">
                                              <div class="pull-right">
                                                <img src="../images/Dokumentasi/Udara/Pengukuram di ODP.jpg" width="120px" height="90px" class="img-thumbnail">
                                              </div>
                                            </td>
                                          </tr>
                                        </div>
                      
                                        <!-- kolom 2 -->
                                      <div class="kolom 2">
                                        <tr>
                                          <th style="color:red;" width="1%" nowrap="">CHEKLIST SALURAN PENANGGAL
                                          </th>
                                          <th width="1%" nowrap="">:</th>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">1. Seluruh tambatan menggunakan s-clamp (tiang/odp)</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_1" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_1" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/menggunakan clamp hook.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">2. Di rumah pelanggan menggunakan clamp hook &amp;
                                            s-clamp</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_2" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_2" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/menggunakan clamp hook.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">3. Tidak terdapat sambungan</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_3" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_3" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/Tidak terdapat sambungan.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">4. Menggunakan OTP</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_4" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_4" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/Menggunakan OTP.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">5. Tidak ada penarikan dropcore di atas 50 m tanpa tiang
                                            (Penanaman tiang jika diperlukan)</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_5" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_5" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/Tidak terdapat sambungan.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">6. Penggunaan dropcore sesuai list of material</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_6" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_6" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">7. Penggunaan connector sesuai list of material</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_7" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_7" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/Konektor dan Adapter tipe SC-UPC.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">8. Instalasi dropcore menggunakan pipa (bila menggunakan
                                            SPBT)</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_8" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_8" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="./Validator_files/530610454photo_2023-06-08_11-56-40.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">9. Messenger di tiang penanggal tidak dipotong</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_9" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="saluran_9" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/Seluruh tambatan menggunakan s-clamp.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                      </div>
                                        
                                        <!-- kolom 3 -->
                                      <div class="kolom 3">
                                        <tr>
                                          <th style="color:red;" width="1%" nowrap="">CHEKLIST EVIDEN KABEL RUMAH
                                          </th>
                                          <th width="1%" nowrap="">:</th>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">1. Menggunakan kabel indoor dari OTP ke roset</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_1" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_1" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/Kabel indoor OTP ke roset.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">2. Roset terpasang dengan kuat dan kokoh dengan konektor
                                            menghadap ke bawah Minimal 40 cm dari lantai</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_2" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_2" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/Kabel indoor OTP ke roset.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">3. Rute kabel harus berada di sudut dinding (jangan
                                            menyilang bidang)</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_3" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_3" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/Kabel indoor OTP ke roset.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">4. Kabel harus melekat dengan kuat (menggunakan kabel
                                            tray, clip atau lem)</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_4" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_4" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/Kabel indoor OTP ke roset.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">5. Kabel melalui jalur yang sudah disiapkan di rumah</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_5" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_5" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/Udara/Kabel indoor OTP ke roset.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="vertical-align: middle !important;font-size:12px;" width="1%">6. Pengukuran Redaman Power ONT Rx Level mengunakan
                                            Ibooster</td>
                                          <td style="vertical-align: middle !important;" width="1%" nowrap="">:
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_6" value="Y" required="">
                                                <div class="badge" style="width:50px;background-color:#008000;color:white;font-weight:bold;">
                                                  OKE
                                                </div>
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="kabel_6" value="N">
                                                <div class="badge" style="width:50px;background-color:red;color:white;font-weight:bold;">
                                                  NOK
                                                </div>
                                              </label>
                                            </div>
                                          </td>
                                          <td style="vertical-align: middle !important;">
                                            <font size="1">ok</font>
                                          </td>
                                          <td style="vertical-align: middle;">
                                            <div class="pull-right">
                                              <img src="../images/Dokumentasi/SPBT/Pengukuran Redam power ONT Rx Level menggunakan Ibooster.jpg" width="120px" height="90px" class="img-thumbnail">
                                            </div>
                                          </td>
                                        </tr>
                                      </div>
                                      
                                      <div class="validator">
                                        <tr>
                                          <th style="color:red;" width="1%" nowrap="">VALIDATOR</th>
                                          <th width="1%">:</th>
                                          <td colspan="3">
                                            <input type="text" class="fc1 input-sm" value="Telkom University" disabled=""></td>
                                        </tr>
                                        <tr>
                                          <th style="color:red;" width="1%" nowrap="">CATATAN</th>
                                          <th width="1%">:</th>
                                          <td colspan="3">
                                            <div class="image-upload">
                                              <textarea name="catatan" placeholder="catatan..." style="width: 100%; font-size:12px;" class="fc-catatan  input-sm" required=""></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="color:red;" width="1%" nowrap=""></th>
                                          <th width="1%"></th>
                                          <td colspan="3">
                                            <a href="validator.html">
                                                <input class="btn-custom btn-primary" type="submit" name="add_progress" value="Update Progress">
                                            </a>
                                          </td>
                                        </tr>
                                      </div>
                                      </tbody>
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