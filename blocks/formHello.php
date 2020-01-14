<div style="width:170px">
    <div style="text-align:center">
    <?php
    echo "Xin chào ".$_SESSION['HoTen']."<br/>";
    echo "ID : ".$_SESSION['idUser']."<br/>";
    echo "HovaTen : ".$_SESSION['HoTen']."<br/>";
    echo "IDGroup : ".$_SESSION['idGroup'];
    ?>
    </div>
    <div>
        <div style="float:left">
            <form method="post">
            <input name="btnLogout" type="submit" value="Đăng xuất" />
            </form>
        </div>
        <?php if($_SESSION['idGroup']==1)
		{
			echo "<div style='float:right'>
            <form method='post'>
            <input name='btnAdmin' type='submit' value='Trang Quản Trị' />
            </form>
        </div>
		";
		}
		?>
        
    </div>
</div>