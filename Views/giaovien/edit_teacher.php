<!DOCTYPE html>
<html>
<head>
	<title>Sua thong tin sinh vien</title>
</head>
<body>
<div class="suathanhvien">
	<?php include 'Views/home.php' ?>
	<h3>Sua thong tin giao vien</h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>MAGV: <?php echo $dataID['magv']?> </td>
			</tr>
			<tr>
				<td>Ho va ten:</td>
				<td><input type="text" name="tengv" value="<?php echo $dataID['tengv'] ;?>"></td>
			</tr>
			<tr>
				<td>Don vi:</td>
				<td><input type="text" name="donvi" value="<?php echo $dataID['donvi'] ;?>"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="edit_teacher" value="Chinh Sua"></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>