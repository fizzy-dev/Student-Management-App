<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'Views/home.php' ?>
<div class="danhsach">
<h3>DANH SACH SINH VIEN</h3>
<form method="POST">
<table>
	<thead>
		<tr>
			<th>STT</th>
			<th>MSSV</th>
			<th>Ten sinh vien</th>
			<th>Diem</th>
		</tr>
	</thead>
	<tbody>
	    <?php
	        $stt=1;
		    foreach ( $data as $value ){
		    	$str=(string)$stt;
		?>
		<tr>
			<td><?php echo $stt ?></td>
			<td><?php echo $value['masv'] ?></td>
			<td><?php echo $value['tensv']?></td>
			<td>		
            <input type="text" name="<?php echo $str ?>" value="<?php echo $value['diem'] ?>">      
			</td>
		</tr>
		
		<?php
		  $stt++;
	     }
		?>
		<tr>
			<td>
			<input type="submit" name="update_score" value="Update">
			</td>
		</tr>
    </tbody>
</table>
</form>	
</div>
</body>
</html>