<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'Views/home.php' ?>
<div>
	<h1>Top 3</h1>
<table>
	<thead>
		<tr>
			<th>STT</th>
			<th>MSSV</th>
			<th>Ho</th>
			<th>Ten</th>
			<th>Diem trung binh</th>
		</tr>
	</thead>
	<tbody>
	<?php
	     	$stt=1;
		    foreach ( $data as $value ){
		?>
		<tr>
			<td><?php echo $stt ?></td>
			<td><?php echo $value['masv']?></td>
			<td><?php echo $value['hosv']?></td>
			<td><?php echo $value['tensv']?></td>
			<td><?php echo $value['diemtrungbinh']?></td>
			
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