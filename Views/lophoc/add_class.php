<!DOCTYPE html>
<html>
<head>
	<title>them lop hoc</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
            $(".malop").blur(function(){
           	    var u=$(this).val();
             	$.post("ajaxcheck.php",{malop:u},function(data){
                if(data==0){
                  	$(".thongbao").html("co the su dung malop nay");
                  	$(".thongbao").css("color","blue");
                  }else{
                  	$(".thongbao").html("malop da ton tai");
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
	<h3>Them moi lop hoc</h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Ma lop:</td>
				<td><input type="text" class="malop" name="malop" placeholder="Ma lop"></td>
				<td class="thongbao"></td>
			</tr>
			<tr>
				<td>Ma mon hoc:</td>
				<td>
					<select name="mamh" > 
                    <?php foreach($data2 as $value){ ?>
                        <option value="<?php echo $value['mamh'];?>"><?php echo $value['mamh'];?></option> 
                    <?php } ?>
                    </select>
                </td>
			</tr>
			<tr>
				<td>Ma giao vien:</td>
				<td>
					<select name="magv" > 
                    <?php foreach($data1 as $value){ ?>
                        <option value="<?php echo $value['magv'];?>"><?php echo $value['magv'];?></option> 
                    <?php } ?>
                    </select>
				</td>
			</tr>
			<tr>
				<td>Nam hoc:</td>
				<td><input type="text" name="namhoc" placeholder="Nam hoc"></td>
			</tr>
			<tr>
				<td>Hoc ki:</td>
				<td><input type="text" name="hocki" placeholder="Hoc ki"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="add_class" value="Them lop"></td>
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
