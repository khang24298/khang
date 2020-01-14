<?php
if(isset($_POST['btnAdd_LT']))
{
	if(($_POST['TenLT'] != "") && ($_POST['ThuTu'] != "") && ($_POST['AnHien'] != ""))
	{
	$Ten = $_POST['TenLT'];
	$Ten_KhongDau = vn_to_str($Ten);
	$ThuTu = $_POST['ThuTu'];
	$AnHien = $_POST['AnHien'];
	$TenTL = $_POST['selectTL'];
	themLoaiTin($Ten, $Ten_KhongDau, $ThuTu, $AnHien, $TenTL);
	}
	else echo "<p style='color:red'>Vui lòng điền vào tất cả các trường<p>";
}
?>


<form name="form" method="post" action="">
<table width="100%" border="1">
  <tr id="center">
    <td colspan="4">THÊM LOẠI TIN</td>
  </tr>
  <tr id="center">
    <td>Tên Loại Tin</td>
    <td>Thứ Tự</td>
    <td>Ẩn/ Hiện</td>
    <td>Thể Loại</td>
  </tr>
  <tr id="center">
    <td height="67">
      <label for="TenLT"></label>
      <input type="text" name="TenLT" id="TenLT">
    </td>
    <td>
      <label for="ThuTu"></label>
      <input type="text" name="ThuTu" id="ThuTu">
    </td>
    <td>
      <p>
        <label>
          <input type="radio" name="AnHien" value="1" id="AnHien_0">
          Hiện</label>
        <br>
        <label>
          <input type="radio" name="AnHien" value="0" id="AnHien_1">
          Ẩn</label>
        <br>
      </p>
    </td>
    <td>
      <label for="selectTL"></label>
      <select name="selectTL" id="selectTL">
      <?php
	  $theloai = DanhSachTheLoai();
	  while($rowtheloai = mysqli_fetch_array($theloai))
	  {
	  ?>
      <option value="1"><?php echo $rowtheloai['TenTL']?></option>
	  <?php 
	  }
	  ?>
      </select>
      
    </td>
  </tr>
  <tr id="center">
  	<td height="28" colspan="4"><form id="form5" name="form5" method="post" action="">
  	  <input type="submit" name="btnAdd_LT" id="btnAdd_LT" value="Thêm" />
    </form></td>
  </tr>
</table>
</form>
