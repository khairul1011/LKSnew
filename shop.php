<?php 
include "connection.php";
if (isset($_GET['barang'])) {
$barang = $_GET['barang'];
	
}

$ambildatabarang=mysqli_query($link, "SELECT * FROM barang where id_barang = '$barang'");
$datarow = mysqli_fetch_array($ambildatabarang);


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
	.container{
		display: flex;
		width: 100%;
		height: 70vh;
		margin-top: 120px;
		background-color: orange;
		/*justify-content: center;*/
		/*align-content: center;*/
	}
	/*.foto{
		
		width: 50px;
		height: 50px;
	}
	.datail{
		display: flex;
		position: absolute;
		width: 500px;
		height: 500px;
		justify-content: center;
		margin-left: 700px;*/

	}
</style>
</head>
<body>

		<div class="container">
			
		
		<div class="foto">
			<img src="<?php echo "upload/image/".$datarow['foto']; ?>" style="height: 400px;">
		</div>
	
		<div class="detail">
			<form action="function.php" method="POST">
				<h1>nama produk : <?php echo $datarow['nama_barang'] ?></h1>

				<p>stock : <?php echo $datarow['stok'] ?></p>
				<p>harga : <?php echo $datarow['harga'] ?></p>
				<label>jumlah : </label>
				<input type="text" name="qty">
				<input type="hidden" name="nama_barang" value="<?php echo $datarow['nama_barang'] ?>">
				<br>

				<button type="submit" name="beli">Beli</button>
			</form>
				
			</div>
</div>



	<!-- <table border="1">
		<tr>
			<td>
				foto
			</td>
			<td>
				detail
			</td>
			<td>
				konfir
			</td>
		</tr>
		<tr>
			<td>
				<img src="haha.png" style="height: 200px;">
			</td>
			<td>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et</p>
			</td>
			<td>
				<input type="checkbox" name="">
			</td>
		</tr>
		
	</table> -->
</body>
</html>
