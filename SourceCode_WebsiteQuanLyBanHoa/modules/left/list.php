<?php
	$sqli_loai="SELECT * from loaisp order by idloaisp asc";
	$row_loai=mysqli_query($mysqli,$sqli_loai);
?>
<div class="box_list">
            <div class="tieude">
            	<h3>Chủ đề</h3>
            </div>
            	<ul class="list">
                <?php
				while($dong_loai=mysqli_fetch_array($row_loai)){
				?>
                	<li><a href="index.php?quanly=loaisp&id=<?php echo $dong_loai['idloaisp'] ?>"><?php echo $dong_loai['tenloaisp'] ?></a></li>
                  <?php
				}
				  ?>
                </ul>
                </div><!--Ket thuc div box loai phu kien -->
               <?php
	$sql_hieu="SELECT * from kichcosp order by idkichcosp asc";
	$row_hieu=mysqli_query($mysqli,$sql_hieu);
?>
                <div class="box_list">
            <div class="tieude">
            	<h3>Kích cỡ</h3>
            </div>
            	<ul class="list">
                <?php
				while($dong_hieu=mysqli_fetch_array($row_hieu)){
				?>
                	<li><a href="index.php?quanly=kichcosp&id=<?php echo $dong_hieu['idkichcosp'] ?>"><?php echo $dong_hieu['tenkichcosp'] ?></a></li>
                  <?php
				}
				  ?>
                </ul>
                </div><!--Ket thuc div box thuong hieu -->
                 <div class="box_list">
                 
                   <div class="tieude">
            	<h3>Hàng bán chạy</h3>
            		</div>
                    <?php
					$sql_banchay=mysqli_query($mysqli,"SELECT * from sanpham order by idsanpham desc limit 3");
					
					?>
            	<ul class="hangbanchay">	
                <?php
				while($dong_banchay=mysqli_fetch_array($sql_banchay)){
				?>
                	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_banchay['loaisp'] ?>&id=<?php echo $dong_banchay['idsanpham'] ?>">
                    	<img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong_banchay['hinhanh'] ?>" width="150" height="150" />
                    	<p><?php echo $dong_banchay['tensp'] ?></p>
                        <p style="color:red;"><?php echo number_format($dong_banchay['giadexuat']).' '.'VNĐ' ?></p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
                </div><!--Ket thuc div box hang ban chay -->
                 <div class="box_list">
                 <?php
				 	$sql=mysqli_query($mysqli,"SELECT * from tintuc");
					
				 ?>
                   <div class="tieude">
            	<h3>Tin tức sản phẩm</h3>
            		</div>
            	<ul class="tintucsp">	
                <?php
				while($dong_tin=mysqli_fetch_array($sql)){
				?>
                	<li><a href="#">
                    	<p style="float:left;"><img src="admincp/modules/quanlytintuc/uploads/<?php echo $dong_tin['hinhanh'] ?>" width="40" height="30" /></p>
                        <p style="overflow:hidden;padding-left:5px;"><?php echo $dong_tin['tentintuc'] ?></p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
                </div><!--Ket thuc div box tin tức -->