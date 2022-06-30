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
	<meta property="og:title" content="Solicitud de Información" />

	<link rel="icon" type="image/png" href="favicon.svg">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Solicitud de Información</title>
	
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
	
</head>

<body>
<div align="center">	
	<? include('headernew.php'); ?>
		
	<div id="contenido">
		<div style="width: 100%; max-width: 688px; margin: 0px 20px; float: left; text-align: justify;">
			<h1>Solicitud de Información</h1>
			<p>En el ejercicio del Derecho de Acceso a la Información, una solicitud de información es la petición que formula cualquier persona, sin necesidad de acreditar su personalidad ni interés jurídico, para acceder a la información pública generada o en poder de los sujetos obligados.</p>
			<p>Los sujetos obligados sólo proporcionarán la información pública que se les requiera y que obre en sus archivos. No estarán obligados a procesarla, resumirla, efectuar cálculos o practicar investigaciones.</p>
			<h3>¿Cómo la presento?</h3>
			<p>Puedes presentar tu solicitud de diferentes maneras:</p>
			<p><b>Verbal.</b> Acudiendo directamente al Módulo de Acceso de la Unidad de Información del Poder Legislativo, ubicado en:</p>
			<address>Independencia Oriente No.102, planta baja<br>Col. Centro<br>Toluca, Estado de México</address>
			<p>Tu solicitud debe ser resuelta en el momento. De no ser posible, puedes presentar la solicitud de información por escrito o vía electrónica.</p>
			
			<h2>Comité de Transparencia</h2>
			<p>El Comité de Transparencia del Poder Legislativo se integra por:</p>
			<ul>
				<li>Jesús Felipe Borja Coronel<br>Presidente del Comité de Información</li>
				<li>Juan José Hernández Vences<br>Contralor del Poder Legislativo</li>
				<li>Margarita Iliana Treviño Benítez<br>Titular del Archivo General del Poder Legislativo y responsable del Área Coordinadora de Archivos</li>
			</ul>
		</div>
		<? include('boxbanner.php'); ?>
		
		<div style="clear: both;"></div>
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>