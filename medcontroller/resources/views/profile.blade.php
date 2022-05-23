@extends('navbar')
@section('konten')
<div class="space">
    <div class="profile">
        <img src="./Images/avatar.png" alt="Logo" style="width:200px;" class="rounded-circle" href="#">
        <div>
            <a><b>{{auth()->users()->name}}</b></a>
        </div>
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-primary">Biodata</button>
            <button type="button" class="btn btn-outline-primary">Log Out</button>
        </div>
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
                                    <h6 class="">{{ auth()->users()->name }}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class=""><b>Email</b></h6>
                                </td>
                                <td>
                                    {{ auth()->users()->email}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class=""><b>Alamat</b></h6>
                                </td>
                                <td>
                                    {{ auth()->user()->kota_asal }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class=""><b>No.Hp<b></h6>
                                </td>
                                <td>
                                    {{ auth()->user()->no_hp }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </details>
            </div>
        </div>
    </div>

</div>

@endsection
