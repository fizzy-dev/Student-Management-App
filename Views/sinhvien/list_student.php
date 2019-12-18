<?php include 'Views/home.php' ?>
<div class="danhsach">
<h3>DANH SACH THANH VIEN</h3>
<table>
	<thead>
		<tr>
			<th>STT</th>
			<th>MSSV</th>
			<th>HO&TEN</th>
			<th>NAM SINH</th>
			<th>QUE QUAN</th>
			<th>HANH DONG</th>
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
			<td><?php echo $value['tensv'] ?></td>
			<td><?php echo $value['ngaysinh']?></td>
			<td><?php echo $value['quequan'] ?></td>
			<td>
				<a href="index.php?controller=thanh-vien&action=edit&mssv=<?php echo $value['masv'] ?>">Edit</a>
				<a href="index.php?controller=thanh-vien&action=delete&mssv=<?php echo $value['masv'] ?>">Delete</a>
			</td>
		</tr>
		<?php
		  $stt++;
	     }
     
		?>
   </tbody>
</table>	
</div>