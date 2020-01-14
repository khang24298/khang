<div id="slide-left">
        	<div id="slideleft-main">
                <img src="upload/tintuc/<?php 
				$tinmoinhat = tinmoinhat();
				$rowtinmoinhat = mysqli_fetch_array($tinmoinhat);
				echo $rowtinmoinhat["urlHinh"]
				 ?>"  /><br />
                <h2 class="title"><a href="?p=chitiettin&idTL=<?php echo $rowtinmoinhat["idTL"]?>&idTin=<?php echo $rowtinmoinhat["idTin"]?>"><?php echo $rowtinmoinhat["TieuDe"]?></a> </h2>
                <div class="des">
                    <?php echo $rowtinmoinhat["TomTat"]?>
                </div>
                <div class="clear"></div>
                <?php 
				$idTin = $rowtinmoinhat["idTin"];
				$idTL = $rowtinmoinhat["idTL"];
				$tinlq = tinlienquan($idTin, $idTL);
				while ($rowtinlq = mysqli_fetch_array($tinlq))
				{
				?>
            	<p class="tlq"><a href="?p=chitiettin&idTL=<?php echo $rowtinlq["idTL"]?>
				&idTin=<?php echo $rowtinlq["idTin"]?>"><?php echo $rowtinlq["TieuDe"]?></a></p>
                <?php 
				}
				?>
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
            <?php 

			while ($rowtinmoinhat = mysqli_fetch_array($tinmoinhat)){

			?>
               <li>
                <div class="title_news">
               		<a href="?p=chitiettin&idTL=<?php echo $rowtinmoinhat["idTL"]?>&idTin=<?php echo $rowtinmoinhat["idTin"]?>" class="txt_link"><?php echo $rowtinmoinhat["TieuDe"] ?></a> 
                </div>
              </li>
			<?php 
			}
			?>
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     