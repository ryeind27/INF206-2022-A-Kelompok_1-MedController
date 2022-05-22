@extends('app')
<!-- Login Form -->
@section('content')
    <div class="container auth-container">
        <div class="row">
            <div class="col-md-4 login text-center">
                <img class="mb-4" src="./images/Medcontroller.png">
                <form action="/Login" method="post">
                    @csrf
                    <div class="mb-3">

                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif

                        @if(session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session('loginError')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif

                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Alamat Email" autofocus required value="{{old('email')}}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button class="btn btn-primary w-100 mb-4">MASUK</button>
                </form>
                <span>Belum punya akun? <a href="{{url('/SignUp')}}">Daftar!</a></span>
            </div>
        </div>
    </div>
@endsection
