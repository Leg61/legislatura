<!doctype html>
<? include('config/tconnection.php'); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="keywords" content="">
	<meta name="description" content="Conoce a las/os Diputadas/os que integran la LX Legislatura del Estado de México.">
	<meta property="og:description" content="Conoce a las/os Diputadas/os que integran la LX Legislatura del Estado de México." />
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="" />
	<meta property="og:image:height" content="" />
	<meta property="og:title" content="Distritos" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Distritos</title>
	
	<script src="https://kit.fontawesome.com/e6414ed8fa.js" crossorigin="anonymous"></script>
	<script src="js/jquery-latest.js"></script>
	<script type="text/javascript">
		$(document).on("scroll",function(){
			if($(document).scrollTop()>50){
				$("header").removeClass("large").addClass("small");
			} else{
				$("header").removeClass("small").addClass("large");
			}
		});
	</script>
	
	<? include('gtag.php'); ?>
	
</head>

<body>
<div align="center">	
	<? include('header.php'); ?>
	
	<div id="contenido">
		<div id="contenido_left">
			<h1>Diputadas/os por Distritos</h1>
			<? include('menu_diputados.php'); ?>
			
			<div style="clear: both; height: 25px;"></div>
			<?
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_diputados_lxi WHERE status = 'activo' AND id_distrito != 1 ORDER BY id_distrito ASC";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			
			<div style="font-family: 'Arimo', sans-serif;font-weight: 300;">
				
				<?
				$con_partido = new TConeccion();
				$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$row['id_partido'];
				$con_partido->Gestion($query_partido);
				$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
				?>
				
				<!-- FOTO -->
				<div style="text-align: center; width: 160px; float: left;">
					<div style="background: linear-gradient( 90deg, rgb(<? echo $partido['rgb']; ?>,1.00) 0%, rgb(<? echo $partido['rgb2']; ?>,1.00) 100% ); height: 150px; width: 150px; border-radius: 50%; padding: 5px; float: left;">
						<div style="background: rgba(255,255,255); border-radius: 50%; height: 150px; width: 150px;">
							<div style="background: url(img/fotos/dip/lxi/<? echo $row['foto']; ?>) no-repeat; background-size: 150px; width: 150px; height: 150px; float: left; border-radius:50%;"></div>
							<div style="clear: both;"></div>
						</div>
					</div>
					<div style="clear: both;"></div>
					<img src="img/partidos/<? echo $partido['emblema']; ?>" style="height: 45px; margin: 5px auto;">
				</div>
				<!-- FIN FOTO -->
				
				<!-- DATOS -->
				<div style="float: left; font-size: 1.2em; font-weight: 800; font-family: font-family: 'Arimo', sans-serif; color: rgba(57,57,59,1.00); text-align: left; padding: 2px; margin: 35px 25px;">
					<? echo utf8_encode($row['apaterno']); ?> <? echo utf8_encode($row['amaterno']); ?>, <? echo utf8_encode($row['nombres']); ?><br>
					<?
					$con_dtto = new TConeccion();
					$query_dtto  = "SELECT * FROM cdd_distritos WHERE id = ".$row['id_distrito'];
					$con_dtto->Gestion($query_dtto);
					$dtto = mysqli_fetch_array($con_dtto->Query,MYSQLI_ASSOC);
					?>
					
					<span style="color: rgb(150,0,72); font-size: 0.8em; font-weight: 300;"><? if ($dtto['distrito'] == "plurinom") { echo "Representación Proporcional"; } else { echo "Distrito ".$dtto['distrito']." - ".utf8_encode($dtto['municipio']); }  ?></span><br>
					<?
					$con_partido = new TConeccion();
					$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$row['id_partido'];
					$con_partido->Gestion($query_partido);
					$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
					?>

					<span style="color: rgb(137,138,141); font-size: 0.8em; font-weight: 300;"><? echo utf8_encode($partido['nombre']); if ($partido['siglas'] != '') { echo " (".$partido['siglas'].")"; } ?></span><br>
					<span style="color: rgb(137,138,141); font-size: 0.8em; font-style: italic; font-weight: 300;"><i class="fas fa-envelope-open-text"></i> <? echo $row['email']; ?></span><br>
					
					<!-- FACEBOOK -->
					<? if ($row['facebook']) { ?>
					<a href="http://facebook.com/<? echo $row['facebook']; ?>" target="_blank" style="text-decoration: none; color: rgba(150,0,72,1.00); font-size: 0.8em; font-weight: 300;"><i class="fab fa-facebook"></i> /<? echo $row['facebook'] ?></a><br>
					<? } ?>

					<!-- TWITTER -->
					<? if ($row['twitter']) { ?>
					<a href="http://twitter.com/<? echo $row['twitter']; ?>" target="_blank" style="text-decoration: none; color: rgba(150,0,72,1.00); font-size: 0.8em; font-weight: 300;"><i class="fab fa-twitter"></i> @<? echo $row['twitter'] ?></a><br>
					<? } ?>
				
					<!-- INSTAGRA, -->
					<? if ($row['instagram']) { ?>
					<a href="http://instagram.com/<? echo $row['instagram']; ?>" target="_blank" style="text-decoration: none; color: rgba(150,0,72,1.00); font-size: 0.8em; font-weight: 300;"><i class="fab fa-instagram"></i> @<? echo $row['instagram'] ?></a><br>
					<? } ?>
					
					<!--<button onclick="location.href='ficha-<? echo $row['id']; ?>'" style="font-size: 0.6em;">Ver ficha</button>-->
					
					<div style="height: 20px;"></div>
				</div>
				<div style="clear: both; height: 20px;"></div>
				<!-- FIN DATOS -->
			</div>
			<? } ?>
		</div>
		
		<? include('boxbanner.php'); ?>
		
	</div>
	<div style="clear: both"></div>
	
	<? include('footer.php'); ?>
	
</div>
</body>
</html>