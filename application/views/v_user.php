<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
</head>
<body>
<h1>INPUT DATA USER</h1>
<form action="http://localhost/mytravel/index.php/User/add" method="post">
		Username <br/>
		<input type="text" name="username" size="30"/>
		<br/>
		Password <br/>
		<input type="password" name="password" size="20"/>
		<br/>
		Fullname <br/>
		<input type="text" name="fullname" size="50"/>
		<br/>
		Level <br/>
		<select name="level">
		<option value="admin">Admin</option>
		<option value="User">User</option>
		</select>
		<br/><br/>
		<input type="submit" value="Simpan"/>
		<input type="reset" value="Reset"/>
</form>
<br/><br/>
<form action="http://localhost/mytravel/index.php/User/"><input type="submit" value="Kembali"></form>
</body>
</html>