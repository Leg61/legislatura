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
	<meta property="og:title" content="Convocatoria para el Parlamento Abierto Regional - SECTEC" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Convocatoria para el Parlamento Abierto Regional - SECTEC</title>
	
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
			<img src="img/banners/parlamentoabiertoregional.png" alt="Parlamento Abierto Regional" style="width: 100%; margin: 25px auto;">
			<p>Por acuerdo de la Mesa Directiva del Parlamento Abierto, se aprueba la</p>
			<h1>Convocatoria</h1>
			<h3>A los ciudadanosinteresados que residen en alguno de los 125 municipios que conforman el Estado de México:</h3>
			<p>Para que participen y se integren a los trabajosdel Parlamento Abierto Regional que se llevará a cabopara el análisis y estudio de la reforma constitucional y el marco legal del Estado de México.</p>
			<div style="background:linear-gradient( 40deg, rgb(250,250,250,1.00) 0%, rgb(225,225,225,1.00) 100% ); font-family: 'Roboto', sans-serif; font-size:1.8em; font-weight: 500; padding: 10px 10px 10px 25px; margin: 50px auto; color: rgba(135,0,65,1.00); box-shadow: rgba(0,0,0,0.3) 2px 2px 2px; border-left: rgb(128,0,72) solid 5px; width: 100%; max-width: 380px; text-align: left;">Regístrate antes del 30 de septiembre de 2021<br><button onclick="location.href='https://sectec.safapi.com.mx/RegistroRegional'">Registro</button></div>
		</div>
		<? include('boxbanner.php'); ?>
		
		<div style="clear: both;"></div>
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>