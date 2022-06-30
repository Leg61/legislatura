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
	<meta property="og:title" content="Comisiones y Comités" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Comisiones y comités</title>
	
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
			<h1>Comisiones y comités</h1>
			<div style="height: 30px; clear: both;"></div>
			
			
			<a href="#ordinarias"><i class="fas fa-users"></i> Comisiones Legislativas</a> - <a href="#especiales"><i class="fas fa-users"></i> Comisiones Especiales</a> - <a href="#comites"><i class="fas fa-users"></i> Comités</a>
			
			<button onclick="location.href='comisionesalfabetico'">Orden alfabético</button>
			
			<div style="height: 30px; clear: both;"></div>
			
			<div style="height: 30px; clear: both;"></div>
			<h2>Comisiones Legislativas</h2>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_comisiones WHERE tipo = 'ordinaria' AND id != 1 AND id != 2 ORDER BY id ASC";
			$connect->Gestion($query);
			while($comision = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)){
			?>

			<a href="comision-<? echo $comision['id']; ?>">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="fas fa-users"></i></div>
					<div class="ley_name"><? echo utf8_encode($comision['nombre']); ?></div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>
			<? } ?>	
			
			<div style="height: 30px; clear: both;"></div>
			<h2>Comisiones Especiales</h2>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_comisiones WHERE tipo = 'especial'";
			$connect->Gestion($query);
			while($comision = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)){
			?>

			<a href="comision-<? echo $comision['id']; ?>">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="fas fa-users"></i></div>
					<div class="ley_name"><? echo utf8_encode($comision['nombre']); ?></div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>
			<? } ?>	
			
			<div style="height: 30px; clear: both;"></div>
			<h2>Comités Permanentes</h2>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_comisiones WHERE tipo = 'comite'";
			$connect->Gestion($query);
			while($comision = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)){
			?>

			<a href="comision-<? echo $comision['id']; ?>">
				<div class="bloque_ley">
					<div class="icon_pdf"><i class="fas fa-users"></i></div>
					<div class="ley_name"><? echo utf8_encode($comision['nombre']); ?></div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</a>
			<? } ?>	

		</div>
		
		<? include('boxbanner.php'); ?>
		
	</div>
	<div style="clear: both"></div>
	
	<? include('footer.php'); ?>
	
</div>
</body>
</html>