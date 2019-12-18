<?php  
if(isset($_GET['action']))
{
	$action= $_GET['action'];
}else{
    $action='';
}

switch ($action) {
	case 'add':
		{
			if(isset($_POST['add_user']))
			{
				$mssv=$_POST['mssv'];
				$hoten = $_POST['hoten'];
  			    $namsinh = $_POST['namsinh'];
  			    $quequan =$_POST['quequan'];
  			    if($db->InsertStudent($mssv,$hoten,$namsinh,$quequan))
  			    {
  				   $thanhcong[] = 'add_success';
  			    }else $thanhcong[] = 'add_fail';
			}
			require_once('Views/sinhvien/add_student.php');
			break;
		}
    case 'list':
        {
             $table="sinhvien";
             $data=$db->getAllData($table);
             require_once('Views/sinhvien/list_student.php');
             break;
        }
    case 'edit':
        {
        	$mssv=$_GET['mssv'];
        	$tb="sinhvien";
        	$column="masv";
        	$dataID = $db->getDataId($tb,$mssv,$column);
        	if(isset($_POST['edit_student']))
        	{
        		$hoten = $_POST['hoten'];
  			    $namsinh = $_POST['namsinh'];
  			    $quequan =$_POST['quequan']; 
  			    if($db->UpdateStudent($mssv,$hoten,$namsinh,$quequan))
  			    {
                    $edit= "edit_success";
                    header('location: index.php?controller=thanh-vien&action=list');
  			    } else{
  				    $edit="edit_fail";
  				}
        	}
        	require_once("Views/sinhvien/edit_student.php");
       	    break;

        }
    case 'delete':
        {
        	if(isset($_GET['mssv']))
        	{
        		$mssv=$_GET['mssv'];
        		$db->DeleteStudent($mssv);
        		header('location: index.php?controller=thanh-vien&action=list');
        	}else{
        		header('location: index.php?controller=thanh-vien&action=list');
        	}
            break;
        }
    
	default:
		# code...
		break;
}


?>