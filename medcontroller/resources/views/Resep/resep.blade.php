<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Resep</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Nama Pasien</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="nama_pasien">
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pilih Apotek</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Apotek">
                                            <option disabled="disabled" selected="selected">Pilih</option>
                                            <option value="1">Kimia Farma</option>
                                            <option value="2">Apotek Yaditama</option>
                                            <option value="3">Apotek Medika</option>
                                            <option value="4">Apotek Meraxa</option>
                                            <option value="5">Apotek Sehati</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Jenis Obat</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Pilih</option>
                                            <option value="1">Sirup</option>
                                            <option value="2">Tablet atau kapsul</option>
                                            <option value="3">Salep</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nama Obat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama_obat">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Penggunaan</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Penggunaan">
                                        </div>
                                    </div>
                                    <h1>X</h1>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Penggunaan">
                                        </div>
                                    </div>
                                        <div class="col-5">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="Penggunaan">
                                                    <option disabled="disabled" selected="selected">Pilih</option>
                                                    <option value="1">Sebelum makan</option>
                                                    <option value="2">Sesudah makan</option>
                                                </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Jangka waktu</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Jangka_waktu">
                                        </div>
                                    </div>
                                    <div class="name">hari</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Keterangan</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="Keterangan">
                                </div>
                            </div>
                        </div>
                        <div>
                            <center><button class="btn btn--radius-2 btn--black" type="kirim">kirim</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->