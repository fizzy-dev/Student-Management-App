<?php 
 if(isset($_GET['action']))
    {
	$action= $_GET['action'];
    }else{
    $action='';
    }

  switch ($action) {
  	case 'detail':
      {
        if(isset($_GET['malop']))
          {
            $malop=$_GET['malop'];
            $tb="sinhvienlop";
            $data=$db->ShowStudentInClass($malop,$tb);
          }
          require_once("Views/sinhvienlop/list_student.php");
          break;
          }
    case 'add':
    {
        $tb="sinhvienlop";
        $malop=$_GET['malop'];
        $data=$db->getStudentNotInClass($malop);
        if(isset($_POST['add_student']))
        {
          $masv=$_POST['masv'];
          if($db->InsertStudentClass($masv,$malop))
          {
            header("location: index.php?controller=lop-hoc&action=list");
          }

        }
      require_once("Views/sinhvienlop/add_student.php");
      break;
    }
    case 'update':
    {
      
    }
  	
  	default:
  		# code...
  		break;
  }
 ?>