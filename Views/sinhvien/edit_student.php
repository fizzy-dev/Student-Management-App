<!DOCTYPE html>
<html>
<head>
	<title>Sua thong tin sinh vien</title>
</head>
<body>
<div class="suathanhvien">
	<?php include 'Views/home.php' ?>
	<h3>Sua thong tin sinh vien</h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Mssv: <?php echo $dataID['masv'] ; ?> </td>
			</tr>
			<tr>
				<td>Ho va ten:</td>
				<td><input type="text" name="hoten" value="<?php echo $dataID['tensv'] ;?>"></td>
			</tr>
			<tr>
				<td>Que quan:</td>
				<td><input type="text" name="quequan" value="<?php echo $dataID['quequan'] ;?>"></td>
			</tr>
			<tr>
				<td>Nam sinh:</td>
				<td><input type="text" name="namsinh" value="<?php echo $dataID['ngaysinh'] ;?>"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="edit_student" value="Chinh Sua"></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>