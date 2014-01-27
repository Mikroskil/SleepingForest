<?php
session_start();
if (empty($_SESSION['nameuser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses halaman ini, Anda harus login terlebih dahulu<br>";
	echo "<a href=login.php><b>Halaman Login</b></a></center>";
} else {
	include "koneksi.php";
	if ($_SESSION['leveluser'] == 'admin') {
		$sql = mysql_query("SELECT * FROM user WHERE level='admin'");
		$level = mysql_num_rows($sql);
		$r = mysql_fetch_array($sql);
?>	

<html>
	<head>
    	<title>Administrator</title>
	    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
		
		<link href="style.css" rel="stylesheet" type="text/css" />
        
	</head>
	
	<body> 
		<div class="container" >
		<header class="header">
        	<h4>Administrator</h4>
        </header>
		<section class="konten">
        
        	<div class="kiri">
            <ul>
            	
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="?page=post">Buat Post</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            </div>
            
            <div class="kanan">
            	
            	<?php
					if(!isset($_GET['page'])){
						include "datapost.php";
					}else{
						include $_GET['page'] .".php";
					}
            	?>
            </div>
        	
			
			<div style="clear: both"></div>	
		</section>
		
		</div>
	</body>
    <script type="text/javascript">


if ( typeof CKEDITOR == 'undefined' )
{
	document.write(
		'CKEditor not found');
}
else
{
	var editor = CKEDITOR.replace( 'editor1' );	

	
	CKFinder.setupCKEditor( editor, '' ) ;

	
}
</script>
</html>

	
<?php		
		#include "update.php";
		
	}
}
?>

