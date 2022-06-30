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
	<meta property="og:title" content="Avisos de privacidad" />

	<link rel="icon" type="image/png" href="favicon.svg">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Avisos de privacidad</title>
	
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
			<h1>Avisos de privacidad</h1>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_dependencias ORDER BY id ASC";
			$connect->Gestion($query);
			while($dependencia = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)){
			?>
			
			<?
			$con_aviso = new TConeccion();
			$query_aviso  = "SELECT * FROM cdd_avisosprivacidad WHERE id_dependencia = ".$dependencia['id'];
			$con_aviso->Gestion($query_aviso);
			$aviso = mysqli_fetch_array($con_aviso->Query,MYSQLI_ASSOC);
			?>
			
			<? if ($aviso['id']) { ?>
			
			<div style="background: linear-gradient( 40deg, rgb(250,250,250,1.00) 0%, rgb(225,225,225,1.00) 100% ); padding: 10px 10px 10px 25px; border-left: rgb(128,0,72) solid 5px; color: rgba(135,0,65,1.00); margin: 10px auto; box-shadow: rgba(0,0,0,0.3) 2px 2px 2px;">
				<h2><? echo utf8_encode($dependencia['dependencia']); ?></h2>
				
				<?
				$con_aviso = new TConeccion();
				$query_aviso  = "SELECT * FROM cdd_avisosprivacidad WHERE id_dependencia = ".$dependencia['id']." ORDER BY title ASC";
				$con_aviso->Gestion($query_aviso);
				while($aviso = mysqli_fetch_array($con_aviso->Query,MYSQLI_ASSOC)){
				?>
				
				<a href="documentos/avisosprivacidad/<? echo $aviso['file']; ?>" target="_blank">
					<div class="bloque_ley">
						<div class="icon_pdf"><i class="far fa-file-pdf"></i></div>
						<div class="ley_name"><? echo utf8_encode($aviso['title']); ?></div>
						<div style="clear: both;"></div>
					</div>
					<div style="clear: both;"></div>
				</a>
				<? } ?>
				
			</div>
			<? } ?>
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