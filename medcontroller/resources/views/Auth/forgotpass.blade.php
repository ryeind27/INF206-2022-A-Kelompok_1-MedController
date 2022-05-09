@extends('.app')
<!-- Forgotpass Form -->
@section('content')
    <div class="container auth-container">
        <div class="row">
            <div class="col-md-4 login text-center">
                <h6 class="mb-3"><b>Lupa Password</b></h6>
                <form>

                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Alamat Email">
                    </div>
                    <div class="mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Masukkan Password Lama">
                    </div>
                    <div class="mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Masukkan Password Baru">
                    </div>
                    <div class="mb-3">
                        <input name="password_confirm" type="password" class="form-control" placeholder="konfirmasi Password">
                    </div>
                     <button class="btn btn-primary w-100 mb-4">CONFIRM</button>
                </form>
            </div>
        </div>
    </div>
@endsection
