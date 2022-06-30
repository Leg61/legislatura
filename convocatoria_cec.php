<!doctype html>
<? include('config/tconnection.php'); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta property="og:description" content="" />
	<meta property="og:url" content="http://www.legislativoedomex.gob.mx/convocatoriatjaem" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="" />
	<meta property="og:image:height" content="" />
	<meta property="og:title" content="Convocatoria Pública para elegir integrantes del Consejo Estatal Ciudadano previsto en la Ley en Materia de Desaparición Forzada de Personas y Desaparición Cometida por Particulares para el Estado Libre y Soberano de México" />

	<link rel="icon" type="image/png" href="favicon.svg">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Convocatoria Pública para elegir integrantes del Consejo Estatal Ciudadano previsto en la Ley en Materia de Desaparición Forzada de Personas y Desaparición Cometida por Particulares para el Estado Libre y Soberano de México</title>
	
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
			<h1>Convocatoria Pública para elegir integrantes del Consejo Estatal Ciudadano previsto en la Ley en Materia de Desaparición Forzada de Personas y Desaparición Cometida por Particulares para el Estado Libre y Soberano de México</h1>
			<a href="documentos/otros/convocatoria_cec.pdf" target="_blank"><div class="asuntos">Consultar convocatoria en PDF</div></a>
			
			<a href="documentos/otros/consentimiento-datos-personales-CEC.pdf" target="_blank"><div class="asuntos" style="font-size: 0.85em;">Consentimiento para tratamiento de datos personales</div></a>
			<a href="documentos/otros/aviso-de-privacidad-cec.pdf" target="_blank"><div class="asuntos">Aviso de privacidad</div></a>
			
		</div>
		<? include('boxbanner.php'); ?>
		
		<div style="clear: both;"></div>
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>