<!DOCTYPE html>
<html>
<head>
	<title>Them mon hoc -Quan li mon hoc</title>
</head>
<body>
    <?php include 'Views/home.php' ?>
    <div class="">
	<h3>Them moi mon hoc</h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Ma mon hoc:</td>
				<td><input type="text" name="mamh" placeholder="Ma mon hoc"></td>
			</tr>
			<tr>
				<td>Ten mon hoc:</td>
				<td><input type="text" name="tenmh" placeholder="Ten mon hoc"></td>
			</tr>
			<tr>
				<td>So tin chi:</td>
				<td><input type="text" name="sotc" placeholder="So tin chi"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="add_subject" value="Them mon hoc"></td>
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
