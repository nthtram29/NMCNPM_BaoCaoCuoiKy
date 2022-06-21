<?php
	include('../config.php');
	$tenloaisp=$_POST['loaisp'];
	$tinhtrang=$_POST['tinhtrang'];
	
	if(isset($_POST['them'])){
		//them
		$sql_them=("INSERT into loaisp (tenloaisp,tinhtrang) value('$tenloaisp','$tinhtrang')");
		mysqli_query($mysqli,$sql_them);
		header('location:../../index.php?quanly=loaisp&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "UPDATE loaisp set tenloaisp='$tenloaisp',tinhtrang='$tinhtrang' where idloaisp='$_GET[id]'";
		mysqli_query($mysqli,$sql_sua);
		header('location:../../index.php?quanly=loaisp&ac=lietke');
	}else{
		$sql_xoa = "DELETE from loaisp where idloaisp = $_GET[id]";
		mysqli_query($mysqli,$sql_xoa);
		header('location:../../index.php?quanly=loaisp&ac=lietke');
	}
?>
