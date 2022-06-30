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
	<meta property="og:title" content="Diario de Debates" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Diario de Debates</title>
	
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
		<div id="contenido_left">
			<h1>Diario de Debates</h1>
			
			<p>Responsable de la información: <a href="http://www.secretariadeasuntosparlamentarios.gob.mx/" target="_blank"><b>Secretaría de Asuntos Parlamentarios</b></a></p>			
			
			<div style="width: 100%; margin: auto;">
				<!--<button onclick="location.href='diputados.php'">Alfabético</button>-->
				<button onclick="location.href='iniciativas'">Iniciativas</button>
				<button onclick="location.href='asistencias'">Asistencias</button>
				<button onclick="location.href='debates'">Diario de debates</button>
				<!--<button onclick="location.href='municipios.php'">Municipios</button>-->
			</div>

			<!-- ASISTENCIAS --->
			<? include('debates_list.php'); ?>
			<!-- FIN ASISTENCIAS -->
						
		</div>
		<? include('boxbanner.php'); ?>
		
		<div style="clear: both;"></div>
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>