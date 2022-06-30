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
	<meta property="og:title" content="Derechos de niñas, niños y adolescentes" />

	<link rel="icon" type="image/png" href="favicon.svg">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Derechos de niñas, niños y adolescentes</title>
	
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
	<? include('headernew.php'); ?>
		
	<div id="contenido">
		<div style="width: 100%; max-width: 688px; margin: 0px 20px; float: left; text-align: justify;">
			<h1>Derechos de niñas, niños y adolescentes</h1>
			<p>Compendio del marco jurídico internacional y regional sobre derechos de niñas, niños y adolescentes</p>
			
			<a href="documentos/otros/presentacion.pdf" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name">Presentación (PDF - 370 KB)</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>

			<a href="documentos/otros/contenido.pdf" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name">Contenido (PDF- 293 KB)</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>

			<a href="documentos/otros/capitulo_1_marco_juridico_internacional.pdf" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name">Capítulo I. Marco jurídico internacional (PDF - 342 KB)</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>

			<a href="documentos/otros/capitulo_2_marco_juridico_nacional.pdf" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name">Capítulo II. Marco jurídico nacional (PDF - 3.1 MB)</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>

			<a href="documentos/otros/capitulo_3_marco_juricio_local.pdf" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name">Capítulo III. Marco jurídico local (PDF - 3.3 MB)</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>

			<a href="documentos/otros/fuentes_consultadas.pdf" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name">Fuentes consultadas (PDF - 342 KB)</div>
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