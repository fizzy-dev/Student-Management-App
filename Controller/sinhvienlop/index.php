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
            $data=$db->getStudentInClass($malop,$tb);
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
            header("location: index.php?controller=sinhvien-lop&action=detail&malop=".$malop);
          }

        }
      require_once("Views/sinhvienlop/add_student.php");
      break;
    }
    case 'update':
    {
      $tb="sinhvienlop";
      $malop=$_GET['malop'];
      $data=$db->getStudentInClass($malop,$tb);
      if(isset($_POST['update_score']))
      {
        $stt=1;
        foreach($data as $value)
        {
          $str=(string)$stt;
          $value['diem']=$_POST[$str];
          $db->UpdateScore($value['masv'],$malop,$value['diem']);

          $stt++;
        }
        header("location: index.php?controller=sinhvien-lop&action=detail&malop=".$malop);
      }
       require_once("Views/sinhvienlop/update_score.php");
       break;
      }
      case 'delete':
      {
        $masv=$_GET['masv'];
        $malop=$_GET['malop'];
        $db->DeleteStudentClass($masv,$malop);
        header("location: index.php?controller=sinhvien-lop&action=detail&malop=".$malop);
      }
  	
  	default:
  		# code...
  		break;
  }
 ?>