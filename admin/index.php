<?php

//Cấm truy cập khi ko phải là admin
ob_start();
if(!(isset($_SESSION))){
session_start();
}

if(!(isset($_SESSION['idUser']) && $_SESSION['idGroup'])==1)
{
	header("location:../index.php");
}

?>
<?php 
require "../lib/dbCon.php";
require_once "../lib/quantri.php";
if(isset($_GET['p']))
{
	$p = $_GET['p'];	
}
else $p = "";

if(isset($_GET['q']))
{
	$q = $_GET['q'];
}
else $q = "";
?>
<?php
if(isset($_POST['btnTrangChu']))
{
	header("location:../index.php");
}
?>
<?php 
//Đăng xuất
if(isset($_POST['btnLogout-admin']))
{
	unset($_SESSION['idUser']);
	unset($_SESSION['Username']);
	unset($_SESSION['HoTen']);
	unset($_SESSION['idGroup']);
	header("location:../index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="layout.css" />


</head>

<body>
<div style="width:1000px; margin:10px 10px 5px 160px">
    
    <!--Header-->
    <div id="trangchu" >
        <a href="#"><strong>TRANG QUẢN TRỊ</strong></a>
        <div style ="width:180px;float: right">
            
            <strong style="color:white">Xin chào <?php echo $_SESSION['HoTen']?></strong>
			<div style="margin:5px">          
                <div style="float:left">
                    <form method="post">
                        <input name="btnLogout-admin" type="submit" value="Đăng xuất" />
                    </form>
                </div>
                <div style="float:right">
                	<form method="post">
                    	<input name="btnTrangChu" type="submit" value="Trang Chủ" />
                    </form>
                </div>
            </div>
        </div>
    </div>  
    <hr/>
    
    <!-- Menu -->
    <div>
    <?php require "menu.php"?>
    </div>
    
    <!-- Page -->
    <div>
    <?php 
	switch($p)
	{
		case "theloai": 
		{
			switch($q)
			{
				case "themTheLoai": require "theloai/themTheLoai.php";
				break;
				case "suaTheLoai": require "theloai/suaTheLoai.php";
				break;
				case "xoaTheLoai": require "theloai/xoaTheLoai.php";
				break;
				default: require "theloai/TheLoai.php";
				break;
			}
			break;
		}
		case "loaitin": 
		{
			switch($q)
			{
				case "themLoaiTin": require "loaitin/themLoaiTin.php";
				break;
				case "suaLoaiTin": require "loaitin/suaLoaiTin.php";
				break;
				case "xoaLoaiTin": require "loaitin/xoaLoaiTin.php";
				break;
				default: require "loaitin/LoaiTin.php";
				break;
			}
			
			break;
		}

		case "tintuc":
		{
			switch($q)
			{
				case "themTinTuc": require "tintuc/themTinTuc.php";
				break;
				case "suaTinTuc": require "tintuc/suaTinTuc.php";
				break;
				case "xoaTinTuc": require "tintuc/xoaTinTuc.php";
				break;
				default: require "tintuc/TinTuc.php";
				break;
			}
			break;
		}
		case "quangcao":
		{
			break;
		}
		default: 
		{
		require_once "index.php";
		break;
		}
	}
	
	?>
    </div>
</div>
</body>
</html>