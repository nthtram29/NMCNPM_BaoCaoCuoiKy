
<?php
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang='';
	}
	if($trang =='' || $trang =='1'){
		$trang1=0;
	}else{
		$trang1=($trang*5)-5;
	}
	$sql_lietkesp="SELECT * from sanpham,kichcosp,loaisp where loaisp.idloaisp=sanpham.loaisp and kichcosp.idkichcosp=sanpham.sizesp order by sanpham.idsanpham desc limit $trang1,5 ";
	$row_lietkesp=mysqli_query($mysqli,$sql_lietkesp);

?>
<div class="button_themsp">
<a href="index.php?quanly=sanpham&ac=them">Thêm Mới</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tên sản phẩm</td>
    <td>Mã sp</td>
    <td>Hình ảnh</td>
    <td>Giá đề xuất</td>
    <td>Giá giảm</td>
    <td>Số lượng</td> 
    <td>Loại hàng</td>
    <td>Kích cỡ</td>
    <td>Tình trạng</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($row_lietkesp)){

  ?>
  <tr>
  	
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['tensp'] ?></td>
    <td><?php echo $dong['masp'] ?></td>
    <td><img src="modules/quanlysanpham/uploads/<?php echo $dong['hinhanh'] ?>" width="80" height="80" />
    <a href="index.php?quanly=gallery&ac=lietke&id=<?php echo $dong['idsanpham'] ?>" style="text-align:center;text-decoration:none; font-size:18px;color:#06F;">Gallery</a>
    </td>
    <td><?php echo number_format($dong['giadexuat']) ?></td>
    <td><?php echo number_format($dong['giagiam']) ?></td>
    <td><?php echo $dong['soluong'] ?></td>
    <td><?php echo $dong['tenloaisp'] ?></td>
    <td><?php echo $dong['tenkichcosp'] ?></td>
    <td><?php $sql_tinhtrang = "SELECT tinhtrang from sanpham";
	$row_tinhtrang = mysqli_query($mysqli,$sql_tinhtrang);
	$dong_tinhtrang=mysqli_fetch_array($row_tinhtrang);
	if($dong_tinhtrang['tinhtrang'] == 1 ){
		echo 'Kích hoạt';
	}elseif($dong_tinhtrang['tinhtrang'] ==2){
		echo 'Không kích hoạt';
	}
    ?></td>
    <td><a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $dong['idsanpham'] ?>" ><center><img src="../imgs/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlysanpham/xuly.php?id=<?php echo $dong['idsanpham']?>" class="delete_link"><center><img src="../imgs/delete.png" width="30" height="30"   /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
<div class="trang">
	Trang :
    <?php
	$sql_trang=mysqli_query($mysqli,"select * from sanpham");
	$count_trang=mysqli_num_rows($sql_trang);
	$a=ceil($count_trang/5);
	for($b=1;$b<=$a;$b++){
		
		if($trang==$b){
		
		echo '<a href="index.php?quanly=sanpham&ac=lietke&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="index.php?quanly=sanpham&ac=lietke&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</div>
