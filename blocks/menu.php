
<div>
<a class="left" href="index.php"><img class="logo_icon_home" alt="" src="images/img_logo_home.gif"></a>
          <ul >
          <?php 
		  $theloai = theloai();
		  while ($rowtheloai = mysqli_fetch_array($theloai))
		  {
			 $idTL = $rowtheloai["idTL"];
		  ?>
		  	
            	<li>
					<div class="dropdown">
	            		<a href="?p=trangchu&idTL=<?php echo $rowtheloai["idTL"] ?>" class="dropbtn"><?php echo $rowtheloai["TenTL"] ?>
	            		</a>
	            	
			                <ul class="dropdown-content">
				                <?php 
									$dsloaitin_theloai = loaitin_theloai($idTL);
									while($rowdsloaitin_theloai = mysqli_fetch_array($dsloaitin_theloai))
									{
								?>
				                  	<li>
				                  		<a href="?p=tintrongloai&idTL=<?php echo $rowtheloai["idTL"] ?>&idLT=<?php echo $rowdsloaitin_theloai["idLT"] ?>"><?php echo $rowdsloaitin_theloai["Ten"]?></a>
				                  	</li>
				                  
				                <?php
								  	}
								?>
			                </ul>
			           
		            </div>
                </li>
		  <?php
		  }
		  ?>
          </ul>
	
    
</div>
<br sytle = "border-bottom:1px solid #E2E3E2"/>




