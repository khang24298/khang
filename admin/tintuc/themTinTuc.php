<html>
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
	$("#idTL").change(function(){
		var id = $(this).val();
		$.get("../admin/tintuc/loaitin_tl.php",{idTL:id},function(data){
			$("#idLT").html(data);})
		
	})
})
</script>	
</head>
<body>
 <div>
    <form name="form1" method="post" action="">
      <table width="100%" border="1">
        <tr>
          <td colspan="2">THÊM TIN TỨC</td>
        </tr>
        <tr>
          <td>Tiêu Đề</td>
          <td><label for="TieuDe"></label>
          <input type="text" name="TieuDe" id="TieuDe"></td>
        </tr>
        <tr>
          <td>Tóm Tắt</td>
          <td><label for="TomTat"></label>
          <input type="text" name="TomTat" id="TomTat"></td>
        </tr>
        <tr>
          <td><p>URL Hình</p></td>
          <td><label for="urlHinh"></label>
          <input type="text" name="urlHinh" id="urlHinh">
          <input type="file" name="btnFile" id="btnFile"></td>
        </tr>
        <tr>
          <td>Nội Dung</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Thể Loại</td>
          <td><label for="idTL"></label>
            <select name="idTL" id="idTL">
			<option value="" selected="selected">Vui lòng chọn thể loại</option>
            <?php 
        
            
            $theloai= DanhSachTheLoai();
            while($rowtheloai = mysqli_fetch_array($theloai))
            {
            ?>
            <option value="<?php echo $rowtheloai['idTL']?>"><?php echo $rowtheloai['TenTL']?></option>
            <?php
            }
            ?>
          </select></td>
        </tr>
        <tr>
          <td>Loại Tin</td>
          <td><label for="idLT"></label>
            <select name="idLT" id="idLT">
				<option value ="" selected="selected">Vui lòng chọn loại tin</option>
            <?php 
            $loaitin= DanhSachLoaiTin();
            while($rowloaitin = mysqli_fetch_array($loaitin))
            {
            ?>
            <option value="<?php echo $rowloaitin['idLT']?>"><?php echo $rowloaitin['Ten']?></option>
            <?php
            }
            ?>
          </select></td>
        </tr>
        <tr>
          <td>Ẩn/Hiện</td>
          <td><p>
            <label>
              <input type="radio" name="AnHien" value="1" id="AnHien_0">
              Hiện</label>
            <br>
            <label>
              <input type="radio" name="AnHien" value="0" id="AnHien_1">
              Ẩn</label>
            <br>
          </p></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="btnAdd_Tin" id="btnAdd_Tin" value="Thêm"></td>
        </tr>
      </table>
    </form>
</div>
</body>
</html>