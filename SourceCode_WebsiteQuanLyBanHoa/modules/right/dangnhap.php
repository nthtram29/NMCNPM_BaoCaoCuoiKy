<?php
	@session_start();
	if(isset($_POST['dangnhap'])){
		$tenkh=$_POST['hoten'];
		$pass=$_POST['pass'];
		$sql=mysqli_query($mysqli,"SELECT * from dangky where tenkhachhang='$tenkh' and matkhau='$pass' limit 1");
		$count=mysqli_num_rows($sql);
		if($count>0){
			$tendangnhap=$_SESSION['dangnhap']=$tenkh;
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Bạn đã đăng nhập thành công.</p>';
			echo '<a href="index.php" style="margin-left:200px;padding:3px;font-size:15px;text-decoration:none;">Quay lại trang chủ để tiếp tục mua sản phẩm</a>';
		}else{
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Tài khoản hoặc Mật khẩu không hợp lệ.</p>';
		}
	}
?>
<div class="tieude">
	HOAN NGHÊNH QUÝ KHÁCH ĐÃ ĐẾN WILLOWELEA FLORAS
</div>
<div class="thongbao">
	<p><img src="imgs/anh.gif" style="margin-left:50px; width:100px;height:100px;"></p>
	<p>- Vui lòng đăng nhập đầy đủ thông tin</p>
    <p>- Đơn hàng của bạn sẽ giao trong 7 ngày</p>
    <p>- Uy tín, chất lượng, kịp thời Willowlea Florals hân hạnh được phục vụ.</p>
</div>
<div class="dangky">
  <p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu.</p>
 
	<section> 
       
        <div class="noi-dung">
            <div class="form">
                <h2>Trang Đăng Nhập</h2>
              
			  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="input-form">
                        <span>Tên khách hàng</span><strong style="color:red;"> (*)</strong>
                        <input type="text" placeholder="Nhập tên tài khoản" name="hoten">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span><strong style="color:red;"> (*)</strong>
                        <input type="password" placeholder="Nhập mật khẩu" name="pass">
                    </div>
                    <div class="input-form">
                        <input type="submit" name="dangnhap" value="Đăng Nhập">
                    </div>
                    <div class="input-form">
                        <p >Bạn Chưa Có Tài Khoản? <a href="?quanly=dangkymoi"  target="_self">Đăng Ký</a></p>
                    </div>
                </form>
            </div>

        </div>
		</div>
        <!--Kết Thúc Phần Nội Dung-->