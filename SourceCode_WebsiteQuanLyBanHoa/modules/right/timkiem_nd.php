
<?php
	if(isset($_POST['timkiem_nd'])){
	$search=$_POST['tukhoa'];
	echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
	$sql_timkiem="SELECT * from sanpham where  tensp ='".$search."'";
	$row_timkiem=mysqli_query($mysqli,$sql_timkiem);
	$count=mysqli_num_rows($row_timkiem);
	if($count>0){
	
?>
<h3>Kết quả tìm kiếm</h3>

<table width="100%" border="1">
  <tr style="text-align:center;">
   
    <td>Tên sản phẩm</td>
    <td>Hình ảnh</td>
    <td>Giá đề xuất</td>
    <td>Giá giảm</td>
    <td>Chi tiết SP</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($row_timkiem)){

  ?>
  <tr>
  
    <td><?php echo $dong['tensp'] ?></td>
    <td><img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong['hinhanh'] ?>" width="130" height="130" /></td>
    <td><?php echo $dong['giadexuat'] ?>VND</td>
    <td><?php echo $dong['giagiam'] ?>VND</td>
	
    </td>
    <td><li style="list-style: none; " ><a href="?quanly=chitietsp&idloaisp=<?php echo $dong['loaisp'] ?>&id=<?php echo $dong['idsanpham'] ?>" style="margin-left:5px;padding: 5px;color: #blue ;text-decoration:none ;">Xem chi tiết</a></li></td>  </tr>
  
  <?php
  $i++;
  }
	}else{
	  echo 'Không tìm thấy kết quả';
  }
  }
  ?>
</table>
