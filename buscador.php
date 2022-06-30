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
	<meta property="og:title" content="<? echo $_GET['tema']; ?>" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title><? echo $_GET['tema']; ?></title>
	
	<link rel="stylesheet" type="text/css" href="js/shadowbox/shadowbox.css">
	<script type="text/javascript" src="js/shadowbox/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init({
			language:   "es"
		});
	</script>	

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
	
	<div id="contenido" style="width: 90%; max-width: 1260px;">
	<!--<div style="width: 100%; max-width: 1260px; margin: auto; padding-top: 202px;">-->
		<h1><? echo $_GET['tema']; ?></h1>
		
		<!-- BLOQUE IZQUIERDO -->
		<div id="contenido_left" style="max-width: 610px;">
		<!--<div style="width: 100%; max-width: 630px; margin: auto; float: left;">-->
			
		<!-- DIPUTADAS/OS -->
		<?
		$termino = utf8_decode($_GET['tema']);
		$Coneccion = new TConeccion();
		$query  = "SELECT * FROM cdd_diputados_lxi WHERE apaterno LIKE '%".$termino."%' OR amaterno LIKE '%".$termino."%' OR nombres LIKE '%".$termino."%' OR completo LIKE '%".$termino."%'";
		$Coneccion->Gestion($query);
		$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
		?>
		<? if ($row['id']) { ?>
		<div style="padding: 10px 20px; background:linear-gradient( 40deg, rgb(255,255,255,1.00) 0%, rgb(245,245,245,1.00) 100% ); width: 90%; max-width: 570px; margin: 10px; float: left; border: rgb(200,200,200) solid 1px; border-radius: 10px;">
			<h2>Diputadas/os</h2>
			<?
			$termino = utf8_decode($_GET['tema']);
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_diputados_lxi WHERE apaterno LIKE '%".$termino."%' OR amaterno LIKE '%".$termino."%' OR nombres LIKE '%".$termino."%' OR completo LIKE '%".$termino."%'";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			
			<? if ($row['status'] == 'activo') { ?>
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
				<div style="float: left; font-size: 1.2em; font-weight: 800; font-family: font-family: 'Arimo', sans-serif; color: rgba(57,57,59,1.00); text-align: left; padding: 2px; margin: 35px 15px;">
					<? echo utf8_encode($row['apaterno']); ?> <? echo utf8_encode($row['amaterno']); ?>, <? echo utf8_encode($row['nombres']); ?><br>
					<?
					$con_dtto = new TConeccion();
					$query_dtto  = "SELECT * FROM cdd_distritos WHERE id = ".$row['id_distrito'];
					$con_dtto->Gestion($query_dtto);
					$dtto = mysqli_fetch_array($con_dtto->Query,MYSQLI_ASSOC);
					?>
					<span style="color: rgb(100,100,100); font-size: 0.8em; font-weight: 300;"><? if ($dtto['distrito'] == "plurinom") { echo "Representación Proporcional"; } else { echo "Distrito ".$dtto['distrito']." - ".utf8_encode($dtto['municipio']); }  ?></span><br>
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
					<a href="http://instagram.com/<? echo $row['instagram']; ?>" target="_blank" style="text-decoration: none; color: rgba(150,0,72,1.00); font-size: 0.8em; font-weight: 300;"><i class="fab fa-instagram"></i> @<? echo $row['instagram'] ?></a>
					<? } ?>
				
				</div>
				<!-- FIN DATOS -->
				<div style="clear: both; height: 30px;"></div>
			</div>
			<? } ?>
			
			<? } ?>
			
		</div>
		<div style="clear: both; height: 30px;"></div>
		<? } ?>
		<!-- DIPUTADAS/OS -->
			
		<!-- DIRECTORIO -->
		<?
		$termino = utf8_decode($_GET['tema']);
		$Coneccion = new TConeccion();
		$query  = "SELECT * FROM cdd_directorio WHERE apaterno LIKE '%".$termino."%' OR amaterno LIKE '%".$termino."%' OR nombres LIKE '%".$termino."%' OR completo LIKE '%".$termino."%' OR cargo LIKE '%".$termino."%'";
		$Coneccion->Gestion($query);
		$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
		?>
		<? if ($row['id']) { ?>
		<div style="padding: 10px 20px; background:linear-gradient( 40deg, rgb(255,255,255,1.00) 0%, rgb(245,245,245,1.00) 100% ); width: 90%; max-width: 570px; margin: 10px; float: left; border: rgb(200,200,200) solid 1px; border-radius: 10px;">
			<h2>Directorio</h2>
			<?
			$termino = utf8_decode($_GET['tema']);
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_directorio WHERE apaterno LIKE '%".$termino."%' OR amaterno LIKE '%".$termino."%' OR nombres LIKE '%".$termino."%' OR completo LIKE '%".$termino."%' OR cargo LIKE '%".$termino."%'";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<div>
				<!-- DATOS -->
				<div style="float: left; font-size: 1.2em; font-weight: 800; font-family: font-family: 'Arimo', sans-serif; color: rgba(57,57,59,1.00); text-align: left; padding: 2px;">
					<? echo utf8_encode($row['titulo']); ?> <? echo utf8_encode($row['nombres']); ?> <? echo utf8_encode($row['apaterno']); ?> <? echo utf8_encode($row['amaterno']); ?><br>
					<span style="color: rgb(34,34,34); font-size: 0.8em; font-weight: 300;"><? echo utf8_encode($row['cargo']);  ?></span><br>
					<?
					$Coneccion = new TConeccion();
					$query  = "SELECT * FROM cdd_areas WHERE id = ".$row['id_area'];
					$Coneccion->Gestion($query);
					$area = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
					?>
					<span style="color: rgb(0,0,0); font-size: 0.6em; font-weight: 500; text-transform: uppercase;"><? echo utf8_encode($area['name']);  ?></span><br>
					
					<!-- DIRECTO -->
					<? if ($row['telefono1']) { ?>
					<span style="color: rgb(150,0,72); font-size: 0.8em; font-weight: 300;"><? echo "<i class='fas fa-phone-square-alt'></i> (".substr($row['telefono1'],0,3).") ".substr($row['telefono1'],3,3)."-".substr($row['telefono1'],6,4);  ?></span><br>
					<? } ?>

					<!-- DIRECTO -->
					<? if ($row['telefono2']) { ?>
					<span style="color: rgb(150,0,72); font-size: 0.8em; font-weight: 300;"><? echo "<i class='fas fa-phone-square-alt'></i> (".substr($row['telefono2'],0,3).") ".substr($row['telefono2'],3,3)."-".substr($row['telefono2'],6,4);  ?></span><br>
					<? } ?>
					
					<!-- EXTENSIÓN -->
					<? if ($row['ext']) { ?>
					<span style="color: rgb(150,0,72); font-size: 0.8em; font-weight: 300;">Ext. <? echo utf8_encode($row['ext']);  ?></span><br>
					<? } ?>
					
				</div>
				<!-- FIN DATOS -->
				<div style="clear: both; height: 30px;"></div>
			</div>
			<? } ?>
			
		</div>
		<div style="clear: both; height: 30px;"></div>
		<? } ?>
		<!-- DIRECTORIO -->

			
		<!-- COMISIONES -->
		<?
		$termino = utf8_decode($_GET['tema']);
		$Coneccion = new TConeccion();
		$query  = "SELECT * FROM cdd_comisiones WHERE nombre LIKE '%".$termino."%'";
		$Coneccion->Gestion($query);
		$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
		?>
		<? if ($row['id']) { ?>
		<div style="padding: 10px 20px; background:linear-gradient( 40deg, rgb(255,255,255,1.00) 0%, rgb(245,245,245,1.00) 100% ); width: 90%; max-width: 570px; margin: 10px; float: left; border: rgb(200,200,200) solid 1px; border-radius: 10px;">
			<h2>Órganos, comisiones y comités</h2>
			<?
			$termino = utf8_decode($_GET['tema']);
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_comisiones WHERE nombre LIKE '%".$termino."%' OR alias LIKE '%".$termino."%'";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<div style="font-family: 'Arimo', sans-serif;font-weight: 300;">				
				<div style="float: left; font-size: 1.2em; font-weight: 800; font-family: font-family: 'Arimo', sans-serif; color: rgba(57,57,59,1.00); text-align: left; padding: 2px; width: 100%;">
					<!--<a href="comision-<? echo $row['id']; ?>">-->
					<div class="bloque_ley">
						<div class="icon_pdf"><i class="fas fa-users"></i></div>
						<div class="ley_name"><? echo utf8_encode($row['nombre']); ?><br><button onclick="location.href='comision-<? echo $row['id']; ?>'" style="font-size: 0.6em;">Ver integrantes</button></div>
						<div style="clear: both;"></div>
					</div>
					<div style="clear: both;"></div>
					<!--</a>-->
				</div>
				<!-- FIN DATOS -->
				<div style="clear: both; height: 30px;"></div>
			</div>
			<? } ?>
			
		</div>
		<div style="clear: both; height: 30px;"></div>
		<? } ?>
		<!-- FIN COMISIONES -->
		
		<!-- INICIATIVAS -->
		<?
		$termino = utf8_decode($_GET['tema']);
		$Coneccion = new TConeccion();
		$query  = "SELECT * FROM cdd_iniciativas WHERE autor LIKE '%".$termino."%' OR iniciativa LIKE '%".$termino."%' OR comisiones LIKE '%".$termino."%'";
		$Coneccion->Gestion($query);
		$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
		?>
		<? if ($row['id']) { ?>
		<div style="padding: 10px 20px; background:linear-gradient( 90deg, rgb(235,235,235,1.00) 0%, rgb(253,253,253,1.00) 100% ); width: 90%; max-width: 570px; margin: 10px; float: left; border: rgb(200,200,200) solid 1px; border-radius: 10px;">
			<h2>Iniciativas</h2>
			<?
			$termino = utf8_decode($_GET['tema']);
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_iniciativas WHERE autor LIKE '%".$termino."%' OR coautor LIKE '%".$termino."%' OR iniciativa LIKE '%".$termino."%' OR comisiones LIKE '%".$termino."%' ORDER BY presentada DESC LIMIT 15";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<?
				$mes_in = substr($row['presentada'],5,2);
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
			
			<p style="border-bottom: rgb(135,135,135) dotted 1px; text-align: justify;">
				<i class="fas fa-user-circle"></i> <b><? echo utf8_encode($row['autor']); ?></b><br>
				<span style="color: black; font-size: 0.9em; line-height: 120%;"><i class="fas fa-scroll"></i> <? echo utf8_encode($row['iniciativa']); ?></span><br>
				<span style="font-size: 0.9em; color: rgb(128,0,72); text-align: left;"><i class="far fa-calendar-alt"></i> <? echo substr($row['presentada'],8,2)." de ".$mes_txt.", ".substr($row['presentada'],0,4) ?></span><br>
				
				<? if ($row['expedicion'] == '0000-00-00') { ?>
				<span style="font-size: 0.9em; font-weight: bolder; color: rgb(128,0,72); text-align: left;">Turnada a <? echo utf8_encode($row['comisiones']); ?></span><br>
				<? } else { ?>
				
				<span style="font-size: 0.9em; font-weight: bolder; color: <? if ($row['status'] == 'Aprobada') { echo "rgb(0,120,0)"; } else { echo "rgb(35,35,35)"; } ?>; text-align: left;"><? if ($row['status'] == 'Aprobada') { echo "<i class='fas fa-check-circle'></i> "; } ?><? echo $row['status'] ." el ".substr($row['expedicion'],8,2)." de ".$mes_txt." de ".substr($row['expedicion'],0,4) ?></span>
				<? } ?>
				
			</p>
			<? } ?>
			
		</div>
		<div style="clear: both; height: 30px;"></div>
		<? } ?>
		<!-- FIN INICIATIVAS -->			

			<div style="clear: both;"></div>
		</div>
		<!-- BLOQUE IZQUIERDO -->
		
		<!-- BLOQUE DERECHO -->
		<div id="contenido_left" style="max-width: 610px;">
		<!--<div style="width: 100%; max-width: 630px; margin: auto; float: left;">-->

		<!-- SECCIONES DE LA PÁGINA -->
		<?
		$termino = utf8_decode($_GET['tema']);
		$Coneccion = new TConeccion();
		$query  = "SELECT * FROM cdd_secciones WHERE alias LIKE '%".$termino."%' ORDER BY nombre ASC";
		$Coneccion->Gestion($query);
		$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
		?>
		<? if ($row['id']) { ?>
		<div style="padding: 10px 20px; background:linear-gradient( 40deg, rgb(255,255,255,1.00) 0%, rgb(245,245,245,1.00) 100% ); width: 90%; max-width: 570px; margin: 10px; float: left; border: rgb(200,200,200) solid 1px; border-radius: 10px;">
			<h2>Secciones</h2>
			<?
			$termino = utf8_decode($_GET['tema']);
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_secciones WHERE alias LIKE '%".$termino."%' ORDER BY nombre ASC";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<a href="/<? echo $row['url']; ?>">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-eye"></i></div>
					<div class="ley_name"><? echo utf8_encode($row['nombre']); ?></div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>
			<? } ?>
			
		</div>
		<div style="clear: both; height: 30px;"></div>
		<? } ?>
		<!-- FIN DE SECCIONES DE LA PÁGINA -->
			
		<!-- EVENTOS -->
		<?
		$termino = utf8_decode($_GET['tema']);
		$Coneccion = new TConeccion();
		$query  = "SELECT * FROM cdd_eventos WHERE descripcion LIKE '%".$termino."%' AND fecha >= '".date('Y-m-d')."' ORDER BY fecha ASC";
		$Coneccion->Gestion($query);
		$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
		?>
		<? if ($row['id']) { ?>
		<div style="padding: 10px 20px; background:linear-gradient( 40deg, rgb(255,255,255,1.00) 0%, rgb(245,245,245,1.00) 100% ); width: 90%; max-width: 570px; margin: 10px; float: left; border: rgb(200,200,200) solid 1px; border-radius: 10px;">
			<h2>Próximos eventos</h2>
			<?
			$termino = utf8_decode($_GET['tema']);
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_eventos WHERE descripcion LIKE '%".$termino."%' AND fecha >= '".date('Y-m-d')."' ORDER BY fecha ASC";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<?
				$mes_in = substr($row['fecha'],5,2);
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

			<p style="border-bottom: rgb(135,135,135) dotted 1px; text-align: justify;">
				<i class="fas fa-user-circle"></i> <b><? echo utf8_encode($row['descripcion']); ?></b><br>
				<span style="font-size: 0.9em; color: rgb(128,0,72); text-align: left;"><i class="far fa-calendar-alt"></i> <? echo substr($row['fecha'],8,2)." de ".$mes_txt.", ".substr($row['fecha'],0,4)." - ".substr($row['fecha'],11,5)." hrs."; ?></span>
			</p>

			<? } ?>
			
		</div>
		<div style="clear: both; height: 30px;"></div>
		<? } ?>
		<!-- FIN DE EVENTOS -->
			
			
		<!-- LEYES Y CÓDIGOS -->
		<?
		$termino = utf8_decode($_GET['tema']);
		$Coneccion = new TConeccion();
		$query  = "SELECT * FROM cdd_legislacion WHERE nombre LIKE '%".$termino."%' ORDER BY nombre ASC";
		$Coneccion->Gestion($query);
		$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
		?>
		<? if ($row['id']) { ?>
		<div style="padding: 10px 20px; background:linear-gradient( 40deg, rgb(255,255,255,1.00) 0%, rgb(245,245,245,1.00) 100% ); width: 90%; max-width: 570px; margin: 10px; float: left; border: rgb(200,200,200) solid 1px; border-radius: 10px;">
			<h2>Legislación vigente</h2>
			<?
			$termino = utf8_decode($_GET['tema']);
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_legislacion WHERE nombre LIKE '%".$termino."%' ORDER BY nombre ASC";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<a href="documentos/leyes/pdf/<? echo $row['pdf']; ?>" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name"><? echo utf8_encode($row['nombre']); ?></div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>
			<? } ?>
		
		</div>
		<div style="clear: both; height: 30px;"></div>
		<? } ?>
		<!-- FIN DE LEYES Y CÓDIGOS -->

		<!-- GALERÍA DE FOTOS -->
		<?
		$termino = utf8_decode($_GET['tema']);
		$Coneccion = new TConeccion();
		$query  = "SELECT * FROM cdd_fotos WHERE tags LIKE '%".$termino."%'";
		$Coneccion->Gestion($query);
		$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
		?>
		<? if ($row['id']) { ?>
		<div style="padding: 10px 20px; background:linear-gradient( 40deg, rgb(255,255,255,1.00) 0%, rgb(245,245,245,1.00) 100% ); width: 90%; max-width: 570px; margin: 10px; float: left; border: rgb(200,200,200) solid 1px; border-radius: 10px;">
			<h2>Galería de fotos</h2>
			<?
			$termino = utf8_decode($_GET['tema']);
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_fotos WHERE tags LIKE '%".$termino."%' OR comunicado LIKE '%".$termino."%' ORDER BY comunicado DESC LIMIT 8";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<a href="img/fotos/comunicados/<? echo $row['foto']; ?>" rel="shadowbox[album]" title="<? echo $termino; ?>"><div style="display: block; margin: 5px; float: left; padding: 0px;"><img src="img/fotos/comunicados/<? echo $row['foto']; ?>" style="width: 120px; height:80px; text-decoration:none;"></div></a>
			<? } ?>
		
		</div>
		<div style="clear: both; height: 30px;"></div>
		<? } ?>
		<!-- FIN GALERÍA DE FOTOS -->
			
		<!-- COMUNICADOS -->
		<?
		$termino = utf8_decode($_GET['tema']);
		$Coneccion = new TConeccion();
		$query  = "SELECT * FROM cdd_comunicados WHERE titulo LIKE '%".$termino."%' OR bullet1 LIKE '%".$termino."%' OR bullet2 LIKE '%".$termino."%' OR bullet3 LIKE '%".$termino."%' OR texto LIKE '%".$termino."%'";
		$Coneccion->Gestion($query);
		$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
		?>
		<? if ($row['id']) { ?>
		<div style="padding: 10px 20px; background:linear-gradient( 40deg, rgb(255,255,255,1.00) 0%, rgb(245,245,245,1.00) 100% ); width: 90%; max-width: 570px; margin: 10px; float: left; border: rgb(200,200,200) solid 1px; border-radius: 10px;">
			<h2>Comunicados</h2>
			<?
			$termino = utf8_decode($_GET['tema']);
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_comunicados WHERE titulo LIKE '%".$termino."%' OR bullet1 LIKE '%".$termino."%' OR bullet2 LIKE '%".$termino."%' OR bullet3 LIKE '%".$termino."%' OR texto LIKE '%".$termino."%' ORDER BY comunicado DESC LIMIT 10";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<a href="comunicado.php?id=<? echo $row['comunicado']; ?>">
			<div style="width: 100%; max-width: 560px; float: left; margin-bottom: 20px; display: block; text-align: justify;">
				<?
				$con_foto = new TConeccion();
				$query_foto  = "SELECT * FROM cdd_fotos WHERE comunicado = ".$row['comunicado'];
				$con_foto->Gestion($query_foto);
				$foto = mysqli_fetch_array($con_foto->Query,MYSQLI_ASSOC);
				?>
				
				<? if ($foto['foto']) { ?>
				<div style="float: left; height: 160px; width: 50%; margin-right: 10px; background: url(../img/fotos/comunicados/<? echo $foto['foto']; ?>) 50% 50%; background-size: cover;"></div>
				<? } ?>
				<div style="float: left; width: 100%; margin: 15px auto;">
				<?
				$mes_in = substr($row['fecha'],5,2);
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
				<p class="date"><? echo substr($row['fecha'],8,2); ?> de <? echo $mes_txt ?>, <? echo substr($row['fecha'],0,4); ?></p>
				<p style="line-height: 110%; font-size: 1.0em; font-weight: bolder; margin: 0px; text-align: left;"><? echo utf8_encode($row['titulo']); ?></p>
				</div>
				<div style="clear: both;"></div>
			</div>
			</a>
			<? } ?>
			<button onclick="location.href='comunicadosbuscador.php?tema=<? echo $_GET['tema']; ?>'">Ver más resultados</button>
		</div>
		<div style="clear: both; height: 30px;"></div>
		<? } ?>
		<!-- COMUNICADOS -->
			
			
		<!-- COMUNICADOS ANTERIORES -->
		<?
		$termino = utf8_decode($_GET['tema']);
		$Coneccion = new TConeccion();
		$query  = "SELECT * FROM cdd_comunicados_lx WHERE titulo LIKE '%".$termino."%' OR bullet1 LIKE '%".$termino."%' OR bullet2 LIKE '%".$termino."%' OR bullet3 LIKE '%".$termino."%' OR texto LIKE '%".$termino."%'";
		$Coneccion->Gestion($query);
		$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
		?>
		<? if ($row['id']) { ?>
		<div style="padding: 10px 20px; background:linear-gradient( 40deg, rgb(255,255,255,1.00) 0%, rgb(245,245,245,1.00) 100% ); width: 90%; max-width: 570px; margin: 10px; float: left; border: rgb(200,200,200) solid 1px; border-radius: 10px;">
			<h2>Comunicados LX Legislatura</h2>
			<?
			$termino = utf8_decode($_GET['tema']);
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_comunicados_lx WHERE titulo LIKE '%".$termino."%' OR bullet1 LIKE '%".$termino."%' OR bullet2 LIKE '%".$termino."%' OR bullet3 LIKE '%".$termino."%' OR texto LIKE '%".$termino."%' ORDER BY comunicado DESC LIMIT 10";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<a href="comunicadolx.php?id=<? echo $row['comunicado']; ?>">
			<div style="width: 100%; max-width: 560px; float: left; margin-bottom: 20px; display: block; text-align: justify;">
				<?
				$con_foto = new TConeccion();
				$query_foto  = "SELECT * FROM cdd_fotos_lx WHERE comunicado = ".$row['comunicado'];
				$con_foto->Gestion($query_foto);
				$foto = mysqli_fetch_array($con_foto->Query,MYSQLI_ASSOC);
				?>
				
				<? if ($foto['foto']) { ?>
				<div style="float: left; height: 160px; width: 50%; margin-right: 10px; background: url(../img/fotos/comunicados/<? echo $foto['foto']; ?>) 50% 50%; background-size: cover;"></div>
				<? } ?>
				<div style="float: left; width: 100%; margin: 15px auto;">
				<?
				$mes_in = substr($row['fecha'],5,2);
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
				<p class="date"><? echo substr($row['fecha'],8,2); ?> de <? echo $mes_txt ?>, <? echo substr($row['fecha'],0,4); ?></p>
				<p style="line-height: 110%; font-size: 1.0em; font-weight: bolder; margin: 0px; text-align: left;"><? echo utf8_encode($row['titulo']); ?></p>
				</div>
				<div style="clear: both;"></div>
			</div>
			</a>
			<? } ?>
			<button onclick="location.href='comunicadoslxbuscador.php?tema=<? echo $_GET['tema']; ?>'">Ver más resultados</button>
		</div>
		<div style="clear: both; height: 30px;"></div>
		<? } ?>
		<!-- COMUNICADOS -->
			
			
			<div style="clear: both;"></div>
		</div>
		<!-- BLOQUE DERECHO -->
				
		<div style="clear: both;"></div>
		
		<?
		$cadena01		=	utf8_decode($_GET['tema'])." ";
		$termino_len	=	strlen($cadena01);
		$check_space1	=	stripos($cadena01," ");
		if ($check_space1 != 0) {
			echo "<h2>¿Tu búsqueda no arrojó los resultados que esperabas?</h2><p>Te sugerimos revisar la escritura o bien probar con términos en singular.</p><p>También puedes usar las sugerencias a continuación:</p>";
			$termino01 = substr($cadena01,0,$check_space1);
		?>
		<button onclick="location.href='buscador?tema=<? echo utf8_encode($termino01); ?>'"><? echo utf8_encode($termino01); ?></button>
		<? } ?>
		
		<?
		$long02			=	$termino_len-$cadena01;
		$cadena02		=	substr($cadena01,$check_space1+1,$long02);
		
		$check_space2	=	stripos($cadena02," ");
		if ($check_space2 != 0) {
			$termino02 = substr($cadena02,0,$check_space2);
		?>
		<button onclick="location.href='buscador?tema=<? echo utf8_encode($termino02); ?>'"><? echo utf8_encode($termino02); ?></button>
		<? } ?>

		<?
		$long03			=	$termino_len-$cadena01-$cadena02;
		$cadena03		=	substr($cadena02,$check_space2+1,$long03);
		
		$check_space3	=	stripos($cadena03," ");
		if ($check_space3 != 0) {
			$termino03 = substr($cadena03,0,$check_space3);
		?>
		<button onclick="location.href='buscador?tema=<? echo utf8_encode($termino03); ?>'"><? echo utf8_encode($termino03); ?></button>
		<? } ?>		
		
		<?
		$long04			=	$termino_len-$cadena01-$cadena02-$cadena03;
		$cadena04		=	substr($cadena03,$check_space3+1,$long04);
		
		$check_space4	=	stripos($cadena04," ");
		if ($check_space4 != 0) {
			$termino04 = substr($cadena04,0,$check_space4);
		?>
		<button onclick="location.href='buscador?tema=<? echo utf8_encode($termino04); ?>'"><? echo utf8_encode($termino04); ?></button>
		<? } ?>		
		
		<?
		$long05			=	$termino_len-$cadena01-$cadena02-$cadena03-$cadena04;
		$cadena05		=	substr($cadena04,$check_space4+1,$long05);
		
		$check_space5	=	stripos($cadena05," ");
		if ($check_space5 != 0) {
			$termino05 = substr($cadena05,0,$check_space5);
		?>
		<button onclick="location.href='buscador?tema=<? echo utf8_encode($termino05); ?>'"><? echo utf8_encode($termino05); ?></button>
		<? } ?>		
		
		<?
		$long06			=	$termino_len-$cadena01-$cadena02-$cadena03-$cadena04-$caden05;
		$cadena06		=	substr($cadena05,$check_space5+1,$long06);
		
		$check_space6	=	stripos($cadena06," ");
		if ($check_space6 != 0) {
			$termino06 = substr($cadena06,0,$check_space6);
		?>
		<button onclick="location.href='buscador?tema=<? echo utf8_encode($termino06); ?>'"><? echo utf8_encode($termino06); ?></button>
		<? } ?>		
		
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>