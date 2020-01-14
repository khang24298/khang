<?php
//Cấm truy cập khi ko phải là admin
ob_start();
if(!(isset($_SESSION['idUser']) && $_SESSION['idGroup'])==1)
{
	header("location:../index.php");
}
?>
<?php

function vn_to_str($str)
	{
	 
		$unicode = array(
		 
		'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
		 
		'd'=>'đ',

		'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
		 
		'i'=>'í|ì|ỉ|ĩ|ị',
		 
		'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
		 
		'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
		 
		'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
		 
		'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
		 
		'D'=>'Đ',
		 
		'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
		 
		'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
		 
		'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
		 
		'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
		 
		'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',);
	 
		foreach($unicode as $nonUnicode=>$uni){
		 
		$str = preg_replace("/($uni)/i", $nonUnicode, $str);
		 
		}
		$str = str_replace(' ','-',$str);
	 
		return $str;
	 
}

//The Loai
function DanhSachTheLoai()
{
	$qr = "SELECT * FROM `theloai`
		  ";
	require "dbCon.php";
	return $result = mysqli_query($con, $qr);
}
function ThemTheLoai($TenTL, $TenTL_KhongDau, $ThuTu, $AnHien)
{
	$qr = "INSERT INTO `theloai`
			VALUES (null,'$TenTL', '$TenTL_KhongDau', '$ThuTu', '$AnHien')
			";
	require "dbCon.php";
	mysqli_query($con, $qr);
}
function timTL($idTL)
{
	$qr ="SELECT * FROM `theloai`
		  WHERE idTL = $idTL
		  ";
	require "dbCon.php";
	$result=mysqli_query($con,$qr);
	return $result_final = mysqli_fetch_array($result);
}
function suaTL($idTL,$TenTL, $TenTL_KhongDau, $ThuTu, $AnHien)
{	
	$qr ="UPDATE `theloai`
		  SET TenTL = '$TenTL', TenTL_KhongDau = '$TenTL_KhongDau', ThuTu = '$ThuTu', AnHien ='$AnHien'
		  WHERE idTL = $idTL
		  ";
	require "dbCon.php";
	mysqli_query($con, $qr);
}
function xoaTL($idTL)
{
	$qr ="DELETE FROM `theloai` 
		  WHERE idTL = $idTL
		  ";
	require "dbCon.php";
	mysqli_query($con, $qr);
}
// Quản lý loại tin
function DanhSachLoaiTin()
{
	$qrtim_tl ="SELECT * FROM `theloai`,`loaitin` 
				WHERE`theloai`.idTL =`loaitin`.idTL 
				ORDER BY `theloai`.idTL ASC
				";
	require "dbCon.php";
	return $result_tl = mysqli_query($con, $qrtim_tl);
}
function DanhSachTheLoai_LT($idTL)
{
	$qr = "SELECT * FROM `theloai`
		   WHERE idTL <> $idTL
		  ";
	require "dbCon.php";
	return $result = mysqli_query($con, $qr);
}
function timlt_tl($idLT)
{
	$qrtim_tl ="SELECT * FROM `theloai`JOIN `loaitin` 
				ON `theloai`.idTL=`loaitin`.idTL 
				WHERE idLT = $idLT
				";
	require "dbCon.php";
	$result_tl = mysqli_query($con, $qrtim_tl);
	$result_final = mysqli_fetch_array($result_tl);
	return $result_final;
}
function xoaLT($idLT)
{
	$qr ="DELETE FROM `loaitin` 
		  WHERE idLT = $idLT
		  ";
	require "dbCon.php";
	mysqli_query($con, $qr);
}
function themLoaiTin($Ten, $Ten_KhongDau, $ThuTu, $AnHien, $TenTL)
{
	$qr = "INSERT INTO `loaitin`
			VALUES (null,'$Ten', '$Ten_KhongDau', '$ThuTu', '$AnHien','$TenTL')
			";
	require "dbCon.php";
	mysqli_query($con, $qr);
}
?>