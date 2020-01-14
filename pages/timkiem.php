<?php 
if(isset($_GET["q"]))
{
	$tukhoa = $_GET["q"];
}
else $tukhoa='#';
?>
<?php
if(isset($_GET["trang"]))
{
	$trang = $_GET["trang"];
}
else $trang=1;
?>

<div class="box-cat">
	<div class="cat1">
    	<div class="cat">
        	
        	<span>
            <a href="index.php">Trang Chủ</a>
            >>
            <a href="?p=timkiem">Tìm Kiếm</a>	
            >>
    		<a href="?p=timkiem&q=<?php echo $tukhoa ?>"><?php echo $tukhoa?></a>	
            </span>
            
    	</div>
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            <?php
			$sotin1trang = 5;
			$from = ($trang - 1)*$sotin1trang;
			$tintimkiem = timkiem_phantrang($tukhoa, $from, $sotin1trang);
			while ($rowtintimkiem = mysqli_fetch_array($tintimkiem))
			{
			?>
            	<div class="news">
                    <h3 class="title" ><a href="?p=chitiettin&idTL=<?php echo $rowtintimkiem["TL"]?>&idTin=<?php echo $rowtintimkiem["idTin"]?>"><?php echo $rowtintimkiem["TieuDe"]?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $rowtintimkiem["urlHinh"]?>" align="left" />
                    <div class="des"><?php echo $rowtintimkiem["TomTat"]?> </div>
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
	$sotin = timkiem($tukhoa);
	$rowsotin = mysqli_num_rows($sotin);
	$sotrang = ceil(($rowsotin/$sotin1trang));	
	for($i=1;$i <=$sotrang;$i++)
	{
	?>
    <a <?php if($i==$trang) echo "style='background-color:red'"?>  href="?p=timkiem&idTL=<?php echo $rowtintimkiem["idTL"] ?>&trang=<?php echo $i?>&q=<?php echo $tukhoa?>"><?php echo $i?></a>
    <?php
	}
	?>
	</span>
    </div>
    
</div>