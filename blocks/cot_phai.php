<!-- box cat -->
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="?p=tintrongloai&idTL=2&idLT=5">Cuộc sống đó đây</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php 
			$csdd = cuocsongdoday();
			$rowcsdd = mysqli_fetch_array($csdd);
		?>
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="?p=chitiettin&idLT=5&idTin=<?php echo $rowcsdd["idTin"]?>"><?php echo $rowcsdd["TieuDe"]?></a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $rowcsdd["urlHinh"]?>" align="left" />
                    <div class="des"><?php echo $rowcsdd["TomTat"]?></div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
           <div class="col2">
           <?php
		   while ($rowcsdd = mysqli_fetch_array($csdd)){    
		   ?>
           <h3 class="tlq"><a href="?p=chitiettin&idLT=5&idTin=<?php echo $rowcsdd["idTin"]?>"><?php echo $rowcsdd["TieuDe"]?></a></h3>
           <?php 
		   }
		   ?>
           </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<div class="box-cat">
	<div class="cat">
    <?php 
			$doanhnhan = doanhnhan();
			$rowdoanhnhan = mysqli_fetch_array($doanhnhan);
	?>
    	<div class="main-cat">
        	<a href="?p=tintrongloai&idTL=3&idLT=11">Doanh nhân</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="?p=chitiettin&idLT=11&idTin=<?php echo $rowdoanhnhan['idTin']?>"><?php echo $rowdoanhnhan['TieuDe']?></a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $rowdoanhnhan['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $rowdoanhnhan['TomTat']?></div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php 
			while ($rowdoanhnhan = mysqli_fetch_array($doanhnhan))
			{
			?>
           <h3 class="tlq"><a href="?p=chitiettin&idLT=11&idTin=<?php echo $rowdoanhnhan['idTin']?>"><?php echo $rowdoanhnhan['TieuDe']?></a></h3>
            <?php
			}
			?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>

