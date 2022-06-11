<?php 
include "connection.php";

//regis




if (isset($_POST['prosesreg'])) {

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$notelpon = $_POST['notelpon'];
$role = $_POST['role'];

	$insert = mysqli_query($link, "INSERT INTO 	tb_login (username,password,email,alamat,notelpon,role) values ('$username','$password','$email','$alamat','$notelpon','$role') ");
	if ($insert) {
		header('location:login.php');
	} else {
		echo '
		<script>alert("Gagal Memasukkan Data");
		window.location.href="register.php"
		</script>
		';
	}
}



//login 
if(isset($_POST['proseslog'])){
	

$cekuser = mysqli_query($link, "SELECT * FROM `tb_login` where `username` = '$_POST[username]'
	and `password` = '$_POST[password]'");
$hitung = mysqli_num_rows($cekuser);


if($hitung>0){

		$ambilrole = mysqli_fetch_array($cekuser);
		$role = $ambilrole ['role'];

			if($role =='user'){
				$_SESSION['log'] = 'Logged';
				$_SESSION['role'] = 'User';
				header('location:user');
				

			} else  {

				$_SESSION['log'] = 'Logged';
				$_SESSION['role'] = 'Admin';
				header('location:admin');		
			}


} else {
		echo "Data Tidak Ditemukan";
}

};


//function beli
if (isset($_POST['beli'])) {
	$qty = $_POST['qty'];
	$nama_barang = $_POST['nama_barang'];
	$cekharga = mysqli_query($link, "SELECT * FROM barang ");
	$hargarow = mysqli_fetch_array($cekharga);
	$harga = $hargarow ['harga'];

	$subtotal = $qty * $harga;

	$inptdb = mysqli_query($link, "INSERT INTO transaksi (subtotal,namabarang) values ('$subtotal','$nama_barang') ");

	header('location:user/notif.php');


		} 	

 ?>