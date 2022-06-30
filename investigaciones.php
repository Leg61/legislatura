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
	<meta property="og:title" content="Investigaciones" />

	<link rel="icon" type="image/png" href="favicon.svg">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Investigaciones</title>
	
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
	<? include('header.php'); ?>
		
	<div id="contenido">
		<div style="width: 100%; max-width: 688px; margin: 0px 20px; float: left; text-align: justify;">
			<h1>Investigaciones</h1>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM inesle_investigaciones ORDER BY date DESC, title ASC LIMIT 25";
			$connect->Gestion($query);
			while($row = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)) {
			?>
				<?
				$mes_in = substr($row['date'],5,2);
				switch ($mes_in) {
					case "01":
						$mes_txt = "Enero";
						break;
					case "02":
						$mes_txt = "Febrero";
						break;
					case "03":
						$mes_txt = "Marzo";
						break;
					case "04":
						$mes_txt = "Abril";
						break;
					case "05":
						$mes_txt = "Mayo";
						break;
					case "06":
						$mes_txt = "Junio";
						break;
					case "07":
						$mes_txt = "Julio";
						break;
					case "08":
						$mes_txt = "Agosto";
						break;
					case "09":
						$mes_txt = "Septiembre";
						break;
					case "10":
						$mes_txt = "Octubre";
						break;
					case "11":
						$mes_txt = "Noviembre";
						break;
					case "12":
						$mes_txt = "Diciembre";
						break;
				}
				?>
			
			<p style="border-bottom: rgb(135,135,135) dotted 1px;">
				<b><? echo utf8_encode($row['title']); ?></b><br>
				<span style="color: black;"><? echo $mes_txt." ".substr($row['date'],0,4); ?></span><br>
				<span style="color: black; font-style: italic;"><? echo utf8_encode($row['autor']); ?></span><br>
				<a href="../documentos/inesle/investigaciones/<? echo $row['pdf']; ?>" target="_blank" alt="Descargar PDF"><span style="color: firebrick;"><i class="far fa-file-pdf"></i></span> <? echo $row['pdf']; ?></a><br>
				<? if ($row['word']) { ?>
				<a href="../documentos/inesle/investigaciones/<? echo $row['word']; ?>" target="_blank" alt="Descargar Word"><span style="color: blue;"><i class="far fa-file-word"></i></span> <? echo $row['word']; ?></a>
				<? } ?>
			</p>
			</p>
			<? } ?>
			
			<button onclick="location.href='inesle'"><i class="fas fa-chevron-circle-left"></i> Volver</button>
			<button onclick="location.href='iniciativascompleto'">Listado completo</button>
			
			<img src="http://www.inesle.gob.mx/images/FI-5.jpg" style="width: 100%;">
		</div>
		<? include('boxbanner.php'); ?>
		
		<div style="clear: both;"></div>
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>