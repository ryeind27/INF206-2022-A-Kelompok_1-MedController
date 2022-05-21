@extends('app')
<!-- Register Form -->
@section('content')
    <div class="container auth-container">
        <div class="row">
            <div class="col-md-4 login text-center">
                <h6 class="mb-3"><b>Buat akun baru</b></h6>
                <form action="/SignUp" method = "post">
                    @csrf
                    <div class="mb-3">
                        <input name="name" type="text" class="form-control @error('name')is-invalid @enderror"placeholder="Nama Lengkap" required value = "{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control @error('email')is-invalid @enderror" placeholder="Alamat Email" required value = "{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input name="password" type="password" class="form-control @error('password')is-invalid @enderror" placeholder="Masukkan Password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input name="password_confirm" type="password" class="form-control @error('password_confirm')is-invalid @enderror" placeholder="Ulangi Password" required>
                        @error('password_confirm')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                        <button class="btn btn-primary w-100 mb-4">DAFTAR</button>
                </form>
                <span>Sudah punya akun? <a href="{{url('/login')}}">Klik Disini!</a></span>
            </div>
        </div>
    </div>
@endsection
