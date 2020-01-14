<?php 

function theloai(){
	$qrmenu = "SELECT * FROM `theloai`
			  WHERE AnHien = 1
			";
	require "dbCon.php";
	return $result_menu = mysqli_query($con, $qrmenu);
}
function loaitin_theloai($idTL){
	$qrlt_tl = "SELECT * FROM `loaitin`
				WHERE idTL = $idTL
				";
	require "dbCon.php";
	return $result_lt = mysqli_query($con, $qrlt_tl);
}
function tinmoinhat(){
	$qrtinmoi = "SELECT * FROM `tin`
				ORDER BY idTin DESC
				LIMIT 0,8
				";
	require "dbCon.php";
	return $result_tinmoi = mysqli_query($con, $qrtinmoi);
}
function tinxemnhieu(){

	$qrtinnhieu = "SELECT * FROM `tin`
				   ORDER BY SoLanXem DESC
				   LIMIT 0,3
				   ";
     require "dbCon.php";
	 return $result_tinnhieu = mysqli_query($con, $qrtinnhieu);
}
function cuocsongdoday(){
	$qrtincungloai = "SELECT * FROM `tin`
					  WHERE idLT = 5
					  ORDER BY idTin DESC
					  LIMIT 0,4
					  ";
	require "dbCon.php";
	return $result_csdd = mysqli_query($con, $qrtincungloai);
}
function doanhnhan(){
	$qrtindn = "SELECT * FROM `tin`
				WHERE idLT = 11
				ORDER BY idTin DESC
				LIMIT 0,4
				";
	require "dbCon.php";
	return $result_dn = mysqli_query($con, $qrtindn);
}
function tin_theloai($idTL)
{
	$qrtin_tl = "SELECT * FROM `tin`
				WHERE idTL = $idTL
				ORDER BY SoLanXem DESC
				LIMIT 0,3
				";
	require "dbCon.php";
	return $resulttin_tl = mysqli_query($con, $qrtin_tl);				
}
function tin_loaitin($idLT)
{
	$qrtin_lt = "SELECT * FROM `tin`
				WHERE idLT = $idLT
				ORDER BY SoLanXem DESC
				";
	require "dbCon.php";
	return $resulttin_lt = mysqli_query($con, $qrtin_lt);
}
function tin_loaitin_phantrang($idLT, $from, $sotin1trang)
{
	$qrtin_lt = "SELECT * FROM `tin`
				WHERE idLT = $idLT
				ORDER BY SoLanXem DESC
				LIMIT $from, $sotin1trang
				";
	require "dbCon.php";
	return $resulttin_lt = mysqli_query($con, $qrtin_lt);
}
function chitiettin($idTin)
{
	$qrtin = "SELECT * FROM `tin`
			  WHERE idTin = $idTin
			  ";
	require "dbCon.php";
	return $resulttin = mysqli_query($con,$qrtin);
}
function tinlienquan($idTin, $idTL)
{
	$qrtin_lq = "SELECT * FROM `tin`
				WHERE idTL = $idTL and idTin <> $idTin
				ORDER BY RAND()
				LIMIT 0,3
				";
	require "dbCon.php";
	return $resulttin_lq = mysqli_query($con, $qrtin_lq);
}
function tim_tl($idLT)
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
function capnhatluotxem($idTin)
{
	$qr = "UPDATE `tin`
		   SET SoLanXem = SoLanXem + 1
		   WHERE idTin = $idTin
		   ";
	require "dbCon.php";
	mysqli_query($con, $qr);
}
function timkiem_phantrang($tukhoa, $from, $sotin1trang)
{
	$qr ="SELECT * FROM `tin`
		  WHERE TieuDe REGEXP '$tukhoa'
		  ORDER BY idTin DESC
		  LIMIT $from, $sotin1trang
		  ";
	require "dbCon.php";
	return $result = mysqli_query($con, $qr);
}
function timkiem($tukhoa)
{
	$qr ="SELECT * FROM `tin`
		  WHERE TieuDe REGEXP '$tukhoa'
		  ORDER BY idTin DESC
		  ";
	require "dbCon.php";
	return $result = mysqli_query($con, $qr);
}
function dangnhap($un, $pa)
{
	$qr = "SELECT * FROM `users`
		   WHERE Username = '$un'
		   AND Password = '$pa'
		   ";
	require "dbCon.php";
	return $result = mysqli_query($con, $qr);
}
?>
