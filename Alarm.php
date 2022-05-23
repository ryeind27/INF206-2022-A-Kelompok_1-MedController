<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <!-- Title Page--> 
    <title>Alarm</title> 
 
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
                        <div class="form-row m-b-55"> 
                            <div class="name">jam</div> 
                            <div class="value"> 
                                <div class="row row-refine"> 
                                    <div class="col-5"> 
                                            <div class="rs-select2 js-select-simple select--no-search"> 
                                                <select name="Penggunaan"> 
                                                    <option disabled="disabled" selected="selected">Jam</option> 
                                                    <option value="1">01</option> 
                                                    <option value="2">02</option> 
                                                    <option value="3">03</option> 
                                                    <option value="4">04</option> 
                                                    <option value="5">05</option> 
                                                    <option value="6">06</option> 
                                                    <option value="7">07</option> 
                                                    <option value="8">08</option> 
                                                    <option value="9">09</option> 
                                                    <option value="10">10</option> 
                                                    <option value="11">11</option> 
                                                    <option value="12">12</option> 
                                                    <option value="13">13</option> 
                                                    <option value="14">14</option> 
                                                    <option value="15">15</option> 
                                                    <option value="16">16</option> 
                                                    <option value="17">17</option> 
                                                    <option value="18">18</option> 
                                                    <option value="19">19</option> 
                                                    <option value="20">20</option> 
                                                    <option value="21">21</option> 
                                                    <option value="22">22</option> 
                                                    <option value="23">23</option> 
                                                    <option value="24">24</option> 
                                                </select> 
                                            <div class="select-dropdown"></div> 
                                        </div> 
                                    </div> 
                                    <div class="col-5"> 
                                        <div class="rs-select2 js-select-simple select--no-search"> 
                                            <select name="jam"> 
                                                <option disabled="disabled" selected="selected">menit</option> 
                                                <option value="1">00</option> 
                                                <option value="2">05</option> 
                                                <option value="3">10</option> 
                                                <option value="4">15</option> 
                                                <option value="5">20</option> 
                                                <option value="6">25</option> 
                                                <option value="7">30</option> 
                                                <option value="8">35</option> 
                                                <option value="9">40</option> 
                                                <option value="10">45</option> 
                                                <option value="11">50</option> 
                                                <option value="12">55</option> 
                                                <option value="13">60</option> 
                                            </select> 
                                        <div class="select-dropdown"></div> 
                                    </div> 
                                </div> 
                                <h1><h2> 
                                <div class="col-3"> 
                                        <div class="input-group-desc"> 
                                            <input class="input--style-5" type="text" name="Nama_obat"> 
                                        </div> 
                                    </div> 
                                    <h1></h1> 
                                    </div> 
                                        <div class="col-5"> 
                                            <div class="rs-select2 js-select-simple select--no-search"> 
                                                <select name="Sesudah/sebelum makan"> 
                                                    <option disabled="disabled" selected="selected">sesudah/sebelum</option> 
                                                    <option value="1">Sebelum makan</option> 
                                                    <option value="2">Sesudah makan</option> 
                                                </select> 
                                            <div class="select-dropdown"></div> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                                <div class="container"> 
                                    <h2></h2> 
                                        <input type="button" class="btn btn-info" value="+"> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                            <center><button class="btn btn--radius-2 btn--black" type="kirim">tetapkan</button></center> 
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