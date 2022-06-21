
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
	$sql_lietkekh="SELECT * from dangky order by dangky.id_khachhang desc limit $trang1,5 ";
	$row_lietkekh=mysqli_query($mysqli,$sql_lietkekh);

?>

<table width="100%" border="1">
  <tr>
    <td>STT</td>
    <td>ID kh</td>
    <td>Tên kH</td>
    <td>EMAIL</td>
    <td>SDT</td>
    <td>Địa chỉ</td>
    <td>Tổng tiền đã mua</td>
    <td>Chi tiết</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($row_lietkekh )){

  ?>
  <tr>
  	
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['id_khachhang'] ?></td>
    <td><?php echo $dong['tenkhachhang'] ?></td>
    <td><?php echo $dong['email']?></td>
    <td><?php echo $dong['dienthoai'] ?></td>
    <td><?php echo $dong['diachinhan'] ?></td>
    <td><?php $sql_tongtien= "SELECT * from cart_detail,cart,dangky where cart_detail.cart_id=cart.id and cart_detail.id_kh=dangky.id_khachhang order by cart_detail.id ";
	$row_tongtien = mysqli_query($mysqli,$sql_tongtien);
  $tongtien=0;
	while($dong_tongtien=mysqli_fetch_array($row_tongtien)){
    if($dong['id_khachhang']==$dong_tongtien['id_kh']){
      $tongtien+=$dong_tongtien['price']*$dong_tongtien['quantity'];
    }
  }
  echo $tongtien;
 ?></td>
    <td><form action="index.php?quanly=hoadon&ac=chitiet&id=<?php echo $dong['id_khachhang']?>" method="post" enctype="multipart/form-data">
     <p><input type="submit" id="button_timkiem" name="timkiemchitiet" value="Xem chi tiết" /></p>
        </form></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
<div class="trang">
	Trang :
    <?php
	$sql_trang=mysqli_query($mysqli,"select * from dangky");
	$count_trang=mysqli_num_rows($sql_trang);
	$a=ceil($count_trang/5);
	for($b=1;$b<=$a;$b++){
		
		if($trang==$b){
		
		echo '<a href="index.php?quanly=hoadon&ac=lietke&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="index.php?quanly=hoadon&ac=lietke&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</div>
