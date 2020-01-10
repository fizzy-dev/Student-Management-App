<?php 
if(isset($_GET['action']))
{
	$action= $_GET['action'];
}else{
    $action='';
}
switch ($action) {
	case 'reset':
	{
		$kq=$db->ResetDatabase();
        header("location: index.php");
		break;
	}
	case 'init':
	{
    if (isset($_POST['uploadclick']))
    {
        if (isset($_FILES['file']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['file']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                $db->ImportDatabase($_FILES['file']['tmp_name'],$_POST['type']);
        		header('location: index.php');
            }
        }
        else{
            echo 'Bạn chưa chọn file upload';
        }
    }
		require_once("Views/db/init_db.php");
		break;
	}

	default:
		# code...
		break;
}
  
 ?>