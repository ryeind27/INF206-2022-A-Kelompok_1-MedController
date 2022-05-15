@extends('app')
<!-- Register Form -->
@section('content')
    <div class="container auth-container">
        <div class="row">
            <div class="col-md-4 login text-center">
                <h6 class="mb-3"><b>Buat akun baru</b></h6>
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
                <span>Sudah punya akun? <a href="{{url('/')}}">Klik Disini!</a></span>
            </div>
        </div>
    </div>
@endsection
