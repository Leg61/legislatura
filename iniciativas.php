<!doctype html>
<? include('config/tconnection.php'); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="" />
	<meta property="og:image:height" content="" />
	<meta property="og:title" content="Iniciativas" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Iniciativas</title>
	
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
	<? include('headernew.php'); ?>
	
	<div id="contenido">
		<div id="contenido_left">
		<!--<div style="width: 100%; max-width: 688px; margin: 0px 20px; float: left; text-align: justify;">-->
			<h1>Iniciativas</h1>
			
			<p>Responsable de la información: <a href="http://www.secretariadeasuntosparlamentarios.gob.mx/" target="_blank"><b>Secretaría de Asuntos Parlamentarios</b></a></p>
			
			<? include('menu_asuntos.php'); ?>
			<!--
			<div style="width: 100%; margin: auto;">
				<button onclick="location.href='iniciativas'">Iniciativas</button>
				<button onclick="location.href='asistencias'">Asistencias</button>
				<button onclick="location.href='debates'">Diario de debates</button>
			</div>
			-->

			<h2>Iniciativas presentadas durante la LXI Legislatura</h2>
			
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_iniciativas WHERE categoria = 'Iniciativa' ORDER BY presentada DESC";
			$connect->Gestion($query);
			while($iniciativa = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)) {
			?>
				<?
				$mes_in = substr($iniciativa['presentada'],5,2);
				switch ($mes_in) {
					case "01":
						$mes_txt = "enero";
						break;
					case "02":
						$mes_txt = "febrero";
						break;
					case "03":
						$mes_txt = "marzo";
						break;
					case "04":
						$mes_txt = "abril";
						break;
					case "05":
						$mes_txt = "mayo";
						break;
					case "06":
						$mes_txt = "junio";
						break;
					case "07":
						$mes_txt = "julio";
						break;
					case "08":
						$mes_txt = "agosto";
						break;
					case "09":
						$mes_txt = "septiembre";
						break;
					case "10":
						$mes_txt = "octubre";
						break;
					case "11":
						$mes_txt = "noviembre";
						break;
					case "12":
						$mes_txt = "diciembre";
						break;
				}
				?>
			
			<p style="border-bottom: rgb(135,135,135) dotted 1px;">
				<i class="fas fa-user-circle"></i> <b><? echo utf8_encode($iniciativa['autor']); ?></b><br>
				<span style="color: black;"><i class="fas fa-scroll"></i> <? echo utf8_encode($iniciativa['iniciativa']); ?></span><br>
				<span style="font-size: 0.9em; color: rgb(128,0,72); text-align: left;"><i class="far fa-calendar-alt"></i> Fecha de presentación: <? echo substr($iniciativa['presentada'],8,2)." de ".$mes_txt.", ".substr($iniciativa['presentada'],0,4) ?></span><br>
				
				<? if ($iniciativa['expedicion'] == '0000-00-00') { ?>
				<span style="font-size: 0.9em; font-weight: bolder; color: rgb(128,0,72); text-align: left;">Turnada a <? echo utf8_encode($iniciativa['comisiones']); ?></span><br>
				<? } else { ?>
					
					<?
					$mes_in = substr($iniciativa['expedicion'],5,2);
					switch ($mes_in) {
						case "01":
							$mes_txt = "enero";
							break;
						case "02":
							$mes_txt = "febrero";
							break;
						case "03":
							$mes_txt = "marzo";
							break;
						case "04":
							$mes_txt = "abril";
							break;
						case "05":
							$mes_txt = "mayo";
							break;
						case "06":
							$mes_txt = "junio";
							break;
						case "07":
							$mes_txt = "julio";
							break;
						case "08":
							$mes_txt = "agosto";
							break;
						case "09":
							$mes_txt = "septiembre";
							break;
						case "10":
							$mes_txt = "octubre";
							break;
						case "11":
							$mes_txt = "noviembre";
							break;
						case "12":
							$mes_txt = "diciembre";
							break;
					}
					?>
					
				<span style="font-size: 0.9em; font-weight: bolder; color: <? if ($iniciativa['status'] == 'Aprobada') { echo "rgb(0,120,0)"; } else { echo "rgb(35,35,35)"; } ?>; text-align: left;"><? if ($iniciativa['status'] == 'Aprobada') { echo "<i class='fas fa-check-circle'></i> "; } ?><? echo $iniciativa['status'] ." el ".substr($iniciativa['expedicion'],8,2)." de ".$mes_txt." de ".substr($iniciativa['expedicion'],0,4) ?></span>
				<? } ?>
				
			</p>
			<? } ?>
			
			<!--<button onclick="location.href='iniciativascompleto'">Listado completo</button>-->
		</div>
		<? include('boxbanner.php'); ?>
		
	</div>
	<div style="clear: both"></div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>