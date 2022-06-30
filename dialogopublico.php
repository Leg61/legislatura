<!doctype html>
<? include('config/tconnection.php'); ?>
<?
	$connect = new TConeccion();
	$query  = "SELECT * FROM cdd_dialogopublico ORDER BY numero DESC LIMIT 1";
	$connect->Gestion($query);
	$thumbnail = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC);
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta property="og:description" content="" />
	<meta property="og:url" content="http://www.legislativoedomex.gob.mx/dialogopublico" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://www.legislativoedomex.gob.mx/img/dialogopublico/<? echo $thumbnail['img_portada']; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="482px" />
	<meta property="og:image:height" content="652px" />
	<meta property="og:title" content='Revista "Diálogo Público"' />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Revista "Diálogo Público"</title>
	
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
			<h1>Revista "Diálogo Público"</h1>
			<?
			$connect = new TConeccion();
			$query  = "SELECT * FROM cdd_dialogopublico ORDER BY numero DESC";
			$connect->Gestion($query);
			while($revista = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC)){
			?>
			<?
			$mes_in = substr($revista['periodo_inicio'],5,2);
			switch ($mes_in) {
				case "01":
					$mes_txt = "Enero";
					break;
				case "02":
					$mes_txt = "Febrero";
					break;
				case "03":
					$mes_txt = "Marzo";
					break;
				case "04":
					$mes_txt = "Abril";
					break;
				case "05":
					$mes_txt = "Mayo";
					break;
				case "06":
					$mes_txt = "Junio";
					break;
				case "07":
					$mes_txt = "Julio";
					break;
				case "08":
					$mes_txt = "Agosto";
					break;
				case "09":
					$mes_txt = "Septiembre";
					break;
				case "10":
					$mes_txt = "Octubre";
					break;
				case "11":
					$mes_txt = "Noviembre";
					break;
				case "12":
					$mes_txt = "Diciembre";
					break;
			}
			?>
			<?
			$mes_end = substr($revista['periodo_fin'],5,2);
			switch ($mes_end) {
				case "01":
					$mes_fin = "enero";
					break;
				case "02":
					$mes_fin = "febrero";
					break;
				case "03":
					$mes_fin = "marzo";
					break;
				case "04":
					$mes_fin = "abril";
					break;
				case "05":
					$mes_fin = "mayo";
					break;
				case "06":
					$mes_fin = "junio";
					break;
				case "07":
					$mes_fin = "julio";
					break;
				case "08":
					$mes_fin = "agosto";
					break;
				case "09":
					$mes_fin = "septiembre";
					break;
				case "10":
					$mes_fin = "octubre";
					break;
				case "11":
					$mes_fin = "noviembre";
					break;
				case "12":
					$mes_fin = "diciembre";
					break;
			}
			?>
			
			<a href="documentos/revistadialogo/<? echo $revista['pdf']; ?>" target="_blank" title="Abrir en PDF">
				<div>
					<div style="margin: 0px 20px 0px 0px; float: left;"><img src="img/dialogopublico/<? echo $revista['img_portada']; ?>" style="width: 100%; max-width: 150px; box-shadow: rgba(100,100,100,0.5) 5px 5px 5px;"></div>
					<div style="float: left; font-size: 1.4em;">
						<span style="font-size: 0.8em;">No. <? echo utf8_encode($revista['numero']); ?> - Año <? echo utf8_encode($revista['year']); ?></span><br>
						<b><? echo $mes_txt." ".substr($revista['periodo_inicio'],0,4)." - ".$mes_fin." ".substr($revista['periodo_fin'],0,4); ?></b>
					</div>
					<div style="clear: both; border-bottom: rgb(135,135,135) dotted 1px; height: 25px;"></div>
				</div>
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