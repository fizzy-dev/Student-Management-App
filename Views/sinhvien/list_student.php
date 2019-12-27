<?php include 'Views/home.php' ?>
<div>
<h3>DANH SACH SINH VIEN</h3>

<div>
	<form action="" method="GET">
		<table>
			<input type="hidden" name="action" value="search">
			<input type="hidden" name="controller" value="thanh-vien">
			<tr>
				<td>
					Search by:
				</td>
				<td>
					<select name="type">
						<option  value="masv">masv</option>
						<option  value="tensv">tensv</option>
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
				<a href="index.php?controller=thanh-vien&action=showscore&mssv=<?php echo $value['masv'] ?>">In diem</a>
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