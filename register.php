<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>

	<form action="function.php" method="POST">
		<div class="login">
			<h2>Form Registrasi</h2>
			<div class="input-group">
				<input type="text" required="" name="username">
				<span>username</span>
			</div>
			<div class="input-group">
				<input type="password" required="" name="password">
				<span>password</span>
			</div>
			<div class="input-group">
				<input type="text" required="" name="email">
				<span>email</span>
			</div>
			<div class="input-group">
				<input type="text" required="" name="alamat">
				<span>alamat</span>
			</div>
			<div class="input-group">
				<input type="text" required="" name="notelpon">
				<span>No telpon</span>
			</div>
		
				<input type="hidden" required="" value="user" name="role">
				
			
			<div class="input-group">
				<input type="submit" value="submit" name="prosesreg">
				
			</div>
			
		</div>
	</form>

</body>
</html>



