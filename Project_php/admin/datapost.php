<h2>Data Artikel</h2>

<table border="1" rules="all" style="width: 90%">
	<tr>
		<th>ID</th>
		<th>Judul</th>
		<th>Link</th>
		<th>Tanggal</th>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
	</tr>
	
	<?php
	
		$query = "SELECT * FROM artikel";
		$cek = mysql_query($query);
		while ($data = mysql_fetch_object($cek)) {?>
			
			<tr>
				<td><?=$data->id?></td>
				<td><?=$data->judul?></td>
				<td>http://localhost/login/view.php?data=<?=$data->link?></td>
				<td><?=date('d-M-Y',strtotime($data->tanggal))?></td>
				<td>
					<form method="post" action="index.php?page=update">
						<input type="hidden" name="judul" value="<?=$data->id?>" />
						<button type="submit">Update</button>
					</form>
					
					
				</td>
				<td>
					<a target="_blank" href="http://localhost/login/view.php?data=<?=$data->link?>">Lihat</a>
				</td>
			</tr>
			
	<?php }?>
	
	
</table>