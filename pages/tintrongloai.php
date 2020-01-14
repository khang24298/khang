<?php 
if(isset($_GET["idLT"]))
{
	$idLT = $_GET["idLT"];
}
if(isset($_GET["trang"]))
{
	$trang = $_GET["trang"];
}
else $trang = 1;
?>
<div class="box-cat">
	<div class="cat1">
    	<div class="cat">
        	
        	<span>
            <a href="index.php">Trang Chủ</a>
            >>
            <a href="index.php"><?php 
			$tim_tl = tim_tl($idLT);
			echo $tim_tl["TenTL"]?></a>	
            >>
    		<a href="?p=tintrongloai&idLT=<?php echo $tim_tl["idLT"]?>&trang=<?php echo $trang ?>"><?php echo $tim_tl["Ten"]?></a>	
            </span>
            
    	</div>
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            <?php
			$sotin1trang = 5;
			$from = ($trang - 1)*$sotin1trang;
			$tintrongloai = tin_loaitin_phantrang($idLT, $from, $sotin1trang);
			while ($rowtintrongloai = mysqli_fetch_array($tintrongloai))
			{
			?>
            	<div class="news">
                    <h3 class="title" ><a href="?p=chitiettin&idTin=<?php echo $rowtintrongloai["idTin"]?>"><?php echo $rowtintrongloai["TieuDe"]?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $rowtintrongloai["urlHinh"]?>" align="left" />
                    <div class="des"><?php echo $rowtintrongloai["TomTat"]?> </div>
                    <div class="clear"></div>
                   
				</div>
			<?php 
			}
			?>
            </div>
            
        </div>
    </div>
    <div class="clear"></div>
    <hr/>   
    <div id="phantrang">
    <span><?php 
	$sotin = tin_loaitin($idLT);
	$rowsotin = mysqli_num_rows($sotin);
	$sotrang = ceil(($rowsotin/$sotin1trang));	
	for($i=1;$i <=$sotrang;$i++)
	{
	?>
    <a <?php if($i==$trang) echo "style='background-color:red'"?>  href="?p=tintrongloai&idLT=<?php echo $idLT ?>&trang=<?php echo $i?>"><?php echo $i?></a>
    <?php
	}
	?>
	</span>
    </div>
    
</div>



