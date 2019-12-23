<?php include 'Views/home.php' ?>
<div class="danhsach">

<h3>DANH SACH THANH VIEN</h3>
<div>
	<form action="" method="GET">
		<table>
			<input type="hidden" name="action" value="search">
			<input type="hidden" name="controller" value="giao-vien">
			<tr>
				<td>
					Search by:
				</td>
				<td>
					<select name="type">
						<option  value="magv">magv</option>
						<option  value="tengv">tengv</option>
					</select>
				</td>
				<td>
					<input type="text" name="tukhoa" placeholder="nhap tu khoa">
				</td>
				<td>
					<input type="submit" name="" value="Search">
				</td>
			</tr>

		</table>
	</form>
</div>
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