
<div>
<table width="100%" border="1">
  <tr style="text-align:center">
    <td colspan="7">DANH SÁCH LOẠI TIN</td>
  </tr>
  <tr style="text-align:center">
    <td>ID Loại Tin</td>
    <td>Tên</td>
    <td>Tên (Không Dấu)</td>
    <td>Thứ Tự</td>
    <td>Ẩn Hiện</td>
    <td>Tên Thể Loại</td>
    <td><a href="?p=loaitin&q=themLoaiTin">Thêm</a></td>
  </tr>
  <?php
  $lt = DanhSachLoaiTin();
  while($dslt = mysqli_fetch_array($lt))
  {
  ?> 
  <tr style="text-align:center">
    <td><?php echo $dslt['idLT'] ?></td>
    <td><?php echo $dslt['Ten'] ?></td>
    <td><?php echo $dslt['Ten_KhongDau'] ?></td>
    <td><?php echo $dslt['ThuTu'] ?></td>
    <td><?php echo $dslt['AnHien'] ?></td>
    <td><?php echo $dslt['TenTL'] ?></td>
    <td><a href="?p=loaitin&q=suaLoaiTin&idLT=<?php echo $dslt['idLT'] ?>">Sửa</a>  - <a href="?p=loaitin&q=xoaLoaiTin&idLT=<?php echo $dslt['idLT'] ?>">Xóa</a></td>
  </tr>
  <?php 
  }
  ?>
</table>
</div>