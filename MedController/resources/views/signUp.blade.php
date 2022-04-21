<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="styles/index.css">

    <title>MedController/SignUp</title>
  </head>
  <body>
    <!-- Register Form -->
    <div class="container auth-container">
        <div class="row">
            <div class="col-md-4 login text-center">
                <img src="./images/brand-dark.png">
                <h6 class="my-3"><b>Buat akun baru</b></h6>
                <form>
                    <div class="mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Alamat Email">
                    </div>
                    <div class="mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Masukkan Password">
                    </div>
                    <div class="mb-3">
                        <input name="password_confirm" type="password" class="form-control" placeholder="Ulangi Password">
                    </div>
                    <button class="btn btn-primary w-100 mb-4">DAFTAR</button>
                </form>
                <span>Sudah punya akun? <a href="#">Masuk!</a></span>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
