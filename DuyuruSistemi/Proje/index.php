<?php

include('veritabani_baglantisi.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
	<div class="body">
	
		<div class="top">
			<div class="baslik" style="font-size:<?php $veri=$db->query("SELECT yazi_boyutu FROM yazilar where yazi_id=1");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT yazi_tipi FROM yazilar where yazi_id=1");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_tipi"]; ?>;"><marquee SCROLLDELAY=150><?php 
					$veri=$db->query("SELECT yazi FROM yazilar where yazi_id=1");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi"];
				?></marquee></div>
			<div class="air"><img src="http://www.mgm.gov.tr/sunum/sondurum-klasik-5070.aspx?m=TRABZON&rC=111&rZ=fff" style="width:100px; height:50px; float:right;" alt="TRABZON" /></div>
   		</div>
		
		<div class="medium">
		
			<div class="medium_left">	
				<div class="duyuru_baslik" style="font-size:<?php $veri=$db->query("SELECT baslik_yazi_boyutu FROM duyurular where duyuru_id=1");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT baslik_yazi_tipi FROM duyurular where duyuru_id=1");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_tipi"]; ?>"><?php 
					$veri=$db->query("SELECT duyuru_baslik FROM duyurular where duyuru_id=1");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru_baslik"];
				?>			
			    </div>			
				<div class="information" style="font-size:<?php $veri=$db->query("SELECT yazi_boyutu FROM duyurular where duyuru_id=1");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT yazi_tipi FROM duyurular where duyuru_id=1");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_tipi"]; ?>"><marquee  scrollamount="1" height="100" width="100%" direction="up"><?php 
					$veri=$db->query("SELECT duyuru FROM duyurular where duyuru_id=1");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru"];
				?></marquee>
			    </div>
				<div class="duyuru_baslik" style="font-size:<?php $veri=$db->query("SELECT baslik_yazi_boyutu FROM duyurular where duyuru_id=2");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT baslik_yazi_tipi FROM duyurular where duyuru_id=2");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_tipi"]; ?>"><?php 
					$veri=$db->query("SELECT duyuru_baslik FROM duyurular where duyuru_id=2");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru_baslik"];
				?>		
			    </div>			
				<div class="information" style="font-size:<?php $veri=$db->query("SELECT yazi_boyutu FROM duyurular where duyuru_id=2");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT yazi_tipi FROM duyurular where duyuru_id=2");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_tipi"]; ?>" ><marquee  scrollamount="1" height="100" width="100%" direction="up"><?php 
					$veri=$db->query("SELECT duyuru FROM duyurular where duyuru_id=2");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru"];
				?></marquee>
			    </div>
				<div class="duyuru_baslik" style="font-size:<?php $veri=$db->query("SELECT baslik_yazi_boyutu FROM duyurular where duyuru_id=3");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT baslik_yazi_tipi FROM duyurular where duyuru_id=3");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_tipi"]; ?>"><?php 
					$veri=$db->query("SELECT duyuru_baslik FROM duyurular where duyuru_id=3");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru_baslik"];
				?>			
			    </div>			
				<div class="information" style="font-size:<?php $veri=$db->query("SELECT yazi_boyutu FROM duyurular where duyuru_id=3");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT yazi_tipi FROM duyurular where duyuru_id=3");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_tipi"]; ?>"><marquee  scrollamount="1" height="100" width="100%" direction="up"><?php 
					$veri=$db->query("SELECT duyuru FROM duyurular where duyuru_id=3");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru"];
				?></marquee>
			    </div>
			</div>
			
			<div class="medium_medium">
				<div class="slide">
					<img name="slide" width="500" height="300">
				</div> 
			</div>

			<div class="medium_right">	
				<div class="duyuru_baslik" style="font-size:<?php $veri=$db->query("SELECT baslik_yazi_boyutu FROM duyurular where duyuru_id=4");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT baslik_yazi_tipi FROM duyurular where duyuru_id=4");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_tipi"]; ?>"><?php 
					$veri=$db->query("SELECT duyuru_baslik FROM duyurular where duyuru_id=4");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru_baslik"];
				?>			
			    </div>			
				<div class="information" style="font-size:<?php $veri=$db->query("SELECT yazi_boyutu FROM duyurular where duyuru_id=4");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT yazi_tipi FROM duyurular where duyuru_id=4");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_tipi"]; ?>"><marquee  scrollamount="1" height="100" width="100%" direction="up"><?php 
					$veri=$db->query("SELECT duyuru FROM duyurular where duyuru_id=4");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru"];
				?></marquee>
			    </div>
				<div class="duyuru_baslik" style="font-size:<?php $veri=$db->query("SELECT baslik_yazi_boyutu FROM duyurular where duyuru_id=5");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT baslik_yazi_tipi FROM duyurular where duyuru_id=5");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_tipi"]; ?>"><?php 
					$veri=$db->query("SELECT duyuru_baslik FROM duyurular where duyuru_id=5");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru_baslik"];
				?>			
			    </div>			
				<div class="information" style="font-size:<?php $veri=$db->query("SELECT yazi_boyutu FROM duyurular where duyuru_id=5");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT yazi_tipi FROM duyurular where duyuru_id=5");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_tipi"]; ?>"><marquee  scrollamount="1" height="100" width="100%" direction="up"><?php 
					$veri=$db->query("SELECT duyuru FROM duyurular where duyuru_id=5");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru"];
				?></marquee>
			    </div>
				<div class="duyuru_baslik" style="font-size:<?php $veri=$db->query("SELECT baslik_yazi_boyutu FROM duyurular where duyuru_id=6");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT baslik_yazi_tipi FROM duyurular where duyuru_id=6");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["baslik_yazi_tipi"]; ?>"><?php 
					$veri=$db->query("SELECT duyuru_baslik FROM duyurular where duyuru_id=6");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru_baslik"];
				?>			
			    </div>			
				<div class="information" style="font-size:<?php $veri=$db->query("SELECT yazi_boyutu FROM duyurular where duyuru_id=6");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT yazi_tipi FROM duyurular where duyuru_id=6");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_tipi"]; ?>"><marquee  scrollamount="1" height="100" width="100%" direction="up"><?php 
					$veri=$db->query("SELECT duyuru FROM duyurular where duyuru_id=6");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["duyuru"];
				?></marquee>
			    </div>
			</div>
				
		</div>
		
		<div class="bottom">
			<div style="font-size:<?php $veri=$db->query("SELECT yazi_boyutu FROM yazilar where yazi_id=2");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_boyutu"]; ?>; font-family:<?php $veri=$db->query("SELECT yazi_tipi FROM yazilar where yazi_id=2");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi_tipi"]; ?>;"><marquee SCROLLDELAY=150><?php 
					$veri=$db->query("SELECT yazi FROM yazilar where yazi_id=2");
					$cikti = $veri->fetch(PDO::FETCH_ASSOC);
					echo $cikti["yazi"];
				?></marquee></div>
		</div>
	
	</div>
	<script src="javascript.js"></script>
</body>
</html>