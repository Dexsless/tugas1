<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Biodata</title>
<style>
  body {
    background-color: #222;
    color: #ddd;
    font-family: Arial, sans-serif;
    background-image: url('https://source.unsplash.com/random/1920x1080/?nature,landscape');
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .navbar {
    background-color: #000;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    position: relative;
  }

  .navbar:before {
    content: "";
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    z-index: -1;
    background-image: radial-gradient(circle at 50% 0, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 75%);
  }

  .navbar a {
    color: #ddd;
    padding: 14px 16px;
    text-decoration: none;
  }

  .navbar a:hover {
    background-color: #444;
  }

  .card {
    background-color: #333;
    border: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    margin-top: 20px;
    padding: 20px;
    border-radius: 10px;
    position: relative;
  }

  .card:before {
    content: "";
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    z-index: -1;
    background-image: radial-gradient(circle at 50% 0, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 75%);
  }

  .card-header {
    background-color: #444;
    border-radius: 10px 10px 0 0;
    padding: 10px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-control {
    background-color: #444;
    border: none;
    border-radius: 0;
    color: #ddd;
    padding: 6px 12px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  }

  .form-control:focus {
    box-shadow: 0 2px 4px rgba(0, 123, 255, 0.5);
  }

  .btn {
    background-color: #4CAF50;
    border: none;
    border-radius: 0;
    color: #fff;
    padding: 6px 12px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  }

  .btn:hover {
    background-color: #45a049;
  }
</style>
  </head>
  <body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn my-2 my-sm-0" type="submit" style="background-color: #222;">Search</button>
    </form>
  </div>
</nav>
<!-- /Navbar -->

<!-- Card -->
<div class="card mt-3 ml-5 mr-5">
  <div class="card-header">
    Pendaftaran
  </div>
  <div class="card-body">
    <!-- Form -->
<form>
  <div class="form-group">
    <label for="exampleInputNama">Nama Depan</label>
    <input  class="mr-5" type="text" id="exampleInputNama" style="background-color: #444; color:antiquewhite;">  
    <label for="exampleInputNama">Nama Belakang</label>
    <input type="text" id="exampleInputNama" style="background-color: #444; color:antiquewhite;">  
  </div>
  <div class="form-group">
    <label for="exampleInputTanggal">Tanggal Lahir</label>
    <input class="mr-5" type="date" id="exampleInputTanggal" style="background-color: #444; color:antiquewhite;">
    <label for="exampleInputTempat">Tempat Lahir</label>
    <input type="text" id="exampleInputTempat" style="background-color: #444; color:antiquewhite;"> 
  </div>
  <div class="form-group">
    <label class="mr-2" for="exampleInputJenis">Jenis Kelamin</label>
    <input class="mr-2" type="radio" id="exampleInputJenis"> Laki Laki
    <input type="radio" id="exampleInputJenis"> Perempuan
  </div>
  <div class="form-group">
    <label for="exampleInputAgama">Agama</label>
    <select name="Agama" style="background-color: #444; color:antiquewhite;">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputAlamat">Alamat</label>
    <textarea name="Alamat" id="exampleInputAlamat" cols="10" rows="1" style="background-color: #444; color:antiquewhite;"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputAsal">Asal Sekolah</label>
    <input  class="mr-5" type="text" id="exampleInputAsal" style="background-color: #444; color:antiquewhite;">  
  </div>
  <div class="form-group">
    <label for="exampleInputJurusan">Jurusan</label>
    <select name="Jurusan" style="background-color: #444; color:antiquewhite;">
            <option value="RPL">RPL</option>
            <option value="TKRO">TKRO</option>
            <option value="TBSM">TBSM</option>
    </select>
  </div>
  <button type="submit" class="btn" style="background-color: #222;">Submit</button>
</form>
    <!-- Form -->
  </div>
</div>
<!-- /Card -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>