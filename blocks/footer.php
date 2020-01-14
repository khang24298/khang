
<div class="thongtin-title">
			<a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
	<div class="right">
          <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
       
    </div>
</div>
<div class="thongtin-content">
    <?php 
	$theloai = theloai();
	while($rowtheloai = mysqli_fetch_array($theloai))
	{
		$idTL = $rowtheloai["idTL"];
	?>
	<ul class="ulBlockMenu">
                <li class="liFirst">
                   <h2>
                      <a class="mnu_giaoduc" href="?p=tintrongloai&idTL=<?php echo $idTL?>/<?php echo $rowtheloai["TenTL_KhongDau"]?>"><?php echo $rowtheloai["TenTL"]?></a>
                   </h2>
                </li>
                <?php
				$loaitin = loaitin_theloai($idTL);
				while ($rowloaitin = mysqli_fetch_array($loaitin))
				{ 
				?>
                <li class="liFollow">
                   <h2>
                      <a href="?p=tintrongloai&idTL=<?php echo $idTL?>&idLT=<?php echo $rowloaitin["idLT"]?>"><?php echo $rowloaitin["Ten"]?></a>
                   </h2>
                </li>
                <?php
				}
				?>

     </ul>
    <?php 
	}
	?>
</div>




