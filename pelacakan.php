<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pelacakan</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="superfish/src/css/superfish.css" media="screen">
	<script src="superfish/src/js/jquery.js"></script>
	<script src="superfish/src/js/hoverIntent.js"></script>
	<script src="superfish/src/js/superfish.js"></script>
	<script>

		

			$(document).ready(function(){

				// initialise plugin
				$('.nav').superfish();
					//add options here if required
				
			});




		</script>
</head>

<body>
	<div id="body_wrapper">
	<div id="wrapper">
		<div id="header">
            <div id="site_title"><h1><a href="" rel="nofollow">-</a></h1></div>
            <div id="menu">
            <ul class="sf-menu nav" id="example">
				<li class="current"><a href="index.php">Beranda</a></li>
				<li>
					<a href="#">Menu</a>
					<ul>
                		<li>
							<a href="menukecelakaan.php">Pertolongan Pertama kecelakaan</a>
						</li>
                    	<li>
							<a href="followed.html">Pertolongan Pertama Bencana</a>
						</li>
						<li>
                        	<a href="followed.html">Tips dan Saran</a>
                        </li>
					</ul>
				</li>
				<li><a href="download.html">Unduh</a></li>
            	<li><a href="pelacakan.html">Pelacakan</a></li>
                <li><a href="Komentar.php" class="last">About Us</a>
                	<ul>
                        <li><a href="#">Biodata</a></li>
                        <li><a href="theteam.php">The Team</a></li>
                    </ul>
                </li>
			</ul>
            </div> <!-- end of menu -->
        </div><!-- end of header -->
        
        <div id="middle">
          <div id="mid_left">
                <div id="mid_title">Pertolongan Pertama</div>
                <p>Tidak ada seorang pun yang dapat memperkirakan kapan kecelakaan atau serangan sakit mendadak akan terjadi.</p>
                <a rel="nofollow" href="" class="viewall"></a>
            </div>
        <img src="images/first.png" />
        </div> <!-- tutup middle -->

    </div><!-- tutup wrapper -->
</div><!-- tutup body wrapper -->

	<div class="rata" align="justify">
    <div id="sipratama_main">
    	<div class="cbox_fw">
        	<div class="cbox_large float_l">
            	<br /><br />
                
              <section >
Click the allow button to let the browser find your location.

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<button onClick="getlocation()">Temukan lokasi anda</button>

    <article>
	
    </article>
<script>
function getlocation(){
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success);
} else {
  error('Geo Location is not supported');
}
}
function success(position) {
  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcontainer';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '600px';

  document.querySelector('article').appendChild(mapcanvas);

  var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  
  var options = {
    zoom: 15,
    center: coords,
    mapTypeControl: false,
    navigationControlOptions: {
    	style: google.maps.NavigationControlStyle.SMALL
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("mapcontainer"), options);

  var marker = new google.maps.Marker({
      position: coords,
      map: map,
      title:"You are here!"
  });
}



</script>
</section>           



            	
	
            </div>
        </div>
        	<div class="cbox_small float_r">
            	<h2>Recent Post</h2>
                	<div class="rp_box">
                    	<img src="images/baby.png" /><p>Mana yang lebih berat? Diare pada anak-anak atau diare pada bayi?</p>
                        <a href="diareanak.php" class="more float_r"><span>&gt;&gt;</span> Read More</a>
                        <div class="cleaner"></div>
                    </div>
                    <div class="rp_box">
                    	<img src="images/lukagores.png" /><p>Pertolongan Pertama Luka Gores</p>
                        <a href="luka_iris.php" class="more float_r"><span>&gt;&gt;</span> Read More</a>
                    	<div class="cleaner"></div>
                    </div>
                    <div class="rp_box">
                    	<img src="images/Obesity.png" /><p>Lebih Jauh tentang Obesitas</p>
                        <a href="obesitas.php" class="more float_r"><span>&gt;&gt;</span> Read More</a>
                        <div class="cleaner"></div>
                    </div>
            	</div>
     </div>
    </div>
</body>
</html>