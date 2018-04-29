<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	TulisanTangan
</div>
<br>
<div class="kotak">
<br>
<form action="Login.php" method="post" onsubmit="return validasi()">
	<div style="text-align: center">
		Login To TulisanTangan
	</div>
	<br>
	<div>
		<label>Username:</label>
		<input type="text" name="username" id="username">
	</div>
	<div>
		<label>Password:</label>
		<input type="password" name="password" id="password">
	</div>
	<div>
		<input type="submit" value="Login" class="tombol">

	</div>
	<a class="tombol" href="signup.php">Daftar Baru</a>
</form>
</div>
<br><br>
<div class="footer">
	@Copyright Stendy N Taufiq
</div>
</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if(username!=""&& password!=""){return true}
		else{
			alert('Username dan Password harus di isi');
			return false;
		}
	}
</script>
</html>