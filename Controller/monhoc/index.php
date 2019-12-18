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
   	    	if(isset($_POST['add_subject']))
			{
				$mamh=$_POST['mamh'];
				$tenmh = $_POST['tenmh'];
  			    $sotc =$_POST['sotc'];
  			    if($db->InsertSubject($mamh,$tenmh,$sotc))
  			    {
  				   $thanhcong[] = 'add_success';
  			    }else $thanhcong[] = 'add_fail';
			}
			require_once('Views/monhoc/add_subject.php');
			break;
   	    }

   	case 'list':
   	{
   		$tb="monhoc";
   		$data=$db->getAllData($tb);
   		require_once("Views/monhoc/list_subject.php");
   		break;
   	}
   	case 'edit':
   	{
   		$mamh = $_GET['mamh'];
   		$tb= 'monhoc';
   		$column="mamh";
   		$dataID= $db->getDataId($tb,$mamh,$column);
   		if(isset($_POST['edit_subject']))
   		{
   			$tenmh=$_POST['tenmh'];
   			$sotc=$_POST['sotc'];
   			if($db->UpdateSubject($mamh,$tenmh,$sotc))
   			{
   				header("location: index.php?controller=mon-hoc&action=list");
   			}
   		}
   		require_once('Views/monhoc/edit_subject.php');
   		break;
   	}
   	case 'delete':
   	{
        if(isset($_GET['mamh']))
        	{
        		$mamh=$_GET['mamh'];
        		$db->DeleteSubject($mamh);
        		header('location: index.php?controller=mon-hoc&action=list');
        	}else{
        		header('location: index.php?controller=mon-hoc&action=list');
        	}
            break;
   	}
   	default:
   		# code...
   		break;
   }

 ?>
