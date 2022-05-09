@extends('app')
<!-- Login Form -->
@section('content')
    <div class="container auth-container">
        <div class="row">
            <div class="col-md-4 login text-center">
                <img class="mb-4" src="./images/avatar.png">
                <form>
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Alamat Email">
                    </div>
                    <div class="mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-primary w-100 mb-4">MASUK</button>
                </form>
                <span>Belum punya akun? <a href="{{url('/signUp')}}">Daftar!</a></span>
                <div>
                    <span>Lupa Password? <a href="{{url('/forgotpass')}}">Klik disini!</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
