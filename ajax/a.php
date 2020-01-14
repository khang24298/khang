<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang tính tổng</title>
<script type="text/javascript" src="../jquery-slider-master/js/jquery-2.1.0.min.js"></script>
<script>

</script>
</head>
<body>
<form method="post" action="">

    <table width="100%" border="1">
      <tr>
        <td colspan="2">Tính tổng:</td>
      </tr>
      <tr>
        <td>Nhập số a:</td>
        <td><form id="form1" name="form1" method="post" action="">
          <label for="txtA"></label>
          <input type="text" name="txtA" id="txtA" />
        </form></td>
      </tr>
      <tr>
        <td>Nhập số b:</td>
        <td><form id="form2" name="form2" method="post" action="">
          <label for="txtB"></label>
          <input type="text" name="txtB" id="txtB" />
        </form></td>
      </tr>
      <tr>
        <td colspan="2"><form id="form3" name="form3" method="post" action="">
          <input type="submit" name="btnSum" id="btnSum" value="Kết quả" />
        </form></td>
      </tr>
      <tr id="ketqua">
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
</form>
</body>
</html>