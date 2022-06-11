<!DOCTYPE html>
<html lang="en">
<head>    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Frdi-STORE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="bintang/css/all.min.css">
</head>
<body>
  <!-- awal navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
<a class="navbar-brand" href="#">
      <img src="kodai.png" alt="" width="50" height="50" class="me-2">
       Balanjo<strong>Kodai</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <form class="d-flex ms-auto">
      <input class="form-control me-2" type="search" placeholder="Cari Barang Anda" aria-label="Search">
      <button type="button" class="btn btn-light">Cari</button>

    </form>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Keranjang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notifikasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bantuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Masuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- akhir navbar -->



<!-- awal corsel -->
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="sepatu.webp" class="d-block img-fluid" alt="" style="width: 1300px; height: 400px; margin-top: 30px;">
        </div>
        <div class="carousel-item">
          <img src="jam.webp" class="d-block img-fluid" alt="" style="width: 1300px; height: 400px; margin-top: 30px;">
        </div>
        <div class="carousel-item">
          <img src="hah.png" class="d-block img-fluid" alt="" style="width: 1300px; height: 400px; margin-top: 30px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
<!-- akhir corsel -->


<!-- awal kategori -->
<div class="container mt-5">
  <div class="judul-kategori text-center" style="background-color: #fff; padding: 5px 10px;">
    <h5>kategori</h5>
  </div>
  <div class="row text-center row-container mt-2">
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/baju.png" class="img-kategori mt-4"></a>
        <p class="mt-2">baju</p>
      </div>
    </div>

     <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/celana.png" class="img-kategori mt-4"></a>
        <p class="mt-2">celana</p>
      </div>
    </div>

     <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/elektronik.png" class="img-kategori mt-4"></a>
        <p class="mt-2">elektronik</p>
      </div>
    </div>

     <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/kamera.png" class="img-kategori mt-4"></a>
        <p class="mt-2">kamera</p>
      </div>
    </div>

     <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/kecantikan.png" class="img-kategori mt-4"></a>
        <p class="mt-2">kecantikan</p>
      </div>
    </div>

     <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/kesehatan.png" class="img-kategori mt-4"></a>
        <p class="mt-2">kesehatan</p>
      </div>
    </div>

     <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/komputer dan aksesoris.png" class="img-kategori mt-4"></a>
        <p class="mt-2">komputer dan aksesoris</p>
      </div>
    </div>

     <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/otomitif.png" class="img-kategori mt-4"></a>
        <p class="mt-2">otomotif</p>
      </div>
    </div>

     <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/sepatu.png" class="img-kategori mt-4"></a>
        <p class="mt-2">sepatu</p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/smartphone.png" class="img-kategori mt-4"></a>
        <p class="mt-2">smartphone</p>
      </div>
    </div>

     <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/tas.png" class="img-kategori mt-4"></a>
        <p class="mt-2">tas</p>
      </div>
    </div>

     <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href=""><img src="aset/jam tangan.png" class="img-kategori mt-4"></a>
        <p class="mt-2">jam tangan</p>
      </div>
    </div>

  </div>
</div>
<!-- akhir kategori -->

<!-- awal produk -->
<div class="container mt-2">
   <div class="judul-kategori text-center mt-2" style="background-color: #fff; padding: 5px 10px;">
    <h5>PRODUK</h5>
  </div>

  <div class="row">
      <?php 
   include "connection.php";
   
   $tampil = mysqli_query($link, "SELECT * FROM barang order by id_barang desc");
   ?>
   <?php 
    while($data=mysqli_fetch_array($tampil)){
      
    ?>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
      <div class="card">
        <img src="<?php echo "upload/image/".$data['foto']; ?>" class="card-img-top" style="height: 200px;" alt="...">
        <div class="card-body">
          <h6 class="card-title text-center "><?php echo $data['nama_barang'];?></h6>
            <div class="icon-bintang text-center" style="color: orange;">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p class="card-text mt-2 text-center">Rp. <?php echo number_format($data['harga']);?></p>
            <p class="card-text mt-2 text-center">Stock <?php echo ($data['stok']);?></p>
          <a href="login.php" class="btn btn-dark d-grid">BELI</a>
        </div>
      </div>  
    </div>
    <?php
    } 
     ?>
   
  </div>
</div>
<!-- akhir produk -->

<!-- awal footer -->

<footer class="bg-light p-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col">
        <a>
          <img src="kodai.png " width="80" height="80">
          #desain by ferdi pratama setia
        </a>
      </div>
    </div>
  </div>
</footer>

<!-- akhir footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




</body>
</html>