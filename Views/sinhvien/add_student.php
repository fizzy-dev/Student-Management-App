<!DOCTYPE html>
<html>
<head>
	<title>Them sinh vien -Quan li sinh vien</title>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".masv").blur(function(){
				var u= $(this).val();
				$.post("ajaxcheck.php",{masv:u},function(data){
                  if(data==0){
                  	$(".thongbao").html("co the su dung masv nay");
                  	$(".thongbao").css("color","blue");
                  }else{
                  	$(".thongbao").html("masv da ton tai");
                  	$(".thongbao").css("color","red");
                  }
				});
			});
		});
	</script>
</head>
<body>
    <?php include 'Views/home.php' ?>
    <div class="dangkythanhvien">
	<h3>Them moi sinh vien</h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Ho va ten:</td>
				<td><input type="text" name="hoten" placeholder="Ten sinh vien"></td>
			</tr>
			<tr>
				<td>MSSV:</td>
				<td><input type="text" class="masv" name="mssv" placeholder="mssv"></td>
				<td><div class="thongbao"></div></td>
			</tr>
			<tr>
				<td>Que quan:</td>
				<td><input type="text" name="quequan" placeholder="Que quan"></td>
			</tr>
			<tr>
				<td>Nam sinh:</td>
				<td><input type="text" name="namsinh" placeholder="Nam sinh"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="add_user" value="Them thanh vien"></td>
			</tr>
		</table>
	</form>
	<?php
	if(isset($thanhcong) && in_array('add_success', $thanhcong))
	{ 
		echo "<p style ='color:green; text-align:center'> Them thanh cong! </p>";
     }
    else if(isset($thanhcong) && in_array('add_fail', $thanhcong))
	   echo "<p style ='color:green'> Them that bai! </p>";

	?>
</div>
</body>
</html>
