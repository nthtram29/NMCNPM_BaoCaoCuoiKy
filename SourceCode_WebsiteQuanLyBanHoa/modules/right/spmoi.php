	<?php
	$sql_moinhat="SELECT * from sanpham order by idsanpham desc limit 0,6";
	$row_moinhat=mysqli_query($mysqli,$sql_moinhat);
	
?>
	<div class="tieude">Sản phẩm mới nhất</div>
                	<ul class="product">
                    <?php
					while($dong_moinhat=mysqli_fetch_array($row_moinhat)){
					?>
                    	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_moinhat['loaisp'] ?>&id=<?php echo $dong_moinhat['idsanpham'] ?>">
                        	<img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong_moinhat['hinhanh'] ?>" width="150" height="150" />
                            <p style="color:#C40C42; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?php echo $dong_moinhat['tensp'] ?></p>
                            <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:40px; line-height:30px;margin-left:25px;margin-bottom:5px;"><?php echo number_format($dong_moinhat['giadexuat']).' '.'VNĐ'?></p>
                            
                        	
                        </a></li>
                      <?php
					}
					  ?>
                    </ul>
                 <div class="clear"></div>
                 
 <?php
 	$sql_loai=mysqli_query($mysqli,"SELECT * from loaisp ");
	
	while($dong_loai=mysqli_fetch_array($sql_loai)){
		
	echo '<div class="tieude">'.$dong_loai['tenloaisp'].'</div>';
 	$sql_loaisp="SELECT * from loaisp inner join sanpham on sanpham.loaisp=loaisp.idloaisp where sanpham.loaisp='".$dong_loai['idloaisp']."'";
	$row=mysqli_query($mysqli,$sql_loaisp);
	$count=mysqli_num_rows($row);
	if($count>0){
	?>
   
                 
         
                	<ul class="product">
                     <?php
			
			while($dong=mysqli_fetch_array($row)){
					
 				?>
                    	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong['loaisp'] ?>&id=<?php echo $dong['idsanpham'] ?>">
                        	<img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong['hinhanh'] ?>" width="150" height="150" />
                            <p style="color:#C40C42; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><?php echo $dong['tensp']?></p>
                            <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:40px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong['giadexuat']).' '.'VNĐ' ?></p>
                            
                        	
                        </a></li>
                        <?php
			}
	}else{
		echo '<h3 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h3>';
	}
			
			
						?>
                    </ul>
                     <div class="clear"></div>
                <?php
	
	
	}
	
	
				?>
          
            