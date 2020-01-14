
<div>
<table width="100%" border="1">
  <tr style="text-align:center">
    <td  colspan="6"><p><strong>DANH SÁCH THỂ LOẠI</strong></p></td>
  </tr>
  <tr style="text-align:center" >
    <td>ID TL</td>
    <td>Tên TL</td>
    <td>Tên TL (Không Dấu)</td>
    <td>Thứ Tự</td>
    <td>Ẩn Hiện</td>
    <td><a href="?p=theloai&q=themTheLoai">Thêm</a></td>
  </tr>
  <?php 
  $dstheloai = DanhSachTheLoai();
  while($rowdstheloai = mysqli_fetch_array($dstheloai))
  {
  ?>
  <tr style="text-align:center">
    <td><?php echo $rowdstheloai['idTL']?></td>
    <td><?php echo $rowdstheloai['TenTL']?></td>
    <td><?php echo $rowdstheloai['TenTL_KhongDau']?></td>
    <td><?php echo $rowdstheloai['ThuTu']?></td>
    <td><?php echo $rowdstheloai['AnHien']?></td>
    <td><a href="?p=theloai&q=suaTheLoai&idTL=<?php echo $rowdstheloai['idTL']?>">Sửa</a>-<a onclick="return confirm('Bạn có thực sự muốn xóa?')" href="?p=theloai&q=xoaTheLoai&idTL=<?php echo $rowdstheloai['idTL']?>">Xóa</a></td>
  </tr>
  <?php
  }
  ?>
</table> 
</div>