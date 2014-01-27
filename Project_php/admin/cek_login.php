<?php
include "koneksi.php";
$pass = md5($_POST[password]);
$sql = mysql_query("SELECT * FROM user WHERE id_user='$_POST[username]' AND password='$pass'");
$level = mysql_num_rows($sql);
$r = mysql_fetch_array($sql);
if ($level > 0) {
	session_start();
	session_register("namauser");
	session_register("passuser");
	session_register("leveluser");
	$_SESSION[namauser] = $r[id_user];
	$_SESSION[passuser] = $r[password];
	$_SESSION[leveluser] = $r[level];
	header('location:index.php');
} else {
	header('location:../index.php');
}
?>