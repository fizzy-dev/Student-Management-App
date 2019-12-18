<!DOCTYPE html>
<html>
<head>
	<title>Sua thong tin lop</title>
</head>
<body>
<div class="suathanhvien">
	<?php include 'Views/home.php' ?>
	<h3>Sua thong tin lop hoc</h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>MAGV: <?php echo $dataID['malop']?> </td>
			</tr>
			<tr>
				<td>Ma mon hoc:</td>
				<td>
					<select name="mamh" > 
                    <?php foreach($data1 as $value){ ?>
                        <option value="<?php echo $value['mamh'];?>"><?php echo $value['mamh'];?></option> 
                    <?php } ?>
                    </select>
                </td>
			</tr>
			<tr>
				<td>Ma giao vien:</td>
				<td>
					<select name="magv" > 
                    <?php foreach($data2 as $value){ ?>
                        <option value="<?php echo $value['magv'];?>"><?php echo $value['magv'];?></option> 
                    <?php } ?>
                    </select>
                </td>
			</tr>
			<tr>
				<td>Nam hoc:</td>
				<td><input type="text" name="namhoc" value="<?php echo $dataID['namhoc'] ;?>"></td>
			</tr>
			<tr>
				<td>Hoc ki:</td>
				<td><input type="text" name="hocki" value="<?php echo $dataID['hocki'] ;?>"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="edit_class" value="Chinh Sua"></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>