<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Notifikasi Pasien</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/style.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w960">
                <div class="judul">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Periksa resep obat Anda<br /><br />
                                <div>
                                    <button class="btn btn--radius btn--black" type="submit">
                                        <a href = "resepPasien.blade.php?"  style="color:white">Detail</a>
                                    </button>
                                    <button class="btn btn--radius btn--black" type="submit">
                                        <a href = "" onclick="return confirm('Apakah ingin menghapus?')" style="color:white">Delete</a>
                                    </button>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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