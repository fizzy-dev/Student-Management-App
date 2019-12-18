<!DOCTYPE html>
<html>
<head>
	<title>Them sinh vien -Quan li sinh vien</title>
</head>
<body>
    <?php include 'Views/home.php' ?>
    <div class="dangkythanhvien">
	<h3>Them moi sinh vien lop hoc <?php echo $malop ?></h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Chon sinh vien:</td>
				<td>
					<select name="masv" > 
                    <?php foreach($data as $value){ ?>
                        <option value="<?php echo $value['masv'];?>"><?php echo $value['masv'];?></option> 
                    <?php } ?>
                    </select>
                </td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="add_student" value="Them hoc sinh"></td>
			</tr>
		</table>
	</form>
	<?php
	if(isset($thanhcong) && in_array('add_success', $thanhcong))
	{ 
		echo "<p style ='color:green; text-align:center'> Them thanh cong! </p>";
     }
    else if(isset($thanhcong) && in_array('add_fail', $thanhcong))
	   echo "<p style ='color:green'> Them that bai! </p>";

	?>
</div>
</body>
</html>
