<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>DATA USER</h1>
<table border="1">
<tr>
	<th>No.</th>
	<th>Id</th>
	<th>Username</th>
	<th>Password</th>
	<th>Fullname</th>
	<th>Level</th>
	<th>Action</th>
</tr>
	<?php $nomor=1; ?>
	<?php foreach ($data as $key) { ?>
	<tr>
	<td><?php echo $nomor++; ?></td>
	<td><?php echo $key['id']; ?></td>
	<td><?php echo $key['username']; ?></td>
	<td><?php echo $key['password']; ?></td>
	<td><?php echo $key['fullname']; ?></td>
	<td><?php echo $key['level']; ?></td>
	<td>
	<a href="<?php echo "http://localhost/mytravel/index.php/User/update/".$key['id']; ?>"> <button type="button" class="btn btn-danger">Edit</button></a> || 
	<a href="<?php echo "http://localhost/mytravel/index.php/User/delete_data/" .$key['id']; ?>"><button type="button" class="btn btn-info">Delete</button></a></td>
</tr>
<?php } ?>
</table>
<br/>
<form action="http://localhost/mytravel/index.php/User/add_data"><input type="submit" value="Tambah Data"></form>
</body>
</html>