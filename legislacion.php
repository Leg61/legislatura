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
	<meta property="og:title" content="Legislación vigente" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Legislación vigente</title>
	
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
			<h1>Legislación vigente</h1>
			<div style="height: 30px; clear: both;"></div>
			<button onclick="location.href='#codigos'">Códigos</button>
			<button onclick="location.href='#reglamentos'">Reglamentos</button>
			<h2>Constitución</h2>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_legislacion WHERE id_tipoley = 1";
			$connect->Gestion($query);
			$ley = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC);
			?>
			
			<a href="documentos/leyes/pdf/<? echo $ley['pdf']; ?>" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name"><? echo utf8_encode($ley['nombre']); ?></div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>
			<div style="height: 30px; clear: both;"></div>
			
			<h2>Leyes</h2>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_legislacion WHERE id_tipoley = 2 ORDER BY nombre ASC";
			$connect->Gestion($query);
			while($ley = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)){
			?>

			<a href="documentos/leyes/pdf/<? echo $ley['pdf']; ?>" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name"><? echo utf8_encode($ley['nombre']); ?></div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>
			<? } ?>	
			
			<div style="height: 30px; clear: both;"></div>
			
			<a id="codigos"></a>
			<h2>Códigos</h2>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_legislacion WHERE id_tipoley = 3 ORDER BY nombre ASC";
			$connect->Gestion($query);
			while($ley = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)){
			?>

			<a href="documentos/leyes/pdf/<? echo $ley['pdf']; ?>" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name"><? echo utf8_encode($ley['nombre']); ?></div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>
			<? } ?>	
			
			<div style="height: 30px; clear: both;"></div>
			
			<div id="reglamentos"></div>
			<h2>Reglamentos</h2>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_legislacion WHERE id_tipoley = 4 ORDER BY nombre ASC";
			$connect->Gestion($query);
			while($ley = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)){
			?>

			<a href="documentos/leyes/pdf/<? echo $ley['pdf']; ?>" target="_blank">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
					<div class="ley_name"><? echo utf8_encode($ley['nombre']); ?></div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>
			<? } ?>	
			
			<div style="clear: both;"></div>
		</div>
		<? include('boxbanner.php'); ?>
		
		<div style="clear: both;"></div>
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>