<?php
session_start();
include 'koneksi.php';

	$id = $_POST['id'];

	$q=mysql_query("UPDATE sipratama.artikel SET judul ='".$_POST['judul']."', konten ='".$_POST['konten']."', link = '".$_POST['judul']."', tanggal = '".date('Y-m-d')."' WHERE artikel.id = '".$id."' " ) or die(mysql_error());
	
	 
	
	
	if($q)
	{
		echo "<script>alert('BERHASIL ditambahkan');window.location.href='index.php'</script>";
	}
?>