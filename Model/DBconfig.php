<?php

class Database{
	private $hostname='localhost';
	private $username='root';
	private $password='';
	private $dbname='mvcdangkilop';
	private $conn=NULL;
	private $result=NULL;

	public function connect()
	{
		$this->conn= new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
		if(!$this->conn)
		{
			echo "ket noi that bai";
			exit();
		}else{
			mysqli_set_charset($this->conn,'utf8');
		}
		return $this->conn;
	}

	//thuc thi ca lenh truy van
    public function execute($sql)
    {
    	$this->result=$this->conn->query($sql);
    	return $this->result;
    }
    
    // phuong thuc lay du lieu
	public function getData()
	{
		if($this->result)
		{
			$data= mysqli_fetch_array($this->result);
		}
		else
		{
			$data=0;
		}
		return $data;
	}

	//Lay toan bo du lieu tu 1 bang
	public function getAllData($table)
	{
		$sql="SELECT * FROM $table";
		$this->execute($sql);
		if($this->num_rows()==0)
		{
			$data=0;
		}else{
             while($datas=$this->getData())
             {
             	$data[]=$datas;
             }
		}
		return $data;

	}

	  // lay so hang cua 1 bang
	public function num_rows()
    {
    	if($this->result){
    		$num=mysqli_num_rows($this->result);
    	}else
    	{
    		$num=0;
    	}
    	return $num;
    }

	public function getDataId($table,$id,$column)
	{
		$sql= "SELECT * FROM $table WHERE $column = '$id' ";
		$this->execute($sql); 
		if($this->num_rows()!=0)
        {
          $data= mysqli_fetch_array($this->result);
        }
		else
		{
			$data=0;
		}
		return $data;
	}
 // STUDENT ACTION
	public function InsertStudent($mssv,$hoten,$namsinh,$quequan)
	{
	    $sql="INSERT INTO sinhvien(masv,tensv,ngaysinh,quequan)VALUES('$mssv','$hoten','$namsinh','$quequan')";
		return $this->execute($sql);
	}

	public function UpdateStudent($mssv,$hoten,$namsinh,$quequan)
	{
		$sql="UPDATE sinhvien SET tensv='$hoten',ngaysinh ='$namsinh',quequan='$quequan' WHERE masv='$mssv' " ;
		return $this->execute($sql); 
	}

	public function DeleteStudent($id)
	{
        $sql= "DELETE FROM sinhvien WHERE masv='$id'";
        return $this->execute($sql);
	}

	public function ShowScore($id)
	{
		//$sql="SELECT * FROM sinhvienlop WHERE masv ='$id' ";
		$sql="SELECT sinhvienlop.masv ,sinhvienlop.diem ,sinhvien.tensv , monhoc.tenmh,lop.malop FROM (sinhvienlop INNER JOIN (lop INNER JOIN monhoc ON lop.mamh=monhoc.mamh) on sinhvienlop.malop=lop.malop) INNER JOIN sinhvien on sinhvien.masv=sinhvienlop.masv WHERE sinhvienlop.masv='$id' ";
		$this->execute($sql); 
		if($this->num_rows()==0)
    	{
    		$data=0;
    	}else{
    		while($datas=$this->getData()){
    			$data[]=$datas;
    		}
    	}
    	return $data;
	}

 // TEACHER ACTION
	public function InsertTeacher($magv,$tengv,$donvi)
	{
	    $sql="INSERT INTO giaovien(magv,tengv,donvi)VALUES('$magv','$tengv','$donvi')";
		return $this->execute($sql);
	}

	public function UpdateTeacher($magv,$tengv,$donvi)
	{
		$sql="UPDATE giaovien SET tengv='$tengv',donvi='$donvi' WHERE magv='$magv' ";
		return $this->execute($sql);
	}
	public function DeleteTeacher($id)
	{
        $sql= "DELETE FROM giaovien WHERE magv='$id'";
        return $this->execute($sql);
	}
 // SUBJECT ACTION
	public function InsertSubject($mamh,$tenmh,$sotc)
	{
	    $sql="INSERT INTO monhoc(mamh,tenmh,sotc)VALUES('$mamh','$tenmh','$sotc')";
		return $this->execute($sql);
	}

	public function UpdateSubject($mamh,$tenmh,$sotc)
	{
		$sql="UPDATE monhoc SET tenmh='$tenmh',sotc='$sotc' WHERE mamh='$mamh' ";
		return $this->execute($sql);
	}
	public function DeleteSubject($id)
	{
        $sql= "DELETE FROM monhoc WHERE mamh='$id'";
        return $this->execute($sql);
	}
  // CLASS ACTION

	public function InsertClass($malop,$mamh,$magv,$namhoc,$hocki)
	{
		$sql="INSERT INTO lop(malop,mamh,magv,namhoc,hocki) VALUES('$malop','$mamh','$magv','$namhoc','$hocki')";
		return $this->execute($sql);
	}

	public function UpdateClass($malop,$mamh,$magv,$namhoc,$hocki)
	{
		$sql="UPDATE lop SET mamh='$mamh',magv='$magv',namhoc='$namhoc',hocki='$hocki' WHERE malop='$malop' ";
		return $this->execute($sql);
	}

	public function DeleteClass($malop)
	{
		$sql="DELETE FROM lop WHERE malop='$malop' ";
		return $this->execute($sql);
	}


//SINHVIEN-LOP ACTION
	public function getStudentInClass($malop,$table)
	{
		//$sql="SELECT * FROM $table WHERE malop='$malop' ";
		$sql="SELECT * FROM $table INNER JOIN sinhvien ON sinhvienlop.masv=sinhvien.masv 
		WHERE sinhvienlop.malop='$malop'";
		$this->execute($sql);
		if($this->num_rows()==0)
		{
			$data=0;
		}else{
             while($datas=$this->getData())
             {
             	$data[]=$datas;
             }
		}
		return $data; 
	}

	public function getStudentNotInClass($malop)
	{
		$sql="SELECT masv from sinhvien WHERE masv not in (SELECT sinhvien.masv FROM sinhvien LEFT JOIN sinhvienlop on sinhvien.masv=sinhvienlop.masv WHERE sinhvienlop.malop=('$malop'))";
		$this->execute($sql);
		if($this->num_rows()==0)
		{
			$data=0;
		}else{
			while($datas=$this->getData())
			{
				$data[]=$datas;
			}
		}
		return $data;
	}

	public function InsertStudentClass($masv,$malop)
	{
		$sql= "INSERT INTO sinhvienlop(masv,malop) VALUES ('$masv','$malop')";
		return $this->execute($sql);
	}

	public function UpdateScore($masv,$malop,$diem)
	{
        $sql="UPDATE sinhvienlop set diem='$diem' WHERE malop = '$malop' AND masv='$masv' ";
        return $this->execute($sql);
	}

	public function DeleteStudentClass($masv,$malop)
	{
		$sql="DELETE FROM sinhvienlop WHERE malop='$malop' AND masv='$masv'";
		return $this->execute($sql);
	}

	// SEARCH ACTON 
    public function SearchData($key,$type,$table)
    {
    	$sql="SELECT * FROM $table WHERE $type REGEXP '$key' ";
    	$this->execute($sql);
    	if($this->num_rows()==0)
    	{
    		$data=0;
    	}else{
    		while($datas=$this->getData()){
    			$data[]=$datas;
    		}
    	}
    	return $data;
    }
    // AJAX CHECK STUDENT
    public function CheckData($data,$table,$column)
    {
    	$sql="SELECT * FROM $table WHERE $column = '$data' ";
    	$this->execute($sql);
    	return $this->num_rows();
    }
}



?>