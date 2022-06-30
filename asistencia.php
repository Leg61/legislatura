<!doctype html>
<? include('config/tconnection.php'); ?>
			<?
			$connection = new TConeccion();
			$consulta  = "SELECT * FROM cdd_sesiones WHERE id = ".$_GET['id']."";
			$connection->Gestion($consulta);
			$sesion = mysqli_fetch_array($connection->Query,MYSQLI_ASSOC);
			
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
	<meta property="og:title" content="Asistencia a la sesión No. <? echo $sesion['sesion']; ?><br><? echo substr($sesion['date'],8,2)." de ".$mes_txt.", ".substr($sesion['date'],0,4) ?>" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Asistencia a la sesión No. <? echo $sesion['sesion']; ?><br><? echo substr($sesion['date'],8,2)." de ".$mes_txt.", ".substr($sesion['date'],0,4) ?></title>
	
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
			<h1>Asistencia a la sesión No. <? echo $sesion['sesion']; ?><br><? echo substr($sesion['date'],8,2)." de ".$mes_txt.", ".substr($sesion['date'],0,4) ?></h1>
			<h2>Sesión <? echo utf8_encode($sesion['regimen']); ?> de la <? echo utf8_encode($sesion['asamblea']); ?></h2>
			
			<p>Responsable de la información: <a href="http://www.secretariadeasuntosparlamentarios.gob.mx/" target="_blank"><b>Secretaría de Asuntos Parlamentarios</b></a></p>
			
			<? include('menu_asuntos.php'); ?>
			
			<table>
				<thead>
					<tr>
						<th>No.</th>
						<th>Diputada/o</th>
						<th>Partido</th>
						<th>Sentido</th>
					</tr>
				</thead>
				<tbody>
					<?
					$consecutivo = 0;
					$con_asistencia = new TConeccion();
					$query_asistencia  = "SELECT * FROM cdd_asistencias WHERE id_sesion = ".$_GET['id']." AND asistencia != 3 ORDER BY id ASC";
					$con_asistencia->Gestion($query_asistencia);
					while($asistencia = mysqli_fetch_array($con_asistencia->Query,MYSQLI_ASSOC)) {
						$consecutivo++;
					?>
					
					<tr>
						<td><? echo $consecutivo; ?></td>
						<td style="text-align: left;">
							<?
							$con_dipu = new TConeccion();
							$query_dipu  = "SELECT * FROM cdd_diputados_lxi WHERE id = ".$asistencia['id_diputado']."";
							$con_dipu->Gestion($query_dipu);
							$dipus = mysqli_fetch_array($con_dipu->Query,MYSQLI_ASSOC);
							?>
							
							<? echo utf8_encode($dipus['apaterno']); ?> <? echo utf8_encode($dipus['amaterno']); ?> <? echo utf8_encode($dipus['nombres']); ?>
							
							<input type="hidden" name="id_diputado<? echo $consecutivo; ?>" id="id_diputado<? echo $consecutivo; ?>" value="<? echo ($dipus['id']); ?>">
						</td>
						<td>
							<input type="hidden" name="id_partido<? echo $consecutivo; ?>" id="id_partido<? echo $consecutivo; ?>" value="<? echo ($dipus['id_partido']); ?>">
							<?
							$con_partido = new TConeccion();
							$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$dipus['id_partido'];
							$con_partido->Gestion($query_partido);
							$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
							?>
							
							<img src="../img/partidos/<? echo $partido['emblema']; ?>" height="30">
						</td>
						<td>
							<? if ($asistencia['asistencia'] == 1) { echo "Asistencia"; } ?>
							<? if ($asistencia['asistencia'] == 2) { echo "Inasistencia justificada"; } ?>
						</td>
					</tr>
					<? } ?>
				
				</tbody>
			</table>


		</div>
		<? include('boxbanner.php'); ?>
		
	</div>
	<div style="clear: both"></div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>