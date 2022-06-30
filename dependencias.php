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
	<meta property="og:title" content="Dependencias" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Dependencias</title>
	
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
			<h1>Dependencias</h1>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_dependencias ORDER BY id ASC";
			$connect->Gestion($query);
			while($row = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)){
			?>
			
			<div class="dependencia">
				<h3><i class="far fa-building"></i> <? echo utf8_encode($row['dependencia']); ?></h3>
				<address><? echo nl2br(utf8_encode($row['domicilio'])); ?></address>
				<button onclick="window.open('<? echo $row['link']; ?>')">Micrositio</button>
			</div>
			<div style="clear: both;"></div>
			<? } ?>
			
			<!--<button onclick="window.open('/documentos/directorio/202107_directorio.pdf')">Directorio telefónico</button>-->
			
		</div>
		<? include('boxbanner.php'); ?>
		
		<div style="clear: both;"></div>
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>