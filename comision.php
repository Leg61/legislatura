<!doctype html>
<? 
include('config/tconnection.php');
$Coneccion = new TConeccion();
$query  = "SELECT * FROM cdd_comisiones WHERE id = ".$_GET['id'];
$Coneccion->Gestion($query);
$comision = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
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
	<meta property="og:title" content="<? echo utf8_encode($comision['nombre']); ?>" />
	<link rel="icon" type="image/png" href="favicon.png">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title><? echo utf8_encode($comision['nombre']); ?></title>
	
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
			<h1><? echo utf8_encode($comision['nombre']); ?></h1>
			<div style="clear: both; height: 25px;"></div>
			
			<!-- PRESIDENTES -->
			<?
			$con_integrantes = new TConeccion();
			$query_integrantes  = "SELECT * FROM cdd_integrantes_lxi WHERE id_comision = ".$_GET['id']." AND cargo = 'Presidenta' OR id_comision = ".$_GET['id']." AND cargo = 'Presidente'";
			$con_integrantes->Gestion($query_integrantes);
			$integrante = mysqli_fetch_array($con_integrantes->Query,MYSQLI_ASSOC);
			?>
			
			<? if ($integrante['id_diputado'] == '' ) { ?>
			<p>Las y los integrantes de los órganos directivos, comisiones y comités serán actualizadas/os de acuerdo a la integración de las mismas en la LXI Legislatura.</p>
			<? } ?>
			
			<?
			$con_diputado = new TConeccion();
			$query_diputado  = "SELECT * FROM cdd_diputados_lxi WHERE id = ".$integrante['id_diputado'];
			$con_diputado->Gestion($query_diputado);
			$diputado = mysqli_fetch_array($con_diputado->Query,MYSQLI_ASSOC);
			?>
			
			<div style="font-family: 'Arimo', sans-serif;font-weight: 300;">
				
				<?
				$con_partido = new TConeccion();
				$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
				$con_partido->Gestion($query_partido);
				$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
				?>				
				
				<!-- FOTO -->
				<div style="text-align: center; width: 160px; float: left;">
					<div style="background: linear-gradient( 90deg, rgb(<? echo $partido['rgb']; ?>,1.00) 0%, rgb(<? echo $partido['rgb2']; ?>,1.00) 100% ); height: 150px; width: 150px; border-radius: 50%; padding: 5px; float: left;">
						<div style="background: rgba(255,255,255); border-radius: 50%; height: 150px; width: 150px;">
							<div style="background: url(img/fotos/dip/lxi/<? echo $diputado['foto']; ?>) no-repeat; background-size: 150px; width: 150px; height: 150px; float: left; border-radius:50%;"></div>
							<div style="clear: both;"></div>
						</div>
					</div>
					<div style="clear: both;"></div>
					<img src="img/partidos/<? echo $partido['emblema']; ?>" style="height: 45px; margin: 5px auto;">
				</div>
				<!-- FIN FOTO -->
				
				<!-- DATOS -->
				<div style="float: left; font-size: 1.2em; font-weight: 800; font-family: color: rgba(57,57,59,1.00); text-align: left; padding: 2px; margin: 35px 25px;">
					<? echo utf8_encode($diputado['nombres']); ?> <? echo utf8_encode($diputado['apaterno']); ?> <? echo utf8_encode($diputado['amaterno']); ?><br>
					<?
					$con_partido = new TConeccion();
					$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
					$con_partido->Gestion($query_partido);
					$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
					?>
					
					<span style="color: rgb(100,100,100); font-size: 0.8em; font-weight: 300;"><? if ($diputado['gender'] == "F") { echo "Presidenta"; } ?><? if ($diputado['gender'] == "M") { echo "Presidente"; } ?></span><br>
					<span style="color: rgb(137,138,141); font-size: 0.8em; font-weight: 300;"><? echo utf8_encode($partido['nombre']); if ($partido['siglas'] != '') { echo " (".$partido['siglas'].")"; } ?></span>
					
				</div>
				<div style="clear: both; height: 20px;"></div>
				<!-- FIN DATOS -->
			</div>
			
			<!-- VICEPRESIDENTES -->
			<?
			$con_integrantes = new TConeccion();
			$query_integrantes  = "SELECT * FROM cdd_integrantes_lxi WHERE id_comision = ".$_GET['id']." AND cargo LIKE '%Vicepresident%' ORDER BY id ASC";
			$con_integrantes->Gestion($query_integrantes);
			while($integrante = mysqli_fetch_array($con_integrantes->Query,MYSQLI_ASSOC)){
			?>
			
			<?
			$con_diputado = new TConeccion();
			$query_diputado  = "SELECT * FROM cdd_diputados_lxi WHERE id = ".$integrante['id_diputado'];
			$con_diputado->Gestion($query_diputado);
			$diputado = mysqli_fetch_array($con_diputado->Query,MYSQLI_ASSOC);
			?>
			
			<div style="font-family: 'Arimo', sans-serif;font-weight: 300;">
				
				<?
				$con_partido = new TConeccion();
				$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
				$con_partido->Gestion($query_partido);
				$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
				?>				
				
				<!-- FOTO -->
				<div style="text-align: center; width: 160px; float: left;">
					<div style="background: linear-gradient( 90deg, rgb(<? echo $partido['rgb']; ?>,1.00) 0%, rgb(<? echo $partido['rgb2']; ?>,1.00) 100% ); height: 150px; width: 150px; border-radius: 50%; padding: 5px; float: left;">
						<div style="background: rgba(255,255,255); border-radius: 50%; height: 150px; width: 150px;">
							<div style="background: url(img/fotos/dip/lxi/<? echo $diputado['foto']; ?>) no-repeat; background-size: 150px; width: 150px; height: 150px; float: left; border-radius:50%;"></div>
							<div style="clear: both;"></div>
						</div>
					</div>
					<div style="clear: both;"></div>
					<img src="img/partidos/<? echo $partido['emblema']; ?>" style="height: 45px; margin: 5px auto;">
				</div>
				<!-- FIN FOTO -->
				
				<!-- DATOS -->
				<div style="float: left; font-size: 1.2em; font-weight: 800; font-family: color: rgba(57,57,59,1.00); text-align: left; padding: 2px; margin: 35px 25px;">
					<? echo utf8_encode($diputado['nombres']); ?> <? echo utf8_encode($diputado['apaterno']); ?> <? echo utf8_encode($diputado['amaterno']); ?><br>
					<?
					$con_partido = new TConeccion();
					$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
					$con_partido->Gestion($query_partido);
					$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
					?>
					
					<span style="color: rgb(100,100,100); font-size: 0.8em; font-weight: 300;"><? echo $integrante['cargo']; ?></span><br>
					<span style="color: rgb(137,138,141); font-size: 0.8em; font-weight: 300;"><? echo utf8_encode($partido['nombre']); if ($partido['siglas'] != '') { echo " (".$partido['siglas'].")"; } ?></span>
					
				</div>
				<div style="clear: both; height: 20px;"></div>
				<!-- FIN DATOS -->
				
			</div>
			<? } ?>	
			
			<!-- SECRETARIOS -->
			<?
			$con_integrantes = new TConeccion();
			$query_integrantes  = "SELECT * FROM cdd_integrantes_lxi WHERE id_comision = ".$_GET['id']." AND cargo LIKE '%Secretari%' ORDER BY id ASC";
			$con_integrantes->Gestion($query_integrantes);
			while($integrante = mysqli_fetch_array($con_integrantes->Query,MYSQLI_ASSOC)){
			?>
			
			<?
			$con_diputado = new TConeccion();
			$query_diputado  = "SELECT * FROM cdd_diputados_lxi WHERE id = ".$integrante['id_diputado'];
			$con_diputado->Gestion($query_diputado);
			$diputado = mysqli_fetch_array($con_diputado->Query,MYSQLI_ASSOC);
			?>
			
			<div style="font-family: 'Arimo', sans-serif;font-weight: 300;">
				
				<?
				$con_partido = new TConeccion();
				$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
				$con_partido->Gestion($query_partido);
				$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
				?>				
				
				<!-- FOTO -->
				<div style="text-align: center; width: 160px; float: left;">
					<div style="background: linear-gradient( 90deg, rgb(<? echo $partido['rgb']; ?>,1.00) 0%, rgb(<? echo $partido['rgb2']; ?>,1.00) 100% ); height: 150px; width: 150px; border-radius: 50%; padding: 5px; float: left;">
						<div style="background: rgba(255,255,255); border-radius: 50%; height: 150px; width: 150px;">
							<div style="background: url(img/fotos/dip/lxi/<? echo $diputado['foto']; ?>) no-repeat; background-size: 150px; width: 150px; height: 150px; float: left; border-radius:50%;"></div>
							<div style="clear: both;"></div>
						</div>
					</div>
					<div style="clear: both;"></div>
					<img src="img/partidos/<? echo $partido['emblema']; ?>" style="height: 45px; margin: 5px auto;">
				</div>
				<!-- FIN FOTO -->
				
				<!-- DATOS -->
				<div style="float: left; font-size: 1.2em; font-weight: 800; font-family: color: rgba(57,57,59,1.00); text-align: left; padding: 2px; margin: 35px 25px;">
					<? echo utf8_encode($diputado['nombres']); ?> <? echo utf8_encode($diputado['apaterno']); ?> <? echo utf8_encode($diputado['amaterno']); ?><br>
					<?
					$con_partido = new TConeccion();
					$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
					$con_partido->Gestion($query_partido);
					$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
					?>
					
					<span style="color: rgb(100,100,100); font-size: 0.8em; font-weight: 300;"><? echo $integrante['cargo']; ?></span><br>
					<span style="color: rgb(137,138,141); font-size: 0.8em; font-weight: 300;"><? echo utf8_encode($partido['nombre']); if ($partido['siglas'] != '') { echo " (".$partido['siglas'].")"; } ?></span>
					
				</div>
				<div style="clear: both; height: 20px;"></div>
				<!-- FIN DATOS -->
				
			</div>
			<? } ?>
			
			<!-- MIEMBROS -->
			<?
			$con_integrantes = new TConeccion();
			$query_integrantes  = "SELECT * FROM cdd_integrantes_lxi WHERE id_comision = ".$_GET['id']." AND cargo = 'Miembro' ORDER BY id ASC";
			$con_integrantes->Gestion($query_integrantes);
			while($integrante = mysqli_fetch_array($con_integrantes->Query,MYSQLI_ASSOC)){
			?>
			
			<?
			$con_diputado = new TConeccion();
			$query_diputado  = "SELECT * FROM cdd_diputados_lxi WHERE id = ".$integrante['id_diputado'];
			$con_diputado->Gestion($query_diputado);
			$diputado = mysqli_fetch_array($con_diputado->Query,MYSQLI_ASSOC);
			?>
			
			<div style="font-family: 'Arimo', sans-serif;font-weight: 300;">
				
				<?
				$con_partido = new TConeccion();
				$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
				$con_partido->Gestion($query_partido);
				$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
				?>				
				
				<!-- FOTO -->
				<div style="text-align: center; width: 160px; float: left;">
					<div style="background: linear-gradient( 90deg, rgb(<? echo $partido['rgb']; ?>,1.00) 0%, rgb(<? echo $partido['rgb2']; ?>,1.00) 100% ); height: 150px; width: 150px; border-radius: 50%; padding: 5px; float: left;">
						<div style="background: rgba(255,255,255); border-radius: 50%; height: 150px; width: 150px;">
							<div style="background: url(img/fotos/dip/lxi/<? echo $diputado['foto']; ?>) no-repeat; background-size: 150px; width: 150px; height: 150px; float: left; border-radius:50%;"></div>
							<div style="clear: both;"></div>
						</div>
					</div>
					<div style="clear: both;"></div>
					<img src="img/partidos/<? echo $partido['emblema']; ?>" style="height: 45px; margin: 5px auto;">
				</div>
				<!-- FIN FOTO -->
				
				<!-- DATOS -->
				<div style="float: left; font-size: 1.2em; font-weight: 800; font-family: color: rgba(57,57,59,1.00); text-align: left; padding: 2px; margin: 35px 25px;">
					<? echo utf8_encode($diputado['nombres']); ?> <? echo utf8_encode($diputado['apaterno']); ?> <? echo utf8_encode($diputado['amaterno']); ?><br>
					<?
					$con_partido = new TConeccion();
					$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
					$con_partido->Gestion($query_partido);
					$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
					?>
					
					<span style="color: rgb(100,100,100); font-size: 0.8em; font-weight: 300;"><? echo $integrante['cargo']; ?></span><br>
					<span style="color: rgb(137,138,141); font-size: 0.8em; font-weight: 300;"><? echo utf8_encode($partido['nombre']); if ($partido['siglas'] != '') { echo " (".$partido['siglas'].")"; } ?></span>
				</div>
				<div style="clear: both; height: 20px;"></div>
				<!-- FIN DATOS -->
				
			</div>
			<? } ?>			
			
			<!-- VOCALES -->
			<?
			$con_integrantes = new TConeccion();
			$query_integrantes  = "SELECT * FROM cdd_integrantes_lxi WHERE id_comision = ".$_GET['id']." AND cargo = 'Vocal'";
			$con_integrantes->Gestion($query_integrantes);
			while($integrante = mysqli_fetch_array($con_integrantes->Query,MYSQLI_ASSOC)){
			?>
			
			<?
			$con_diputado = new TConeccion();
			$query_diputado  = "SELECT * FROM cdd_diputados_lxi WHERE id = ".$integrante['id_diputado'];
			$con_diputado->Gestion($query_diputado);
			$diputado = mysqli_fetch_array($con_diputado->Query,MYSQLI_ASSOC);
			?>
			
			<div style="font-family: 'Arimo', sans-serif;font-weight: 300;">
				
				<?
				$con_partido = new TConeccion();
				$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
				$con_partido->Gestion($query_partido);
				$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
				?>				
				
				<!-- FOTO -->
				<div style="text-align: center; width: 160px; float: left;">
					<div style="background: linear-gradient( 90deg, rgb(<? echo $partido['rgb']; ?>,1.00) 0%, rgb(<? echo $partido['rgb2']; ?>,1.00) 100% ); height: 150px; width: 150px; border-radius: 50%; padding: 5px; float: left;">
						<div style="background: rgba(255,255,255); border-radius: 50%; height: 150px; width: 150px;">
							<div style="background: url(img/fotos/dip/lxi/<? echo $diputado['foto']; ?>) no-repeat; background-size: 150px; width: 150px; height: 150px; float: left; border-radius:50%;"></div>
							<div style="clear: both;"></div>
						</div>
					</div>
					<div style="clear: both;"></div>
					<img src="img/partidos/<? echo $partido['emblema']; ?>" style="height: 45px; margin: 5px auto;">
				</div>
				<!-- FIN FOTO -->
				
				<!-- DATOS -->
				<div style="float: left; font-size: 1.2em; font-weight: 800; font-family: color: rgba(57,57,59,1.00); text-align: left; padding: 2px; margin: 35px 25px;">
					<? echo utf8_encode($diputado['nombres']); ?> <? echo utf8_encode($diputado['apaterno']); ?> <? echo utf8_encode($diputado['amaterno']); ?><br>
					<?
					$con_partido = new TConeccion();
					$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
					$con_partido->Gestion($query_partido);
					$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
					?>
					
					<span style="color: rgb(100,100,100); font-size: 0.8em; font-weight: 300;"><? echo $integrante['cargo']; ?></span><br>
					<span style="color: rgb(137,138,141); font-size: 0.8em; font-weight: 300;"><? echo utf8_encode($partido['nombre']); if ($partido['siglas'] != '') { echo " (".$partido['siglas'].")"; } ?></span>
				</div>
				<div style="clear: both; height: 20px;"></div>
				<!-- FIN DATOS -->
				
			</div>
			<? } ?>			
			
			<!-- SUPLENTES -->
			<?
			$con_integrantes = new TConeccion();
			$query_integrantes  = "SELECT * FROM cdd_integrantes_lxi WHERE id_comision = ".$_GET['id']." AND cargo = 'Suplente'";
			$con_integrantes->Gestion($query_integrantes);
			while($integrante = mysqli_fetch_array($con_integrantes->Query,MYSQLI_ASSOC)){
			?>
			
			<?
			$con_diputado = new TConeccion();
			$query_diputado  = "SELECT * FROM cdd_diputados_lxi WHERE id = ".$integrante['id_diputado'];
			$con_diputado->Gestion($query_diputado);
			$diputado = mysqli_fetch_array($con_diputado->Query,MYSQLI_ASSOC);
			?>
			
			<div style="font-family: 'Arimo', sans-serif;font-weight: 300;">
				
				<?
				$con_partido = new TConeccion();
				$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
				$con_partido->Gestion($query_partido);
				$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
				?>				
				
				<!-- FOTO -->
				<div style="text-align: center; width: 160px; float: left;">
					<div style="background: linear-gradient( 90deg, rgb(<? echo $partido['rgb']; ?>,1.00) 0%, rgb(<? echo $partido['rgb2']; ?>,1.00) 100% ); height: 150px; width: 150px; border-radius: 50%; padding: 5px; float: left;">
						<div style="background: rgba(255,255,255); border-radius: 50%; height: 150px; width: 150px;">
							<div style="background: url(img/fotos/dip/lxi/<? echo $diputado['foto']; ?>) no-repeat; background-size: 150px; width: 150px; height: 150px; float: left; border-radius:50%;"></div>
							<div style="clear: both;"></div>
						</div>
					</div>
					<div style="clear: both;"></div>
					<img src="img/partidos/<? echo $partido['emblema']; ?>" style="height: 45px; margin: 5px auto;">
				</div>
				<!-- FIN FOTO -->
				
				<!-- DATOS -->
				<div style="float: left; font-size: 1.2em; font-weight: 800; font-family: color: rgba(57,57,59,1.00); text-align: left; padding: 2px; margin: 35px 25px;">
					<? echo utf8_encode($diputado['nombres']); ?> <? echo utf8_encode($diputado['apaterno']); ?> <? echo utf8_encode($diputado['amaterno']); ?><br>
					<?
					$con_partido = new TConeccion();
					$query_partido  = "SELECT * FROM cdd_partidos_lxi WHERE id = ".$diputado['id_partido'];
					$con_partido->Gestion($query_partido);
					$partido = mysqli_fetch_array($con_partido->Query,MYSQLI_ASSOC);
					?>
					
					<span style="color: rgb(100,100,100); font-size: 0.8em; font-weight: 300;"><? echo $integrante['cargo']; ?></span><br>
					<span style="color: rgb(137,138,141); font-size: 0.8em; font-weight: 300;"><? echo utf8_encode($partido['nombre']); if ($partido['siglas'] != '') { echo " (".$partido['siglas'].")"; } ?></span>
				</div>
				<div style="clear: both; height: 20px;"></div>
				<!-- FIN DATOS -->
				
			</div>
			<? } ?>			
			
		</div>
	</div>
	</div>
	<? include('boxbanner.php'); ?>
	
	</div>
	<div style="clear: both"></div>
	
	<? include('footer.php'); ?>
	
</div>
</body>
</html>