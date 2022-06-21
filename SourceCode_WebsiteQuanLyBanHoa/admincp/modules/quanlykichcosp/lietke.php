<?php
	$sql_lietkesp="SELECT * from kichcosp order by idkichcosp desc ";
	$row_lietkesp=mysqli_query($mysqli,$sql_lietkesp);

?>
<div class="button_themsp">
<a href="index.php?quanly=kichcosp&ac=them">Thêm Mới</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td>ID</td>
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
    <td><?php echo $dong['tenkichcosp'] ?></td>
    <td><?php
	if($dong['tinhtrang'] == 1 ){
		echo 'Kích hoạt';
	}else{
		echo 'Không kích hoạt';
	}
    ?></td>
    <td><a href="index.php?quanly=kichcosp&ac=sua&id=<?php echo $dong['idkichcosp'] ?>"><center><img src="../imgs/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlykichcosp/xuly.php?id=<?php echo $dong['idkichcosp']?>" class="delete_link"><center><img src="../imgs/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
