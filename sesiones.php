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
	
	<title>Sesiones</title>
	
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
			<h1>Sesiones</h1>
			
			<p>Responsable de la información: <a href="http://www.secretariadeasuntosparlamentarios.gob.mx/" target="_blank"><b>Secretaría de Asuntos Parlamentarios</b></a></p>
			
			<? include('menu_asuntos.php'); ?>
			<!--
			<div style="width: 100%; margin: auto;">
				<button onclick="location.href='iniciativas'">Iniciativas</button>
				<button onclick="location.href='asistencias'">Asistencias</button>
				<button onclick="location.href='debates'">Diario de debates</button>
			</div>
			-->

			<h2>Sesiones celebradas durante la LXI Legislatura</h2>
			
			<div style="padding: 5px 20px; margin: 25px auto; background: linear-gradient( 40deg, rgb(250,250,250,1.00) 0%, rgb(225,225,225,1.00) 100% ); border-bottom: rgb(128,0,72) solid 5px;">
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_sesiones ORDER BY date DESC, sesion DESC, id DESC";
			$connect->Gestion($query);
			while($sesion = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)) {
			?>
				<?
				$mes_in = substr($sesion['date'],5,2);
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
				<p>
				<span style="font-size: 0.9em; color: rgb(128,0,72); text-align: left;">Sesión No. <? echo $sesion['sesion']; ?> - <i class="far fa-calendar-alt"></i> <? echo substr($sesion['date'],8,2)." de ".$mes_txt.", ".substr($sesion['date'],0,4) ?></span><br>
				Sesión <? echo utf8_encode($sesion['regimen']); ?> de la <? echo utf8_encode($sesion['asamblea']); ?><br>
				<img src="../favicon.svg" style="height: 18px; margin-bottom: -4px;"> <? echo utf8_encode($sesion['legislatura']); ?> Legislatura - 
				
				<? 
				utf8_encode($sesion['periodo']);
				$periodo		=	strlen($sesion['periodo']);
				$periodo		=	$periodo-2;
				$periodo_txt	=	substr($sesion['periodo'],$periodo,2);
				if ($periodo_txt == '01') { echo "1er."; }
				if ($periodo_txt == '02') { echo "2do."; }
				if ($periodo_txt == '03') { echo "3er."; }
				
				if (strlen($sesion['periodo']) == 11) { echo " periodo ordinario"; }
				if (strlen($sesion['periodo']) == 8) { echo " receso"; }
				if (strlen($sesion['periodo']) == 16) { echo " periodo extraordinario"; }
				
				echo ", ";
				
				if ($sesion['legis_year'] == 1) { echo "1er. año de la Legislatura"; }
				if ($sesion['legis_year'] == 2) { echo "2do. año de la Legislatura"; }
				if ($sesion['legis_year'] == 3) { echo "3er. año de la Legislatura"; }
				?>
				<br>
				<? if ($sesion['orden']) { ?><button onclick="window.open('../documentos/asuntos/ordenesdeldia/<? echo $sesion['orden']; ?>')"><i class="far fa-eye"></i> Orden del día</button> <? } ?>
				<button onclick="location.href='asistencia.php?id=<? echo $sesion['id'] ?>'"><i class="fas fa-users"></i> Asistencia</button>
				</p>
			</div>
			<? } ?>
				
			</div>
			
			<!--<button onclick="location.href='iniciativascompleto'">Listado completo</button>-->
		</div>
		<? include('boxbanner.php'); ?>
		
	</div>
	<div style="clear: both"></div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>