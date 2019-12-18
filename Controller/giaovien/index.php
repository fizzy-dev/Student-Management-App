<?php 
if(isset($_GET['action']))
   {
   	$action=$_GET['action'];
   }else{
   	$action='';
   }


   switch ($action) {
   	case 'add':
   	    {
   	    	if(isset($_POST['add_teacher']))
			{
				$magv=$_POST['magv'];
				$tengv = $_POST['tengv'];
  			    $donvi =$_POST['donvi'];
  			    if($db->InsertTeacher($magv,$tengv,$donvi))
  			    {
  				   $thanhcong[] = 'add_success';
  			    }else $thanhcong[] = 'add_fail';
			}
			require_once('Views/giaovien/add_teacher.php');
			break;
   	    }

   	case 'list':
   	{
   		$tb="giaovien";
   		$data=$db->getAllData($tb);
   		require_once("Views/giaovien/list_teacher.php");
   		break;
   	}
   	case 'edit':
   	{
   		$magv = $_GET['magv'];
   		$tb= 'giaovien';
   		$column="magv";
   		$dataID= $db->getDataId($tb,$magv,$column);
   		if(isset($_POST['edit_teacher']))
   		{
   			$tengv=$_POST['tengv'];
   			$donvi=$_POST['donvi'];
   			if($db->UpdateTeacher($magv,$tengv,$donvi))
   			{
   				header("location: index.php?controller=giao-vien&action=list");
   			}
   		}
   		require_once('Views/giaovien/edit_teacher.php');
   		break;
   	}
   	case 'delete':
   	{
        if(isset($_GET['magv']))
        	{
        		$magv=$_GET['magv'];
        		$db->DeleteTeacher($magv);
        		header('location: index.php?controller=giao-vien&action=list');
        	}else{
        		header('location: index.php?controller=giao-vien&action=list');
        	}
            break;
   	}
   	default:
   		# code...
   		break;
   }

 ?>
