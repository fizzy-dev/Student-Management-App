<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>

<?php 
   include "Model/DBconfig.php";
   $db= new Database;
   $db->connect();

   if(isset($_GET['controller']))
   {
   	$controller=$_GET['controller'];
   }else{
   	require_once("Views/home.php");
   }

   switch ($controller) {
   	case 'thanh-vien':
   		require_once("Controller/sinhvien/index.php");
   		break;
      case 'giao-vien':
         require_once("Controller/giaovien/index.php");
         break;
      case 'mon-hoc':
         require_once("Controller/monhoc/index.php");
         break;
      case 'lop-hoc':
         require_once("Controller/lophoc/index.php");
         break;
      case 'sinhvien-lop':
         require_once("Controller/sinhvienlop/index.php");
         break;
   	default:
   		# code...
   		break;
   }
 ?>