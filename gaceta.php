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
	<meta property="og:title" content="Gaceta Parlamentaria" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Gaceta Parlamentaria</title>
	
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
			<h1>Gaceta Parlamentaria</h1>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_gaceta_lxi ORDER BY numero DESC, tomo ASC LIMIT 0,1";
			$connect->Gestion($query);
			$gaceta = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC);
			?>
			<?
			$mes_in = substr($gaceta['date'],5,2);
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

			<div>
				<div style="margin: 0px 10px; float: left;"><img src="img/gaceta.png" width="100"></div>
				<div style="float: left;">
					<p style="line-height: 140%; margin: 5px auto;">No. <? echo utf8_encode($gaceta['numero']); ?> - Año <? echo utf8_encode($gaceta['year']); ?><br>
					<span style="font-size: 1.5em; font-weight: bolder;"><? echo substr($gaceta['date'],8,2)." de ".$mes_txt.", ".substr($gaceta['date'],0,4); ?></span><br>
					Formato: <? $size = $gaceta['size']/1000000; echo strtoupper($gaceta['format'])." (".number_format($size,1)." MB)"; ?></p>
					<button onclick="window.open('../documentos/gaceta/<? echo $gaceta['documento']; ?>')"><i class="far fa-file-pdf"></i> Descargar</button>
				</div>
				<div style="clear: both;"></div>
			</div>
			
			<div style="height: 20px; clear: both;"></div>
			<h2>Números anteriores</h2>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_gaceta_lxi ORDER BY numero DESC, tomo ASC LIMIT 1,9";
			$connect->Gestion($query);
			while($gaceta = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)){
			?>
			<?
			$mes_in = substr($gaceta['date'],5,2);
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

			<a href="../documentos/gaceta/<? echo $gaceta['documento']; ?>" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name">
						<span style="font-size: 0.8em;">No. <? echo utf8_encode($gaceta['numero']); ?> - Año <? echo utf8_encode($gaceta['year']); ?></span><br>
						<b><? echo substr($gaceta['date'],8,2)." de ".$mes_txt.", ".substr($gaceta['date'],0,4); ?></b>
					</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>
			<? } ?>
			
			<button onclick="location.href='gacetas'">Números anteriores</button>			
			<div style="clear: both;"></div>
		</div>
		<? include('boxbanner.php'); ?>
		
		<div style="clear: both;"></div>
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>