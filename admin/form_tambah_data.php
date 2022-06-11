<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tambah barang</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="container mt-5">
  <div class="judul-kategori text-center" style="background-color: #fff; padding: 5px 10px; border-radius: 5px;">
    <h3>tambah data</h3>
  </div>
  <p></p>
  <div class="judul-kategori text-center" style="background-color: #fff; padding: 100px 10px; border-radius: 5px;">
    <div class="panel-body">
                   <form action="simpan_barang.php" method="POST" enctype="multipart/form-data">
                                          
                                          <div class="form-group">
                                              </br>
                                              <br>
                                              <label class="col-sm-2 control-label">nama barang<span class="required"></span></label>
                                              <div class="col-sm-6"> 
                                              <input class="col-sm-2 form-control" name="nama_barang" required="" style="border-radius: 5px; margin-bottom: 15px;">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                            </br>
                                               <label class="col-sm-2 control-label">Harga<span class="required"></span></label> 
                                              <div class="col-sm-3">
                                                <input class="form-control" name="harga" required="">
                                              </div>  
                                          </div>
                                          <div class="form-group">
                                            </br>
                                               <label class="col-sm-2 control-label">stok<span class="required"></span></label> 
                                              <div class="col-sm-3">
                                                <input class="form-control" name="stok" required="">
                                              </div>  
                                          </div>
                                          <div class="form-group">
                                            </br>
                                             <label class="col-sm-2 control-label">Gambar<span class="required"></span></label>
                                              <div class="col-sm-4">
                                                <input type="file" name="file">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                                          <button type="reset" class="btn btn-default">Reset Button</button>
                                          </div>
                                      </form>
    </div>
  </div>

</div>
</body>
</html>