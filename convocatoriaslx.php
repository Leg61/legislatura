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
	<meta property="og:title" content="Convocatorias" />

	<link rel="icon" type="image/png" href="favicon.svg">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Convocatorias</title>
	
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
			<h1>Convocatorias</h1>
			<a href="convocatoriatjaem">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name">Convocatoria para la designación del titular del Órgano Interno de Control del Tribunal de Justicia Administrativa del Estado de México</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>			
			<a href="convocatoriacodhem">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name">Convocatoria para nombrar comisionadas o comisionados del Instituto de Transparencia, Acceso a la Infomación Pública y Protección de Datos Personales del Estado de México y Municipios (Infoem)</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>			
			<a href="convocatoriainfoem">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name">Convocatoria para nombrar comisionadas o comisionados del Instituto de Transparencia, Acceso a la Infomación Pública y Protección de Datos Personales del Estado de México y Municipios (Infoem)</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>			
			<a href="convocatoriateem">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name">Convocatoria para la designación del contralor general del Tribunal Electoral del Estado de México</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>			
		</div>
		<? include('boxbanner.php'); ?>
		
		<div style="clear: both;"></div>
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>