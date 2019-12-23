<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'Views/home.php' ?>
<div>
	<h1>Diem cua sinh vien <?php
	foreach ( $data as $value ); echo $value['masv']; ?></h1>
<table>
	<thead>
		<tr>
			<th>STT</th>
			<th>Diem</th>
			<th>Ma Lop</th>
		</tr>
	</thead>
	<tbody>
	<?php
	     	$stt=1;
		    foreach ( $data as $value ){
		?>
		<tr>
			<td><?php echo $stt ?></td>
			<td><?php echo $value['malop']?></td>
			<td><?php echo $value['diem'] ?></td>
			
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