<?php
if(isset($_GET['idTL']))
{
	$idTL = $_GET['idTL'];
}
$rowtl= timTL($idTL);
?>

<?php 
if(isset($_POST['btnModify'])) 
{
	if(($_POST['txtTenTL'] != "") && ($_POST['txtThuTu'] != "") && ($_POST['txtAnHien'] != ""))
	{
	$TenTL = $_POST['txtTenTL'];
	$TenTL_KhongDau = vn_to_str($TenTL);
	$ThuTu = $_POST['txtThuTu'];
	$AnHien = $_POST['txtAnHien'];
	suaTL($idTL,$TenTL, $TenTL_KhongDau, $ThuTu, $AnHien);
	header("location:../admin/index.php?p=theloai");
	}
	else echo "<p style='color:red'>Vui lòng điền vào tất cả các trường<p>";
}

?>

<div>
<form method="post">
<table width="100%" border="1">
 
  <tr style="text-align:center">
    <td>Tên TL</td>
    <td>Thứ Tự</td>
    <td>Ẩn Hiện</td>
  </tr>
  <tr>
    
    <td><label for="txtTenTL"></label>
      <input value ="<?php echo $rowtl['TenTL']?>" type="text" name="txtTenTL" id="txtTenTL"></td>
    
    <td><label for="txtThuTu"></label>
      <input value ="<?php echo $rowtl['ThuTu']?>" type="text" name="txtThuTu" id="txtThuTu"></td>
    <td><p>
      <label>
        <input <?php if($rowtl['AnHien']==1) echo "checked='checked'" ?> name="txtAnHien"  type="radio" id="txtAnHien_0" value="1" >
        Hiện</label>
      <br>
      <label>
        <input <?php if($rowtl['AnHien']==0) echo "checked='checked'" ?> type="radio" name="txtAnHien" value="0" id="txtAnHien_1">
        Ẩn</label>
      <br>
    </p>      <label for="txtAnHien"></label></td>
  </tr>
  <tr style="text-align:center">
    <td colspan="3"><input type="submit" name="btnModify" id="btnModify" value="Sửa"></td>
    </tr>
</table>
</form>
</div>