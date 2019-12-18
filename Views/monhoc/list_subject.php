<?php include 'Views/home.php' ?>
<div class="danhsach">
<h3>DANH SACH MON HOC</h3>
<table>
	<thead>
		<tr>
			<th>STT</th>
			<th>MaMH</th>
			<th>TEN MON HOC</th>
			<th>SO TIN CHI</th>
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
			<td><?php echo $value['mamh'] ?></td>
			<td><?php echo $value['tenmh'] ?></td>
			<td><?php echo $value['sotc'] ?></td>
			<td>
				<a href="index.php?controller=mon-hoc&action=edit&mamh=<?php echo $value['mamh'] ?>">Edit</a>
				<a href="index.php?controller=mon-hoc&action=delete&mamh=<?php echo $value['mamh'] ?>">Delete</a>
			</td>
		</tr>
		<?php
		  $stt++;
	     }
     
		?>
   </tbody>
</table>	
</div>