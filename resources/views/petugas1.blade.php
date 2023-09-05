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
    <link rel="stylesheet" href="assets/css/petugas1.css">
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
                                                    <td colspan="2"> 123456 </td>
                                                </tr>
                                                <tr>
                                                    <th style="vertical-align: middle;" width="1%" nowrap="">
                                                        INET
                                                    </th>
                                                    <th style="vertical-align: middle;" width="1%" nowrap="">:
                                                    </th>
                                                    <td colspan="2"> 1231234 </td>
                                                </tr>
                                                <tr>
                                                    <th style="vertical-align: middle;" width="1%" nowrap="">
                                                        NAMA
                                                    </th>
                                                    <th style="vertical-align: middl;" width="1%" nowrap="">:
                                                    </th>
                                                    <td colspan="2"> AGUNG HARDIANTO </td>
                                                </tr>
                                                <tr>
                                                    <th style="vertical-align: middle;" width="1%" nowrap="">
                                                        NO HP</th>
                                                    <th style="vertical-align: middle;" width="1%" nowrap="">:
                                                    </th>
                                                    <td colspan="2"> +62895344617930 </td>
                                                </tr>
                                                <tr>
                                                    <th style="vertical-align: middle;" width="1%" nowrap="">
                                                        ALAMAT</th>
                                                    <th style="vertical-align: middle;" width="1%" nowrap="">:
                                                    </th>
                                                    <td colspan="2"> JLN. TELEKOMUNIKASI NO.1 </td>
                                                </tr>
                                                <tr>
                                                    <th style="vertical-align: middle;" width="1%" nowrap="">
                                                        AREA
                                                    </th>
                                                    <th style="vertical-align: middle;" width="1%" nowrap="">:
                                                    </th>
                                                    <td colspan="2"> BANDUNG - BDG </td>
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
                                    <div class="table-responsive table-cs">
                                        <table class="table table-condensed table-striped" style="color:#000000">

                                            <tbody>
                                                <div class="validator">
                                                    <tr>
                                                        <th width="1%" nowrap="">PETUGAS</th>
                                                        <th width="1%">:</th>
                                                        <td colspan="3">
                                                            <input type="text" class="fc1 input-sm"
                                                                value="Telkom University" disabled="">
                                                        </td>
                                                    </tr>
                                                </div>
                                                <!-- kolom 1 -->
                                                <div class="kolom 1">
                                                    <tr>
                                                        <th style="color:red;" width="1%" nowrap="">CHEKLIST
                                                            ODP </th>
                                                        <th width="1%" nowrap="">:</th>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">1. Konektor dan Adapter tipe
                                                            SC-UPC</td>
                                                        <td style="vertical-align: middle !important;">:</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">2. Instalasi kabel, pastikan
                                                            rapi (tidak ada bending)</td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">3. ODP bersih dari sampah
                                                            instalasi, debu, air dan
                                                            serangga</td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">4. ODP Memiliki label drop
                                                            core</td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">5. Tidak menggunakan pigtail
                                                            kearah ke pelanggan</td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">6. Tidak memasukkan splitter
                                                            tambahan (ODP gendong)</td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">7. Kabel drop yang masuk ODP
                                                            memiliki panjang yang sama
                                                            dan terikat rapi</td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">8. Kunci dome (Penutup ODP)
                                                        </td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">9. Pintu ODP
                                                            Tertutup/Terkunci</td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">10. Splitter, pastikan
                                                            terpasang dengan baik</td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">11. Port idle, pastikan
                                                            seluruhnya terpasang dust cap</td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">12. Bebas dari kabel drop
                                                            yang sudah tidak terpakai</td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%" nowrap="">13. Pengukuran di ODP
                                                            (Gunakan OPM)</td>
                                                        <td style="vertical-align: middle !important;" width="1%">
                                                            :</td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </div>

                                                <!-- kolom 2 -->
                                                <div class="kolom 2">
                                                    <tr>
                                                        <th style="color:red;" width="1%" nowrap="">CHEKLIST
                                                            SALURAN PENANGGAL
                                                        </th>
                                                        <th width="1%" nowrap="">:</th>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">1. Seluruh tambatan menggunakan s-clamp
                                                            (tiang/odp)</td>
                                                        <td style="vertical-align: middle !important;" width="1%"
                                                            nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">2. Di rumah pelanggan menggunakan clamp hook
                                                            &amp;
                                                            s-clamp</td>
                                                        <td style="vertical-align: middle !important;" width="1%"
                                                            nowrap="">:
                                                        </td>

                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">3. Tidak terdapat sambungan</td>
                                                        <td style="vertical-align: middle !important;" width="1%"
                                                            nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">4. Menggunakan OTP</td>
                                                        <td style="vertical-align: middle !important;" width="1%"
                                                            nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">5. Tidak ada penarikan dropcore di atas 50 m
                                                            tanpa tiang
                                                            (Penanaman tiang jika diperlukan)</td>
                                                        <td style="vertical-align: middle !important;" width="1%"
                                                            nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr
                                                                                                        class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">6. Penggunaan dropcore sesuai list of
                                                            material</td>
                                                        <td style="vertical-align: middle !important;"
                                                            width="1%" nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr
                                                                                                        class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">7. Penggunaan connector sesuai list of
                                                            material</td>
                                                        <td style="vertical-align: middle !important;"
                                                            width="1%" nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr
                                                                                                        class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">8. Instalasi dropcore menggunakan pipa
                                                            (bila menggunakan
                                                            SPBT)</td>
                                                        <td style="vertical-align: middle !important;"
                                                            width="1%" nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr
                                                                                                        class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">9. Messenger di tiang penanggal tidak
                                                            dipotong</td>
                                                        <td style="vertical-align: middle !important;"
                                                            width="1%" nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr
                                                                                                        class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </div>

                                                <!-- kolom 3 -->
                                                <div class="kolom 3">
                                                    <tr>
                                                        <th style="color:red;" width="1%" nowrap="">
                                                            CHEKLIST EVIDEN KABEL RUMAH
                                                        </th>
                                                        <th width="1%" nowrap="">:</th>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">1. Menggunakan kabel indoor dari OTP ke
                                                            roset</td>
                                                        <td style="vertical-align: middle !important;"
                                                            width="1%" nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr
                                                                                                        class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">2. Roset terpasang dengan kuat dan kokoh
                                                            dengan konektor
                                                            menghadap ke bawah Minimal 40 cm dari lantai</td>
                                                        <td style="vertical-align: middle !important;"
                                                            width="1%" nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr
                                                                                                        class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">3. Rute kabel harus berada di sudut dinding
                                                            (jangan
                                                            menyilang bidang)</td>
                                                        <td style="vertical-align: middle !important;"
                                                            width="1%" nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr
                                                                                                        class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">4. Kabel harus melekat dengan kuat
                                                            (menggunakan kabel
                                                            tray, clip atau lem)</td>
                                                        <td style="vertical-align: middle !important;"
                                                            width="1%" nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr
                                                                                                        class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">5. Kabel melalui jalur yang sudah disiapkan
                                                            di rumah</td>
                                                        <td style="vertical-align: middle !important;"
                                                            width="1%" nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr
                                                                                                        class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="vertical-align: middle !important;font-size:12px;"
                                                            width="1%">6. Pengukuran Redaman Power ONT Rx Level
                                                            mengunakan
                                                            Ibooster</td>
                                                        <td style="vertical-align: middle !important;"
                                                            width="1%" nowrap="">:
                                                        </td>
                                                        <td style="vertical-align: middle !important;">
                                                            <div class="form-floating d-flex">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Catatan</label>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-success ms-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-plus-circle"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">UPLOAD</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form action="">
                                                                                            <div class="form-group">
                                                                                                <label for=""
                                                                                                    class="col-md-2 control-label">Berkas</label>
                                                                                                <div
                                                                                                    class="col-md-10 ms-3">
                                                                                                    <input
                                                                                                        type="file"
                                                                                                        area-required="true">
                                                                                                    <p
                                                                                                        class="help-block">
                                                                                                        <em>
                                                                                                            File
                                                                                                            extension
                                                                                                            jpg. jpeg or
                                                                                                            png
                                                                                                        </em>
                                                                                                    </p>
                                                                                                    <hr
                                                                                                        class="inner">
                                                                                                    <div
                                                                                                        class="form-group d-flex justify-content-lg-center">
                                                                                                        <button
                                                                                                            class="btn btn-primary"
                                                                                                            type="submit">
                                                                                                            <i
                                                                                                                class="fa fa-check-circle"></i>
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </div>

                                                <tr>
                                                    <th style="color:red;" width="1%" nowrap=""></th>
                                                    <th width="1%"></th>
                                                    <td colspan="3">
                                                        <input class="btn-custom btn-primary" type="submit"
                                                            name="add_progress" value="Update Progress">
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
        </section>
    </div>

    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/e360b5871d.js" crossorigin="anonymous"></script>
</body>

</html>
