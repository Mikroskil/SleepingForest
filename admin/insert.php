<?php
session_start();
include 'koneksi.php';

	$q=mysql_query("INSERT into artikel (`id`,`judul`,`konten`,`link`,`tanggal`) values 
	('','".$_POST['judul']."','".$_POST['konten']."','".$_POST['judul']."','".date('Y-m-d')."')") or die(mysql_error());
	
	if($q)
	{
		echo "<script>alert('BERHASIL ditambahkan');window.location.href='index.php'</script>";
	}
