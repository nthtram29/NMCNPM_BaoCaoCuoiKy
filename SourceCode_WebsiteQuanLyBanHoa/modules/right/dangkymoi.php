<?php
	if(isset($_POST['gui']) && $_POST['hoten'] !="" && $_POST['email'] !="" && $_POST['diachi'] !="" && $_POST['pass'] !="" && $_POST['dienthoai'] !=""){
		$tenkh=$_POST['hoten'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$pass=$_POST['pass'];
		$dienthoai=$_POST['dienthoai'];
		$sql_dangky=mysqli_query($mysqli,"INSERT into dangky (tenkhachhang,email,matkhau,dienthoai,diachinhan) value('$tenkh','$email','$pass','$dienthoai','$diachi')");
    
 
	if($sql_dangky){
		echo '<h3 style="text-align:center;width:auto;padding:30px;background:#C40C42;color:#fff;font-size:25px ;">Bạn đã đăng ký thành công</h3>';
		echo '<a href="index.php" style="margin-left:220px;padding:3px;font-size:20px;text-decoration:none;">Quay lại trang chủ tiếp tục mua hàng</a>';
	}
}else{
  echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:25px;">Vui lòng nhập đầy đủ thông tin.</p>';

	}
?>
	

<div class="tieude">
HOAN NGHÊNH QUÝ KHÁCH ĐÃ ĐẾN WILLOWELEA FLORAS
</div>
<div class="thongbao">
	<p><img src="imgs/anh.gif" style="margin-left:50px; width:100px;height:100px;"></p>
	<p>- Vui lòng đăng kí đầy đủ thông tin</p>
    <p>- Đơn hàng của bạn sẽ giao trong 7 ngày</p>
    <p>- Uy tín, chất lượng, kịp thời Willowlea Florals hân hạnh được phục vụ.</p>
</div>
<div class="dangky">
  <p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu.</p></div>
  
  <!-- <form action="" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Tên khách hàng <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="hoten" size="50"></td>
  </tr>
  <tr>
    <td>Địa chỉ Email <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="email" size="50"></td>
  </tr>
  <tr>
    <td>Mật khẩu  <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="password" name="pass" size="50"></td>
  </tr>
  <tr>
    <td>Số điện thoại <strong style="color:red;"> (*)</strong></td>
     <td width="60%"><input type="text" name="dienthoai" size="50"></td>
  </tr>
  <tr>
    <td>Địa chỉ nhận hàng <strong style="color:red;"> (*)</strong></td>
   <td width="60%"><input type="text" name="diachi" size="50"></td>
  </tr>
  <tr>
    <td colspan="2">
    	 	
           <p><input type="submit" name="gui" value="Đăng kí" /></p>
         
    </td>
    </tr>
</table>
</form> -->


          <section>
    <div class="noi-dung">
      <div class="form">
          <h2>Trang Đăng Ký</h2>
              <p>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="input-form">
                  <span>Tên khách hàng</span><strong style="color:red;"> (*)</strong>
                  <input type="text" placeholder="Nhập tên tài khoản" name="hoten">
              </div>
              <div class="input-form">
                <span>Email</span><strong style="color:red;"> (*)</strong>
                <input type="text" placeholder="Nhập Email" name="email">
            </div>
              <div class="input-form">
                  <span>Mật khẩu</span><strong style="color:red;"> (*)</strong>
                  <input type="password" placeholder="Nhập mật khẩu" name="pass">
              </div>
              <div class="input-form">
                <span>Số điện thoại</span><strong style="color:red;"> (*)</strong>
                <input type="text" placeholder="Nhập số điện thoại" name="dienthoai">
            </div>
            <div class="input-form">
                <span>Địa chỉ nhận hàng</span><strong style="color:red;"> (*)</strong>
                <input type="text" placeholder="Nhập địa chỉ nhận hàng" name="diachi">
            </div>
              
              <div class="input-form">
                  <input type="submit" name="gui" value="Đăng ký">
              </div>
          </form>
      </div>
  </div>
</section>