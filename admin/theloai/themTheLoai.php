
<?php 
if(isset($_POST['btnAdd']))
{
	if(($_POST['txtTenTL'] != "") && ($_POST['txtThuTu'] != "") && ($_POST['txtAnHien'] != ""))
	{
	$TenTL = $_POST['txtTenTL'];
	$TenTL_KhongDau = vn_to_str($TenTL);
	$ThuTu = $_POST['txtThuTu'];
	$AnHien = $_POST['txtAnHien'];
	themTheLoai($TenTL, $TenTL_KhongDau, $ThuTu, $AnHien);
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
      <input type="text" name="txtTenTL" id="txtTenTL"></td>
    
    <td><label for="txtThuTu"></label>
      <input type="text" name="txtThuTu" id="txtThuTu"></td>
    <td><p>
      <label>
        <input type="radio" name="txtAnHien" value="1" id="txtAnHien_0">
        Hiện</label>
      <br>
      <label>
        <input type="radio" name="txtAnHien" value="0" id="txtAnHien_1">
        Ẩn</label>
      <br>
    </p>      <label for="txtAnHien"></label></td>
  </tr>
  <tr style="text-align:center">
    <td colspan="3"><input type="submit" name="btnAdd" id="btnAdd" value="Thêm"></td>
    </tr>
</table>
</form>
</div>