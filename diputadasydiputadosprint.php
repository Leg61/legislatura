<!doctype html>
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
	<meta property="og:title" content="Diputadas y Diputados" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Diputadas y Diputados</title>
	
	<script src="https://kit.fontawesome.com/e6414ed8fa.js" crossorigin="anonymous"></script>
	<script src="js/jquery-latest.js"></script>
</head>
	
<body>
<div style="text-align: center; width: 100%; max-width: 716px; padding: 0px 50px; margin: auto;">
	
	<img src="img/congreso_edomex.svg" height="150px;" style="margin: auto;">
	<button onclick="window.print()">Imprimir</button>
	<h1 style="border: none; text-align: center;">LX Legislatura del Estado de México</h1>
	<p style="border: none; text-align: center;">Listado por índice alfabético de las diputadas y los diputados integrantes</p>
	
	<div style="width: 470px; margin: auto;">
		
		<?
			include('config/tconnection.php');
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_diputados ORDER BY apaterno ASC, amaterno ASC, nombres ASC";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
		?>
		
		<!-- FOTO -->
		<div style="float: left; margin: 5px;"><img src="img/fotos/dip/<? echo $row['foto']; ?>" width="80px;"></div>
		<!-- FIN FOTO -->
		
		<!-- DATOS -->
		<div style="float: left; font-size: 1em; font-weight: 800; font-family: font-family: 'Arimo', sans-serif; color: rgba(57,57,59,1.00); text-align: left; padding: 2px;">
			<? echo utf8_encode($row['apaterno']); ?> <? echo utf8_encode($row['amaterno']); ?>, <? echo utf8_encode($row['nombres']); ?><br>
			<?
				$con_dtto = new TConeccion();
				$query_dtto  = "SELECT * FROM cdd_distritos WHERE id = ".$row['id_distrito'];
				$con_dtto->Gestion($query_dtto);
				$dtto = mysqli_fetch_array($con_dtto->Query,MYSQLI_ASSOC);
			?>
			<span style="color: rgb(128,0,72); font-size: 0.8em; font-weight: 300;"><? if ($dtto['distrito'] == "plurinom") { echo "Representación Proporcional"; } else { echo "Distrito ".$dtto['distrito']." - ".utf8_encode($dtto['municipio']); }  ?></span><br>
			<?
				$con_partido = new TConeccion();
				$query_partido  = "SELECT * FROM cdd_partidos WHERE id = ".$row['id_partido'];
				$con_partido->Gestion($query_partido);
				$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
			?>
			
			<? if ($row['email']) { ?>
			<span style="color: rgba(95,95,95,1.00); font-size: 0.8em; font-weight: 300;"><? echo utf8_encode($partido['nombre']); if ($partido['siglas'] != '') { echo " (".$partido['siglas'].")"; } ?></span><br>
			<span style="color: rgb(95,95,95); font-size: 0.8em; font-style: italic; font-weight: 300;"><i class="fas fa-envelope-open-text"></i> <? echo $row['email']; ?></span><br>
			<? } ?>
			
			<div style="height: 20px;"></div>
		</div>
		
		<div style="clear: both;"></div>
		<? } ?>
	</div>
</div>		
</body>
</html>