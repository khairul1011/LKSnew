<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/icon.png">

    <title>NOTIFIKASI</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Dashboard admin</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2" style="margin-top: 50px;">TRANSAKSI</h1>
          </div>
                           <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                 <div class="text-left">
                                        <a href="form_tambah_data.php" class="btn btn-primary">Tambah Data Barang <i class="fa fa-arrow-circle-right"></i></a>
                                        <br>
                                        <br>
                                    </div>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data siswa
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive ">
<!-- Tambahkan dibawah ini script tampil data BARANG -->
                               <?php 
                               include "../connection.php";
                               include "../function.php";
                              
                               $tampil = mysqli_query($link, "SELECT * FROM transaksi INNER JOIN barang ON transaksi.namabarang = barang.nama_barang order by id_tran");
                               ?>

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    

                                    <thead class="tabel1">
                                        <tr>
                                            <th>NAMA BARANG</th>
                                            <th>HARGA</th>
                                            <th>FOTO</th>
                                            <th>SUB-TOTAL</th>
                                            
                                        </tr>
                                    </thead>
                                       <!-- lanjutan script disini -->
                                        <?php 
                                    while($data=mysqli_fetch_array($tampil)){
                                      
                                    ?>
                                    <tbody>


                                      <tr class="odd gradeX tabel1">
                                            <td><?php echo $data['namabarang'];?></td>
                                            <td>Rp. <?php echo number_format($data['harga']);?></td>
                                            <!-- script khusus Gambar -->
                                            <td><img src="<?php echo "../upload/image/".$data['foto']; ?>" class="responsive-img materialboxed" align='center' width='200' height='200'></td>
                                            <td>Rp. <?php echo number_format($data['subtotal']);?></td>
                                        </tr>
                                    </tbody>

                                    <?php
                                }
                                    ?>
                                </table>
                            </table>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
              </div>
            </section>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

    Icons
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
   
  </body>
</html>