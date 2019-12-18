<!DOCTYPE html>
<html>
<head>
	<title>Sua thong tin mon hoc</title>
</head>
<body>
<div class="suathanhvien">
	<?php include 'Views/home.php' ?>
	<h3>Sua thong tin monhoc</h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Ma mon hoc: <?php echo $dataID['mamh']?> </td>
			</tr>
			<tr>
				<td>Ten mon hoc:</td>
				<td><input type="text" name="tenmh" value="<?php echo $dataID['tenmh'] ;?>"></td>
			</tr>
			<tr>
				<td>So tin chi:</td>
				<td><input type="text" name="sotc" value="<?php echo $dataID['sotc'] ;?>"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="edit_subject" value="Chinh Sua"></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>