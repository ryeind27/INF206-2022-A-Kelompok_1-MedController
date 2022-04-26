<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Konsultasi</title>

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
                            <div class="name">Maasukkan jenis penyakit</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Penyakit">
                                            <option disabled="disabled" selected="selected">Pilih</option>
                                            <option value="1">Demam</option>
                                            <option value="2">Batuk</option>
                                            <option value="3">Flu</option>
                                            <option value="4">Sakit kepala</option>
                                            <option value="5">Diare</option>
                                            <option value="6">Lambung</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Sudah berapa lama mengidap penyakit ini?</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="lama_sakit">
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pilih rumah sakit</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Apotek">
                                            <option disabled="disabled" selected="selected">Pilih</option>
                                            <option value="1">RSU Zainal Abidin</option>
                                            <option value="2">RS Meuraxa</option>
                                            <option value="3">RS Harapan Bunda</option>
                                            <option value="4">RS Teuku Umar</option>
                                            <option value="5">RS Cut Nyak Dhien</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pilih dokter</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Pilih</option>
                                            <option value="1">dr Irwandi</option>
                                            <option value="2">dr Erlina</option>
                                            <option value="3">dr Samsudin</option>
                                            <option value="4">dr Siti</option>
                                            <option value="5">dr Fatimah</option>
                                            <option value="6">dr Nuh</option>
                                            <option value="7">dr Ali</option>
                                            <option value="8">dr Andika</option>
                                            <option value="9">dr Aisyah</option>
                                            <option value="10">dr Marwah</option>
                                            <option value="11">dr Lela</option>
                                            <option value="12">dr Jaka</option>
                                            <option value="13">dr Amii</option>
                                            <option value="14">dr Abu</option>
                                            <option value="15">dr Wisnu</option>
                                            <option value="16">dr Zaid</option>
                                            <option value="17">dr Tata</option>
                                            <option value="18">dr Fitri</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Masukin nama obat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama_obat">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Ceritakan kondisi anda saat ini</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="Kondisi">
                                       </div>
                                    </div>
                                </div>
                             </div>
                        <div>
                            <center><button class="btn btn--radius-2 btn--black" type="konfirmasi">konfirmasi</button></center>
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