<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="index.php">Home</a>
  <!--MENU QUAN LY SINH VIEN-->
  <div class="dropdown">
    <button class="dropbtn">Quan li sinh vien 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="index.php?controller=thanh-vien&action=list">Danh sach sinh vien</a>
      <a href="index.php?controller=thanh-vien&action=add">Them sinh vien</a>
    </div>
  </div> 
    <!--MENU QUAN LY GIAO VIEN-->
  <div class="dropdown">
    <button class="dropbtn">Quan li giao vien 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="index.php?controller=giao-vien&action=list">Danh sach giao vien</a>
      <a href="index.php?controller=giao-vien&action=add">Them giao vien</a>
    </div>
  </div>
    <!--MENU QUAN LY MON HOC-->
  <div class="dropdown">
    <button class="dropbtn">Quan li mon hoc 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="index.php?controller=mon-hoc&action=list">Danh sach mon hoc</a>
      <a href="index.php?controller=mon-hoc&action=add">Them mon hoc</a>
    </div>
  </div> 
  <!--MENU QUAN LY LOP HOC-->
  <div class="dropdown">
    <button class="dropbtn">Quan li lop hoc 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="index.php?controller=lop-hoc&action=list">Danh sach lop</a>
      <a href="index.php?controller=lop-hoc&action=add">Them lop hoc</a>
    </div>
  </div>  
</div>
 </body>
</html>
