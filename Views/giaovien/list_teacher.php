<?php include 'Views/home.php' ?>
<div class="danhsach">
<h3>DANH SACH THANH VIEN</h3>
<table>
	<thead>
		<tr>
			<th>STT</th>
			<th>MaGV</th>
			<th>HO&TEN</th>
			<th>DON VI</th>
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
			<td><?php echo $value['magv'] ?></td>
			<td><?php echo $value['tengv'] ?></td>
			<td><?php echo $value['donvi'] ?></td>
			<td>
				<a href="index.php?controller=giao-vien&action=edit&magv=<?php echo $value['magv'] ?>">Edit</a>
				<a href="index.php?controller=giao-vien&action=delete&magv=<?php echo $value['magv'] ?>">Delete</a>
			</td>
		</tr>
		<?php
		  $stt++;
	     }
     
		?>
   </tbody>
</table>	
</div>