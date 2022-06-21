<?php
	if(isset($_POST['logout'])){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="tk">
 <form action="index.php?quanly=timkiem&ac=sp" method="post" enctype="multipart/form-data">
     <p><input type="text" name="masp" placeholder="  Nhập mã sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm sản phẩm" />
        </p>
        </form>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="submit" name="logout" value="Đăng xuất" style="margin-top:1px;background:#F90;color:#fff;width:150px;height:30px;" />
            </form>
        </div>
<div class="menu">
    	<ul>
        	<li><a href="index.php?quanly=loaisp&ac=them">Quản lý chủ đề sản phẩm</a></li>
             <li><a href="index.php?quanly=kichcosp&ac=them">Quản lý kích cỡ</a></li>
            <li><a href="index.php?quanly=sanpham&ac=them">Quản lý sản phẩm</a></li>
            <li><a href="index.php?quanly=hoadon&ac=lietke">Quản lý khách hàng</a></li>
            <li><a href="index.php?quanly=tintuc&ac=them">Quản lý tin tức</a></li>
        </ul>
       
    </div>
