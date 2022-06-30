<!doctype html>
<? include('config/tconnection.php'); ?>
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
			<h1>Diputadas y Diputados</h1>
			<h2>Sobre la integración de la LXI Legislatura</h2>
			<p>Con el fin de dar certeza sobre la integración definitiva de la LXI Legislatura del Estado de México, y dado que la misma aún está sujeta a resoluciones pendientes por parte del Tribunal Electoral del Poder Judicial de la Federación, esta sección será actualizada hasta contar con la lista definitiva.</p>
			<p>Agradecemos su comprensión.</p>
		</div>
		
		<? include('boxbanner.php'); ?>
		
	</div>
	<div style="clear: both"></div>
	
	<? include('footer.php'); ?>
	
</div>
</body>
</html>