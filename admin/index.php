<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/icon.png">

    <title>DATA SISWA</title>

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
            <h1 class="h2" style="margin-top: 50px;">DATA BARANG</h1>
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
                               $no=0;
                               $tampil = mysqli_query($link, "SELECT * FROM barang order by id_barang desc");
                               ?>

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    

                                    <thead class="tabel1">
                                        <tr>
                                            <th>ID BARANG</th>
                                            <th>NAMA BARANG</th>
                                            <th>HARGA</th>
                                            <th>STOK</th>
                                            <th>FOTO</th>
                                            <th>EDIT</th>
                                            <th>HAPUS</th>
                                            
                                        </tr>
                                    </thead>
                                       <!-- lanjutan script disini -->
                                        <?php 
                                    while($data=mysqli_fetch_array($tampil)){
                                      $no++;
                                    ?>
                                    <tbody>


                                      <tr class="odd gradeX tabel1">
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $data['nama_barang'];?></td>
                                            <td>Rp. <?php echo number_format($data['harga']);?></td>
                                            <td><?php echo $data['stok'];?></td>
                                            <!-- script khusus Gambar -->
                                            <td><img src="<?php echo "../upload/image/".$data['foto']; ?>" class="responsive-img materialboxed" align='center' width='200' height='200'></td>
                                            <!-- fitur edit dan delete -->
                                            <td><a href="edit_barang.php?id=<?php echo $data['id_barang']; ?>"><button class="btn btn-success "><i class= "icon_cogs"></i>Edit</button></a></td>
                                            <td><a class="btn btn-danger" onclick="return confirm('Yakin Akan Hapus Data ?')" href="hapus_kelas.php?id_barang=<?php echo $data['id_barang']?>">Delete</a></td></td>
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