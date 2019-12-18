<?php include 'Views/home.php' ?>
<div class="danhsach">
<h3>DANH SACH LOP</h3>
<table>
	<thead>
		<tr>
			<th>STT</th>
			<th>Ma lop</th>
			<th>Ma mon</th>
			<th>Ma giao vien</th>
			<th>Nam hoc</th>
			<th>Hoc ki</th>
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
			<td><?php echo $value['malop'] ?></td>
			<td><?php echo $value['mamh'] ?></td>
			<td><?php echo $value['magv']?></td>
			<td><?php echo $value['namhoc'] ?></td>
			<td><?php echo $value['hocki'] ?></td>
			<td>
				<a href="index.php?controller=lop-hoc&action=edit&malop=<?php echo $value['malop'] ?>">Edit</a>
				<a href="index.php?controller=lop-hoc&action=delete&malop=<?php echo $value['malop'] ?>">Delete</a>
				<a href="index.php?controller=sinhvien-lop&action=add&malop=<?php echo $value['malop'] ?>">AddStudent</a>
				<a href="index.php?controller=sinhvien-lop&action=detail&malop=<?php echo $value['malop'] ?>">Detail</a>

			</td>
		</tr>
		<?php
		  $stt++;
	     }
     
		?>
   </tbody>
</table>	
</div>