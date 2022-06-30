<!doctype html>
<? include('config/tconnection.php'); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta property="og:description" content="" />
	<meta property="og:url" content="http://www.cddiputados.gob.mx" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="Av. Miguel Hidalgo Ote. s/n, Centro, 50000 Toluca de Lerdo, Méx." />
	<meta property="og:image:height" content="" />
	<meta property="og:title" content="Buscador" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Buscador</title>
	
	<script src="https://kit.fontawesome.com/e6414ed8fa.js" crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
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
			<h1>Buscador</h1>
			<!-- BUSCADOR -->
			<form method="get" action="buscador">
				<input type="text" name="tema" placeholder="" id="input_buscador_mob">
				<button id="boton_buscador"><i class="fas fa-search"></i></button>
			</form>
			<!-- FIN BUSCADOR -->
		</div>
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>