<!doctype html>
<? 
include('config/tconnection.php');
$Coneccion = new TConeccion();
$query  = "SELECT * FROM cdd_comisiones WHERE id = ".$_GET['id'];
$Coneccion->Gestion($query);
$comision = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
?>

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
	<meta property="og:title" content="<? echo utf8_encode($comision['nombre']); ?>" />

	<link rel="icon" type="image/png" href="favicon.png">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title><? echo utf8_encode($comision['nombre']); ?></title>
	
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
			<h1><? echo utf8_encode($comision['nombre']); ?></h1>
			<div style="clear: both; height: 25px;"></div>
			<p>Las y los integrantes de los órganos directivos, comisiones y comités serán actualizadas/os de acuerdo a la integración de las mismas en la LXI Legislatura.</p>
		</div>		
		<? include('boxbanner.php'); ?>
		
	</div>
	<div style="clear: both"></div>
	
	<? include('footer.php'); ?>
	
</div>
</body>
</html>