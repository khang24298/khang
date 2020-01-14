
<?php
require "../../lib/dbCon.php"; 
require "../../lib/trangchu.php";
?>

<?php
$idTL = $_GET['idTL'];settype($idTL,"int");
$lt_tl = loaitin_theloai($idTL);
while($rowlt_tl = mysqli_fetch_array($lt_tl))
{
?>
<option value="<?php echo $rowlt_tl['idLT']?>"><?php echo $rowlt_tl['Ten']?></option>
<?php
}
?>