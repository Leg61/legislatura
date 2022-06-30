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
	<meta property="og:title" content="Comunicados" />

	<link rel="icon" type="image/png" href="favicon.png">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Comunicados</title>
	
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
	
	<?
	$termino = utf8_decode($_GET['tema']);
	$Coneccion = new TConeccion();
	$query  = "SELECT * FROM cdd_comunicados WHERE titulo LIKE '%".$termino."%' OR bullet1 LIKE '%".$termino."%' OR bullet2 LIKE '%".$termino."%' OR bullet3 LIKE '%".$termino."%' OR texto LIKE '%".$termino."%'";
	$Coneccion->Gestion($query);
	$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
	?>
	<div style="width: 100%; max-width: 1260px; margin: auto; padding-top: 202px;">
		<h1>Comunicados relacionados con <b><? echo $_GET['tema']; ?></b></h1>
		<!-- NOTAS CUARTAS -->
		<div style="width: 100%; float: left; margin:10px; display: block; text-align: justify;">
			<? if ($row['id']) { ?>
			<?
			$termino = utf8_decode($_GET['tema']);
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_comunicados WHERE titulo LIKE '%".$termino."%' OR bullet1 LIKE '%".$termino."%' OR bullet2 LIKE '%".$termino."%' OR bullet3 LIKE '%".$termino."%' OR texto LIKE '%".$termino."%' ORDER BY comunicado DESC";
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
			<? } ?>
		</div>
		<!--<button onclick="location.href='prensa.php'">Ver más comunicados</button>-->
		<!-- FIN NOTAS CUARTAS -->
		
		
	</div>
	<div style="clear: both"></div>
	
	<? include('footer.php'); ?>
	
</div>
</body>
</html>