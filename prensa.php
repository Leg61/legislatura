<!doctype html>
<? include('config/tconnection.php'); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="keywords" content="">
	<meta name="description" content="Comunicados publicados por la Dirección General de Comunicación Social del Poder Legislativo">
	<meta property="og:description" content="Comunicados publicados por la Dirección General de Comunicación Social del Poder Legislativo" />
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="" />
	<meta property="og:image:height" content="" />
	<meta property="og:title" content="Noticias" />

	<link rel="icon" type="image/png" href="favicon.png">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Noticias</title>
	
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
		
	<div id="noticias">
		<h1>Noticias</h1>
		
		<?
		$Coneccion = new TConeccion();
		$query  = "SELECT * FROM cdd_comunicados WHERE status != 'off' ORDER BY fecha DESC, comunicado DESC LIMIT 0,1";
		$Coneccion->Gestion($query);
		$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
		?>
		
		<!-- NOTA PRINCIPAL -->
		<a href="comunicado.php?id=<? echo $row['comunicado']; ?>">
			<div style="width: 90%; max-width: 550px; float: left; margin: 10px; display: block; text-align: justify;">
				<?
				$con_foto = new TConeccion();
				$query_foto  = "SELECT * FROM cdd_fotos WHERE comunicado = ".$row['comunicado'];
				$con_foto->Gestion($query_foto);
				$foto = mysqli_fetch_array($con_foto->Query,MYSQLI_ASSOC);
				?>

				<img src="../img/fotos/comunicados/<? echo $foto['foto']; ?>" alt="<? echo utf8_encode($row['titulo']); ?>" style="width: 100%;">
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
				<h2><? echo utf8_encode($row['titulo']); ?></h2>
				<p><? echo utf8_encode($row['bullet1']); ?></p>
			</div>
		</a>
		<!-- FIN NOTA PRINCIPAL -->
			
		<!-- NOTAS SECUNDARIAS -->
		<div style="width: 90%; max-width: 330px; float: left; margin:10px; display: block; text-align: justify;">
			<?
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_comunicados WHERE status != 'off' ORDER BY fecha DESC, comunicado DESC LIMIT 1,2";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			
			<a href="comunicado.php?id=<? echo $row['comunicado']; ?>">
			<div style="width: 100%; max-width: 330px; float: left; margin-bottom: 20px; display: block; text-align: justify;">
				<?
				$con_foto = new TConeccion();
				$query_foto  = "SELECT * FROM cdd_fotos WHERE comunicado = ".$row['comunicado'];
				$con_foto->Gestion($query_foto);
				$foto = mysqli_fetch_array($con_foto->Query,MYSQLI_ASSOC);
				?>
				
				<img src="../img/fotos/comunicados/<? echo $foto['foto']; ?>" alt="<? echo utf8_encode($row['titulo']); ?>" style="width: 100%;">
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
				<h3><? echo utf8_encode($row['titulo']); ?></h3>
			</div>
			</a>
			<? } ?>
			<div style="clear: both;"></div>
		</div>
		<!-- FIN NOTAS SECUNDARIAS -->
		
		<!-- NOTAS TERCIARIAS -->
		<div style="width: 90%; max-width: 320px; float: left; margin:10px; display: block; text-align: justify;">
			<?
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_comunicados WHERE status != 'off' ORDER BY comunicado DESC LIMIT 3,5";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<a href="comunicado.php?id=<? echo $row['comunicado']; ?>">
			<div style="width: 100%; max-width: 320px; float: left; margin-bottom: 20px; display: block; text-align: justify;">
				<?
				$con_foto = new TConeccion();
				$query_foto  = "SELECT * FROM cdd_fotos WHERE comunicado = ".$row['comunicado'];
				$con_foto->Gestion($query_foto);
				$foto = mysqli_fetch_array($con_foto->Query,MYSQLI_ASSOC);
				?>
				
				<div style="float: left; width: 100px; height: 100px; margin-right: 10px; background: url(../img/fotos/comunicados/<? echo $foto['foto']; ?>) 50% 50%; background-size: cover;"></div>
				<div style="float: left; width: 210px">
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
			<div style="clear: both;"></div>
		</div>
		<!-- FIN NOTAS TERCIARIAS -->
	
		<!-- NOTAS CUARTAS -->
		<div style="width: 100%; float: left; margin:10px; display: block; text-align: justify;">
			<?
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_comunicados WHERE status != 'off' ORDER BY comunicado DESC LIMIT 8,21";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<a href="comunicado.php?id=<? echo $row['comunicado']; ?>">
			<div style="width: 100%; max-width: 390px; float: left; margin-bottom: 20px; display: block; text-align: justify;">
				<?
				$con_foto = new TConeccion();
				$query_foto  = "SELECT * FROM cdd_fotos WHERE comunicado = ".$row['comunicado'];
				$con_foto->Gestion($query_foto);
				$foto = mysqli_fetch_array($con_foto->Query,MYSQLI_ASSOC);
				?>

				<div style="float: left; width: 100px; height: 100px; margin-right: 10px; background: url(../img/fotos/comunicados/<? echo $foto['foto']; ?>) 50% 50%; background-size: cover;"></div>
				<div style="float: left; width: 270px">
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
			<div style="clear: both;"></div>
		</div>
		<!-- FIN NOTAS CUARTAS -->
	</div>
	<div style="clear: both"></div>
	<button onclick="location.href='paginacion.php'">Ver noticias anteriores</button>
	
	<? include('footer.php'); ?>
	
