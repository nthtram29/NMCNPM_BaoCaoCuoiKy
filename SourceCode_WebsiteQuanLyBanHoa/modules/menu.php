<div class="start">
<div class="mar">
<marquee >Chào mừng quý khách đến với Willowlea Florals, hy vọng quý khách hài lòng với sản phẩm của shop🧡 </marquee></div>
<div class="header">
        	<img src="imgs/Banner.png" style="width:100%; height:200px"/>
			  <!-- Thẻ Chứa Slideshow -->
  
        </div>
        <?php
        @session_start(); 
        ?>

       
        <div class="start1">
  <div class="img">
    <img src="https://pkmacbook.com/wp-content/uploads/2021/07/logo-hoa-thiet-ke-dep_111809309.jpg" alt="" style="height: 150px">
  </div>
  <div class="start-0">
    <div class="start-1">
    <div class="box">
            <form class="sbox" action="index.php?quanly=timkiem_nd" method="POST">
            <input class="stext" name="tukhoa" type="text" placeholder="Tìm kiếm sản phẩm...">
            <input class="sbutton" type="submit" style="margin-top: 16px;width:100px;height: 29px;background-color:rgb(238, 183, 101);color:#fff;border-color:rgb(238, 183, 101)" name="timkiem_nd" href="" value="tìm kiếm">
            </form>
            </div>
        <div class="icongh">
            <a class="sbutton" type="submit" href="?quanly=dathang">
                <i class="fa fa-shopping-cart" style="font-size:36px; color:bisque;"></i></a>
        </div> 
        
            <div class="log">
                <ul><a href="?quanly=dangkymoi" target="_self" style= "text-decoration:none">Đăng kí </a></ul>
                <ul><a href="?quanly=dangnhap" target="_self" style= "text-decoration:none"> Đăng nhập</a></ul>
              </div>
        
    </div>
    <ul class="nav">
        <li><a href="index.php" style= "text-decoration:none">Trang chủ</a></li>
        <li><a href="?quanly=gioithieu" target="_self" style= "text-decoration:none">Giới thiệu</a></li>
        <li>
          <a href="#" style= "text-decoration:none">Chủ đề</a>
          <ul class="sub-menu">
                  <?php
          $sqli_loai="SELECT * from loaisp order by idloaisp asc";
          $row_loai=mysqli_query($mysqli,$sqli_loai);
        ?>
        <div class="box_list">
                      <ul class="">
                        <?php
                while($dong_loai=mysqli_fetch_array($row_loai)){
                ?>
                          <li><a href="index.php?quanly=loaisp&id=<?php echo $dong_loai['idloaisp'] ?>"><?php echo $dong_loai['tenloaisp'] ?></a></li>
                          <?php
                }
                  ?>
                        </ul>
                        </div>
                      <?php
          $sql_hieu="SELECT * from kichcosp order by idkichcosp asc";
          $row_hieu=mysqli_query($mysqli,$sql_hieu);
        ?>       
          </ul>
        </li>
        <li><a href="?quanly=dathang" target="_self" style= "text-decoration:none">Giỏ hàng</a></li>
        <li><a href="?quanly=lienhe" target="_self" style= "text-decoration:none">Liên hệ</a></li>
       
     </ul>
    </div>
  </div>
</div>