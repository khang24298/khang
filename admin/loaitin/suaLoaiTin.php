<?php 
$idLT = $_GET['idLT'];
$rowtimlt= timlt_tl($idLT);
?>
<form name="form1" method="post" action="">
  <table width="100%" border="1">
    <tr id="center">
      <td colspan="4">SỬA LOẠI TIN</td>
    </tr>
    <tr id="center">
      <td>Tên Loại Tin</td>
      <td>Thứ Tự</td>
      <td>Ẩn/Hiện</td>
      <td>Thể Loại</td>
    </tr>
    <tr id="center">
      <td><label for="TenLT"></label>
      <input value ="<?php echo $rowtimlt['Ten']?>" type="text" name="TenLT" id="TenLT"></td>
      <td><label for="ThuTu"></label>
      <input value ="<?php echo $rowtimlt['ThuTu']?>" type="text" name="ThuTu" id="ThuTu"></td>
      <td><p>
        <label>
          <input <?php if($rowtimlt['AnHien']==1) echo "checked='checked'" ?> type="radio" name="AnHien" value="1" id="AnHien_0">
          Hiện</label>
        <br>
        <label>
          <input name="AnHien" type="radio" id="AnHien_1" value="0" checked <?php if($rowtimlt['AnHien']==1) echo "checked='unchecked'" ?>>
          Ẩn</label>
        <br>
      </p></td>
      <td><label for="TheLoai"></label>
        <select  name="TheLoai" id="TheLoai">
          <option><?php echo $rowtimlt['TenTL']?></option>
          <?php $idTL = $rowtimlt['idTL'];
		  $tl= DanhSachTheLoai_LT($idTL);
		  while($rowtl = mysqli_fetch_array($tl))
		  {
		  ?>
          <option><?php echo $rowtl['TenTL']?></option>
          <?php
		  }
		  ?>
      </select>
      </td>
    </tr>
    <tr id="center">
      <td colspan="4"><input type="submit" name="btnModify" id="btnModify" value="Sửa"></td>
    </tr>
  </table>
</form>
