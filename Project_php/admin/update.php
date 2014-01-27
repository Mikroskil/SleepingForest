<?php

	$cek = $_POST['judul'];
	
	$query = "SELECT * FROM artikel WHERE id = '".$cek."' ";
	$cek = mysql_query($query);
	$data = mysql_fetch_object($cek)
	
?>

    <form action="up.php" method="post">
    
    <input type="hidden" name="id" value="<?=$data->id?>" />
    	
	<h3>judul</h3>
	<input type="text" name="judul" value="<?=$data->judul?>"  />

	<h3>isi</h3>
	<textarea name="konten" id="editor1"><?=$data->konten?></textarea>
	<br/>
	<button type="submit">simpan</button>
	</form>