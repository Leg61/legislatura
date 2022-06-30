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
	<meta property="og:title" content="Asuntos" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Asuntos</title>
	
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
			<h1>Asuntos</h1>
			<p>Responsable de la información: <a href="http://www.secretariadeasuntosparlamentarios.gob.mx/" target="_blank"><b>Secretaría de Asuntos Parlamentarios</b></a></p>
			
			<? include('menu_asuntos.php'); ?>
			
			<!--
			<div style="width: 100%; margin: auto;">
				<button onclick="location.href='diputados.php'">Alfabético</button>
				<button onclick="location.href='iniciativas'">Iniciativas</button>
				<button onclick="location.href='asistencias'">Asistencias</button>
				<button onclick="location.href='debates'">Diario de debates</button>
				<button onclick="location.href='municipios.php'">Municipios</button>
			</div>			
			-->
			
			<!-- ASUNTOS -->
			<div style="padding: 5px 20px; margin: 25px auto; background: linear-gradient( 40deg, rgb(250,250,250,1.00) 0%, rgb(225,225,225,1.00) 100% ); border-bottom: rgb(128,0,72) solid 5px;">
			<h2>Lo más reciente...</h2>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_iniciativas ORDER BY presentada DESC, categoria ASC, id DESC LIMIT 15";
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
			
			
			<div style="border: rgb(100,100,100) solid 1px; padding: 5px 15px; margin: 10px auto; background:linear-gradient( 50deg, rgb(235,235,235,1.00) 0%, rgb(255,255,255,1.00) 65% );">
				<p style="border-bottom: rgb(135,135,135) dotted 1px;">
				No. <? echo $iniciativa['folio']; ?><br>
				<i class="fas fa-user-circle"></i> Autor: <b><? echo utf8_encode($iniciativa['autor']); ?></b><br>
				<span style="color: black;"><i class="fas fa-scroll"></i> <? echo utf8_encode($iniciativa['iniciativa']); ?></span><br>
				<span style="font-size: 0.9em; color: rgb(128,0,72); text-align: left;"><i class="far fa-calendar-alt"></i> Fecha de presentación: <? echo substr($iniciativa['presentada'],8,2)." de ".$mes_txt.", ".substr($iniciativa['presentada'],0,4) ?></span><br>
				
				<? if ($iniciativa['expedicion'] == '0000-00-00') { ?>
				<? if ($iniciativa['comisiones'] != '') { ?>
				<span style="font-size: 0.7em; font-weight: 300; color: rgb(100,100,100,1.0); text-align: left; line-height: 110%; text-transform: uppercase;">Turnada a:</span><br>
				<span style="font-size: 1.0em; font-weight: 300; color: rgb(0,0,0); text-align: left; line-height: 110%;"><? echo nl2br(utf8_encode($iniciativa['comisiones'])); ?></span><br>
				
				<? if ($iniciativa['documento']) { ?>
					<button onclick="window.open('http://www.legislativoedomex.gob.mx/documentos/asuntos/<? if ($iniciativa['categoria'] == 'Iniciativa') { echo "iniciativas"; } ?><? if ($iniciativa['categoria'] == 'Punto de Acuerdo') { echo "puntosdeacuerdo"; } ?>/<? echo utf8_encode($iniciativa['documento']); ?>')"><i class="far fa-file-pdf"></i> <? if ($iniciativa['categoria'] == 'Iniciativa') { echo "Iniciativa"; } ?><? if ($iniciativa['categoria'] == 'Punto de Acuerdo') { echo "Punto de acuerdo"; } ?></button>
				<? } ?>
				<? if ($iniciativa['decreto']) { ?>
					<button onclick="window.open('http://www.legislativoedomex.gob.mx/documentos/asuntos/decretos/<? echo utf8_encode($iniciativa['decreto']); ?>')"><i class="far fa-file-pdf"></i> Decreto</button>					
				<? } ?>
				<? if ($iniciativa['acuerdo']) { ?>
					<button onclick="window.open('http://www.legislativoedomex.gob.mx/documentos/asuntos/acuerdos/<? echo utf8_encode($iniciativa['acuerdo']); ?>')"><i class="far fa-file-pdf"></i> Acuerdo</button>					
				<? } ?>
				<? } ?>
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
			</div>
			<? } ?>
				
			</div>
			<!-- FIN INICIATIVAS -->
			
		</div>
			
		<? include('boxbanner.php'); ?>
		
	</div>
	<div style="clear: both"></div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>