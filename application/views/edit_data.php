<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>UPDATE DATA USER</h1>
		<?php foreach ($isi->result() as $key): ?>
		<form action="http://localhost/mytravel/index.php/User/edit/<?php echo $key->id ?>" method="post">
			Id<br/><input type="text" name="id" value="<?php echo $key->id ?>" readonly><br/>
			Username<br/><input type="text" name="username" value="<?php echo $key->username ?>"><br/>
			Password<br/><input type="password" name="password" value="<?php echo $key->password ?>"><br/>
			Fullname<br/><input type="text" name="fullname" value="<?php echo $key->fullname ?>"><br/>
			Level<br/>
			<select name="level">
			<option value="admin">Admin</option>
			<option value="User">User</option>
			</select><br/><br/>
			<input type="submit" value="save">
		</form>
	<?php endforeach ?>
</form>
</body>
</html>