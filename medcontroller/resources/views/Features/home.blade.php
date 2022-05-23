@extends('.navbar')
@section('konten')

<nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #344C2D;">
  <div class="container fluid">
  <!-- Brand -->
  <span class="navbar-brand mb-0 h1"><img src="./Images/MedController.png" alt="Logo" style="width:20%;" href="#"> </span>
  <!-- Links -->
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <a class="nav-link" href="{{url('home')}}"><b>Home</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" a href="{{url('resep')}}"><b>Resep</b></a>
  </li>
  <li class="nav-item">
      <a class="nav-link" a href="{{url('setJadwal')}}"><b>Jadwal</b></a>
    </li>
  <li class="nav-item">
      <a class="nav-link" a href="{{url('chat')}}"><b>Chat</b></a>
  </li>
<a href="{{url('/profile')}}"><img src="./Images/avatar.png" alt="Logo" style="width:60px;" class="btn" href="profile"/>
</a>
</ul>
  </div>
</nav>
<br><br><br>
      <h5><label for="exampleFormControlTextarea1" class="form-label" >Pengingat</label></h5>
      <div class="form mb-3 mt-3">
        <div class="p-2 text-dark bg-opacity-25" style="background-color: #79F1A4;">
          <form action=/notifikasi method=post>
              <p><label for="w3review">Input teks:</label></p>
              <textarea id="w3review" name="w3review" rows="10" cols="100"></textarea>
                <br>
              <input type="submit" value="Submit">
          </form>
      <div class="d-grid gap-2">
      <button class="btn btn-secondary float-end" data-bs-toggle="collapse" data-bs-target="#demo">+</button>
      <div id="demo" class="collapse">
        <div class="p-2 text-dark bg-opacity-25" style="background-color: #79F1A4;">
        <button type="button" class="btn-close" data-bs-dismiss="form" aria-label="Close"></button>
        <form action=/notifikasi method=post>
          <p><label for="w3review">Input teks:</label></p>
          <textarea id="w3review" name="w3review" rows="10" cols="100"></textarea>
         <br>
         <input type="submit" value="Submit">
        </form>
      </div>
          </div>
        </div>
      </div>
    </div>
@endsection
