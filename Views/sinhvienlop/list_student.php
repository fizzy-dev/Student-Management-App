<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'Views/home.php' ?>
<div class="danhsach">
<h3>DANH SACH SINH VIEN LOP <?php echo $malop ?></h3>
<a href="index.php?controller=sinhvien-lop&action=update&malop=<?php echo $malop ?>" title="">Cap nhat diem</a>
<table>
	<thead>
		<tr>
			<th>STT</th>
			<th>Ten sinh vien</th>
			<th>Diem</th>
			<th>Hanh dong</th>
		</tr>
	</thead>
	<tbody>
	<?php
	     	$stt=1;
		    foreach ( $data as $value ){
		?>
		<tr>
			<td><?php echo $stt ?></td>
			<td><?php echo $value['masv'] ?></td>
			<td><?php echo $value['diem'] ?></td>
			<td>
				<a href="index.php?controller=sinhvien-lop&action=delete&malop=<?php echo $malop ?>&masv=<?php echo $value['masv'] ?>">Delete</a>
			</td>
		</tr>
		<?php
		  $stt++;
	     }
     
		?>
   </tbody>
</table>	
</div>
</body>
</html>