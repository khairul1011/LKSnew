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
			<h2>form login</h2>
			<div class="input-group">
				<input type="text" required="" name="username">
				<span>username</span>
			</div>
			<div class="input-group">
				<input type="password" required="" name="password">
				<span>password</span>
			</div>
			
			<div class="input-group">
				<input type="submit" value="login" name="proseslog">
				
			</div>
			
		</div>
	</form>

</body>
</html>



