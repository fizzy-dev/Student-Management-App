<?php
  include "Model/DBconfig.php";
  $a=new Database;
  $a->connect();
   if(isset($_POST['masv']))
   {
       $masv =$_POST['masv'];
       $table="sinhvien";
       $column="masv";
       $ketqua=$a->CheckData($masv,$table,$column);
       echo $ketqua;
    }
    if(isset($_POST['magv']))
    {
    	$magv=$_POST['magv'];
    	$table="giaovien";
    	$column="magv";
    	$ketqua=$a->CheckData($magv,$table,$column);
    	echo $ketqua;
    }
    if(isset($_POST['mamh']))
    {
    	$mamh=$_POST['mamh'];
    	$table="monhoc";
    	$column="mamh";
    	$ketqua=$a->CheckData($mamh,$table,$column);
    	echo $ketqua;
    }
    if(isset($_POST['malop']))
    {
    	$malop=$_POST['malop'];
    	$table="lop";
    	$column="malop";
    	$ketqua=$a->CheckData($malop,$table,$column);
    	echo $ketqua;
    }
?>