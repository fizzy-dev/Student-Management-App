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
 		        $tb1="giaovien";
 		        $tb2="monhoc";
 		        $data1=$db->getAllData($tb1);
 		        $data2=$db->getAllData($tb2);
 		        if(isset($_POST['add_class']))
 		        {
 		        	$malop=$_POST['malop'];
 		        	$mamh=$_POST['mamh'];
 		        	$magv=$_POST['magv'];
 		        	$namhoc=$_POST['namhoc'];
 		        	$hocki=$_POST['hocki'];
 		        	if($db->InsertClass($malop,$mamh,$magv,$namhoc,$hocki))
 		        	{
 		        		$thanhcong[] = 'add_success';
 		        	}else{
 		        		$thanhcong[] = 'add_fail';
 		        	}
 		        }
 		    require_once("Views/lophoc/add_class.php");    
 			break;
 		    }
 		case 'list':
 	     	{
 	     		$tb='lop';
 	     		$data=$db->getAllData($tb);
 	     		require_once('Views/lophoc/list_class.php');
 	     		break;
     		}
        case 'edit':
            {
            	$malop=$_GET['malop'];
            	$tb='lop';
            	$column='malop';
            	$dataID=$db->getDataId($tb,$malop,$column);
            	$tb2="giaovien";
            	$tb1="monhoc";
            	$data2=$db->getAllData($tb2);
            	$data1=$db->getAllData($tb1);
            	if(isset($_POST['edit_class']))
            	{
            		$magv=$_POST['magv'];
            		$mamh=$_POST['mamh'];
            		$namhoc=$_POST['namhoc'];
            		$hocki=$_POST['hocki'];
            		if($db->UpdateClass($malop,$mamh,$magv,$namhoc,$hocki) )
            		{
            			header('location: index.php?controller=lop-hoc&action=list');
            		}
            	}
            	require_once("Views/lophoc/edit_class.php");
            	break;

            }
        case 'delete':
            {
            	if(isset($_GET['malop']))
            	{
            	    $malop=$_GET['malop'];
            	    $db->DeleteClass($malop);
            	    header("location: index.php?controller=lop-hoc&action=list");
                }else{
                	header("location: index.php?controller=lop-hoc&action=list");
                }
            }
            
 		default:
 			# code...
 			break;
 }
 ?>