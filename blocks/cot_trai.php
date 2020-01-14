<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
		<?php 
		$tinxemnhieu = tinxemnhieu();
		while($rowtinxemnhieu = mysqli_fetch_array($tinxemnhieu)){
		?>
            <div class="col1">
            	<div class="news">
                  <img class="images_news" src="upload/tintuc/<?php echo $rowtinxemnhieu["urlHinh"] ?>"/>
                    <h3 class="title" ><a href="?p=chitiettin&idTin=<?php echo $rowtinxemnhieu["idTin"]?>"><?php echo $rowtinxemnhieu["TieuDe"]?></a><span class="hit" style="margin:10px 14px 5px 2px"><?php echo $rowtinxemnhieu["SoLanXem"] ?></span></h3>
				</div>
            </div>
         <?php
		}
		 ?>
        </div>
    </div>
</div>
<div class="clear"></div>

