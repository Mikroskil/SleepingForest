<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Komentar</title>
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
							<a href="followed.html">Menu</a>
							<ul>
                				<li>
									<a href="followed.html">Pertolongan Pertama kecelakaan</a>
								</li>
                    			<li>
									<a href="followed.html">Pertolongan Pertama Bencana</a>
								</li>
								<li>
                        			<a href="followed.html">Tips dan Saran</a>
                        		</li>
                        		<li>
                        			<a href="#">Contact Us</a>
                        		</li>
							</ul>
						</li>
						<li><a href="download.html">Unduh</a></li>
            			<li><a href="pelacakan.html">Pelacakan</a></li>
                		<li><a href="Komentar.php" class="last">Komentar</a></li>
					</ul>
            	</div> <!-- tutup menu -->
        	</div><!-- tutup header -->
        
        	<div id="middle">
         	 	<div id="mid_left">
               	 	<div id="mid_title">Pertolongan Pertama</div>
                	<p>Tidak ada seorang pun yang dapat memperkirakan kapan kecelakaan atau serangan sakit mendadak akan terjadi.</p>
                	<a rel="nofollow" href="" class="viewall"></a>
          		</div>
        		<img src="images/first.png" />
        	</div> <!-- tutup middle -->
		</div>
	</div>
    
    <div class="rata" align="justify">
    	<div id="sipratama_main">
        	<div class="cbox_fw">
            	<div class="cbox_large float_l">
            		<h2>KOMENTAR ANDA</h2>
                	<p>Jika anda mempunyai keluhan ataupun kritik dan saran ataupun ingin menambahkan dan mengoreksi postingan kami silahkan berkomentar di tempat yang kami sediakan ini</p>
                    <div id="contact_form">
                    	<form method="post" name="contact" action="#">
                        	<label for="user">Nama:</label>
                            <input type="text" id="user" name="user" class="required input_field" />
                            <div class="cleaner h10" ></div>
                            <label for="email">E-mail</label>
                            <input type="text" id="email" class="required input_field" />
                            <div class="cleaner h20"></div>
                            <label for="text">Komentar</label>
                            <textarea rows="0" cols="0"></textarea>
                            <input type="submit" value="Kirim" class="submit_btn float_l" />
                            <input type="reset" value="Reset" class="submit_btn float_r" />
                        </form>
                    </div>
                    	<div class="cleaner h20"></div>
                </div><!-- tutup cbox_large -->
            </div><!-- tutup cbox_fw -->
            	<div class="cbox_small float_r">
            	<h2>Recent Post</h2>
                	<div class="rp_box">
                    	<img src="images/baby.png" /><p>Mana yang lebih berat? Diare pada anak-anak atau diare pada bayi?</p>
                        <a href="#" class="more float_r"><span>&gt;&gt;</span> Read More</a>
                        <div class="cleaner"></div>
                    </div>
                    <div class="rp_box">
                    	<img src="images/lukagores.png" /><p>Pertolongan Pertama Luka Gores</p>
                        <a href="#" class="more float_r"><span>&gt;&gt;</span> Read More</a>
                    	<div class="cleaner"></div>
                    </div>
                    <div class="rp_box">
                    	<img src="images/Obesity.png" /><p>Lebih Jauh tentang Obesitas</p>
                        <a href="#" class="more float_r"><span>&gt;&gt;</span> Read More</a>
                        <div class="cleaner"></div>
                    </div>
            	</div>
        </div><!-- tutup sipratama_main -->
    </div><!-- tutup rata -->
</body>
</html>
