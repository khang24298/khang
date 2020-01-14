<?php 
$theloai = theloai();
while($rowtheloai = mysqli_fetch_array($theloai))
{
$idTL = $rowtheloai["idTL"];
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="index.php?idTL=<?php echo $rowtheloai["idTL"]?>"><?php echo $rowtheloai["TenTL"]?></a>
        </div>
        <div class="child-cat">
		<?php
		$dsloaitin_theloai =  loaitin_theloai($idTL);
		while ($rowdsloaitin_theloai = mysqli_fetch_array($dsloaitin_theloai))
		{
		?>
        	<a href="?p=tintrongloai&idTL=<?php echo $rowtheloai["idTL"]?>&idLT=<?php echo $rowdsloaitin_theloai["idLT"]?>"><?php echo $rowdsloaitin_theloai["Ten"]?></a>
        <?php
		}
		?>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        <?php 
		$tin_tl = tin_theloai($idTL);
		$rowtin_tl = mysqli_fetch_array($tin_tl);
		?>
        	<div class="col1">
            	<div class="news">
                    <h3 class="title" ><a href="?p=chitiettin&chitiettin.php?idTL=<?php echo $rowtheloai["idTL"]?>&idLT=<?php echo $rowdsloaitin_theloai["idLT"]?>&idTin=<?php echo $rowtin_tl["idTin"]?>"><?php echo $rowtin_tl["TieuDe"]?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $rowtin_tl["urlHinh"] ?>" align="left" />
                    <div class="des"><?php echo $rowtin_tl["TomTat"]?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
            while($rowtin_tl = mysqli_fetch_array($tin_tl))
			{
			?>
             <p class="tlq"><a href="?p=chitiettin&idTL=<?php echo $rowtheloai["idTL"]?>&idLT=<?php echo $rowdsloaitin_theloai["idLT"]?>&idTin=<?php echo $rowtin_tl["idTin"]?>"><?php echo $rowtin_tl["TieuDe"] ?></a></p>
            <?php
			}
			?>
            </div> 
        </div>
    </div>
</div>
<div class="clear"></div>
<?php
}
?>



<!-- box cat-->





