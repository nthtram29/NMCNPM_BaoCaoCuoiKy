<?php
	include('../config.php');
	$tenhieusp=$_POST['hieusp'];
	$tinhtrang=$_POST['tinhtrang'];
	
	if(isset($_POST['them'])){
		//them
		$sql_them=("INSERT into hieusp (tenhieusp,tinhtrang) value('$tenhieusp','$tinhtrang')");
		mysqli_query($mysqli,$sql_them);
		header('location:../../index.php?quanly=hieusp&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "UPDATE hieusp set tenhieusp='$tenhieusp',tinhtrang='$tinhtrang' where idhieusp='$_GET[id]'";
		mysqli_query($mysqli,$sql_sua);
		header('location:../../index.php?quanly=hieusp&ac=lietke');
	}else{
		$sql_xoa = "DELETE from hieusp where idhieusp = $_GET[id]";
		mysqli_query($mysqli,$sql_xoa);
		header('location:../../index.php?quanly=hieusp&ac=lietke');
	}
?>
