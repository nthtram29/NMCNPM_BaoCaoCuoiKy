<?php
	if(isset($_POST['timkiemchitiet'])){
	$search = $_GET['id'];
	echo 'Mã khách hàng :<strong>'.' '.$search.'</strong><br/>';
	$sql_chitiet="SELECT * from cart_detail where '$search'=cart_detail.id_kh order by cart_detail.id";
	$row_chitiet=mysqli_query($mysqli,$sql_chitiet);
	$count=mysqli_num_rows($row_chitiet);
	if($count>0){
	
?>
<h3>Kết quả tìm kiếm</h3>

<table width="100%" border="1">
  <tr>
    <td>STT</td>
    <td>ID sản phẩm</td>
    <td>Tên sản phẩm</td>
    <td>Hình ảnh</td>
    <td>Số lượng</td>
    <td>Giá</td>
    <td>Thành tiền</td>
  </tr>
  <?php
  $i=1;
  while($dong_chitiet=mysqli_fetch_array($row_chitiet)){

  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php  echo $dong_chitiet['product_id'];?></td>
    <td><?php $sql_sanpham= "SELECT * from sanpham,cart_detail where cart_detail.product_id=sanpham.idsanpham order by sanpham.idsanpham";
	$row_sanpham = mysqli_query($mysqli,$sql_sanpham);
    $ten;
	while($dong_sanpham=mysqli_fetch_array($row_sanpham)){
    if($dong_chitiet['product_id']==$dong_sanpham['idsanpham'])
    $ten=$dong_sanpham['tensp'];
    }
    echo $ten;
 ?></td>
    <td><?php $sql_sanpham= "SELECT * from sanpham,cart_detail where cart_detail.product_id=sanpham.idsanpham order by sanpham.idsanpham";
	$row_sanpham = mysqli_query($mysqli,$sql_sanpham);
    $tenhinh;
	while($dong_sanpham=mysqli_fetch_array($row_sanpham)){
    if($dong_chitiet['product_id']==$dong_sanpham['idsanpham'])
    $tenhinh=$dong_sanpham['hinhanh'];
    }
 ?><img src="modules/quanlysanpham/uploads/<?php echo $tenhinh?>" width="80" height="80" /></td>
    <td><?php  echo $dong_chitiet['quantity'];?></td>
    <td><?php  echo $dong_chitiet['price'];?></td>
    <td><?php  $tong=$dong_chitiet['quantity']*$dong_chitiet['price'];
            echo $tong;    
    ?></td>
  </tr>
  <?php
  $i++;
  }
	}else{
	  echo 'Không tìm thấy kết quả';
  }
  }
  ?>
</table>
