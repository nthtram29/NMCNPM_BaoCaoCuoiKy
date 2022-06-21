<?php
	include('../config.php');
	$tenkichcosp=$_POST['kichcosp'];
	$tinhtrang=$_POST['tinhtrang'];
	
	if(isset($_POST['them'])){
		//them
		$sql_them=("INSERT into kichcosp (tenkichcosp,tinhtrang) value('$tenkichcosp','$tinhtrang')");
		mysqli_query($mysqli,$sql_them);
		header('location:../../index.php?quanly=kichcosp&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "UPDATE kichcosp set tenkichcosp='$tenkichcosp',tinhtrang='$tinhtrang' where idkichcosp='$_GET[id]'";
		mysqli_query($mysqli,$sql_sua);
		header('location:../../index.php?quanly=kichcosp&ac=lietke');
	}else{
		$sql_xoa = "DELETE from kichcosp where idkichcosp = $_GET[id]";
		mysqli_query($mysqli,$sql_xoa);
		header('location:../../index.php?quanly=kichcosp&ac=lietke');
	}
?>
