<!DOCTYPE html>
<html lang="en">
<head>
  <title>MedController Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/styles/style.css">
</head>
<body>
    @extends('navbar')
    @section('konten')
    <div class = "space">
    <div class = "profile">
        <img src="./Images/avatar.png" alt="Logo" style="width:200px;" class="rounded-circle" href="#">
        <div>
        <a><b>NameUser</b></a>
    <div class="row detailTable">
      <div class="col-md-3">
          <details>
              <table class="table table-borderless">
                  <tbody>
                      <tr>
                          <td>
                              <h6 class=""><b>Nama</b></h6>
                          </td>
                          <td>
                              {{-- <h6 class="">{{ auth()->user()->name }}</h6> --}}
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <h6 class=""><b>Email</b></h6>
                          </td>
                          <td>
                              {{-- {{ auth()->user()->phone }} --}}
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <h6 class=""><b>Alamat</b></h6>
                          </td>
                          <td>
                              {{-- {{ auth()->user()->kota_asal }} --}}
                          </td>
                      </tr>
                      <tr>
                        <td>
                            <h6 class=""><b>No.Hp<b></h6>
                        </td>
                        <td>
                              {{-- data --}}
                        </td>
                      </tr>
                  </tbody>
              </table>
          </details>
        </div>
    </div>
    </div>
  <br><br>
  <div class="d-grid gap-2 col-3 mx-auto">
  <a class="btn btn-outline-dark btn-light" href="#">Biodata</a>
  <a class="btn btn-outline-dark btn-light" href="#">Ubah Password</a>
  <a class="btn btn-outline-dark btn-light" href="#">Log out</a>
</div>
    </div>
</div>
    
@endsection
</body>