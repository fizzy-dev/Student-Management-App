<!DOCTYPE html>
<html>
<head>
	<title>Them giao vien -Quan li giao vien</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
           $(".magv").blur(function(){
               var u=$(this).val();
               $.post("ajaxcheck.php",{magv:u},function(data){
               	if(data==0){
                  	$(".thongbao").html("co the su dung magv nay");
                  	$(".thongbao").css("color","blue");
                  }else{
                  	$(".thongbao").html("magv da ton tai");
                  	$(".thongbao").css("color","red");
                  }
               });
           });
		});
	</script>
</head>
<body>
    <?php include 'Views/home.php' ?>
    <div class="">
	<h3>Them moi giao vien</h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>MaGV:</td>
				<td><input type="text" name="magv" class="magv" placeholder="Ma giao vien"></td>
				<td class="thongbao"></td>
			</tr>
			<tr>
				<td>Ho va ten:</td>
				<td><input type="text" name="tengv" placeholder="Ten giao vien"></td>
			</tr>
			<tr>
				<td>Don vi:</td>
				<td><input type="text" name="donvi" placeholder="Don vi"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="add_teacher" value="Them giao vien"></td>
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
