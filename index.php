<!doctype html>
<? include('config/tconnection.php'); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="keywords" content="">
	<meta name="description" content="Plaza Hidalgo s/n, Centro, 50000 Toluca de Lerdo, Méx.">
	<meta property="og:description" content="Plaza Hidalgo s/n, Centro, 50000 Toluca de Lerdo, Méx." />
	<meta property="og:url" content="http://www.legislativoedomex.gob.mx" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="" />
	<meta property="og:image:height" content="" />
	<meta property="og:title" content="LXI Legislatura del Estado de México" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu_home.css" rel="stylesheet" type="text/css">
	<link href="css/grid.css" rel="stylesheet" type="text/css">
	
	<title>LXI Legislatura del Estado de México</title>
	
	<script src="https://kit.fontawesome.com/e6414ed8fa.js" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="js/shadowbox/shadowbox.css">
	<script type="text/javascript" src="js/shadowbox/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init({
			language:   "es"
		});
	</script>	
	
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

<body style="background:linear-gradient( 40deg, rgb(32,0,18,1.00) 0%, rgb(150,0,72,1.00) 100% );">
<div align="center">	
	
	<!-- POP UP -->
	<!--
	<div class="overlay" style="z-index: 1000;">
		<div class="videoBox" id="videobox">
			<a class="close"></a>
			<video autoplay="autoplay" controls="controls" src="img/banners/dia_naranja.mp4"></video>
			<a href="/60delalx" target="_blank"><img src="img/banners/popup_60delx.jpg" alt="Las 60 de la LX" style="width: 90%; max-width: 650px;"></a>
		</div>
	</div>
	<script>
		$(function() {
			// CLOSE AND REMOVE ON ESC
			$(document).on('keyup',function(e) {
				if (e.keyCode == 27) {
					$('.overlay').remove();
				}
			});
			
			// CLOSE AND REMOVE ON CLICK
			$('body').on('click','.overlay, .close', function() {
				$('.overlay').remove();
			});
			
			// SO PLAYING WITH THE VIDEO CONTROLS DOES NOT
			// CLOSE THE POPUP
			$('body').on('click','.videoBox', function(e) {
				e.stopPropagation();
			});
		});
	</script>
	--->
	<!-- FIN POP UP -->
	
	<header class="large">

		<!-- MENU RESPONSIVO --->
		<div id="responsive">
			<nav>
				<a href="index.php"><div style="float: left; display: block;"><img src="img/congreso_edomex.svg" class="logo"></div></a>
				<div id="salto_menu"></div>
				<ul class="topnav">
					<li><a href="diputadasydiputados">Diputadas/os</a>
					<li><a href="comision-1">JUCOPO</a>
					<li><a href="comisiones">Comisiones</a>
					<li><a href="dependencias">Dependencias</a>
					<li><a href="asuntos">Asuntos</a></li>
					<li><a href="gaceta">Gaceta</a>
					<li><a href="legislacion">Legislación</a></li>
					<li><a href="transparencia">Transparencia</a></li>
					<li><a href="search"><i class="fas fa-search"></i></a></li>
					<li class="icon"><a href="javascript:void(0);" style="font-size:1.3em;" onClick="myFunction()">&#9776;</a></li>
				</ul>
			</nav>
			<script>
				function myFunction() {
					document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
				}
			</script>
		</div>
		<!-- FIN MENU RESPONSIVO --->
		
		<!-- MENU DESPLEGABLE --->
		<div id="scrolldown">
			<nav style="width:95%; margin-top:0px;">
				<a href="index"><div style="float: left; display: block;"><img src="img/congreso_edomex.svg" class="logo"></div></a>
				<div id="socialbox">
					<div class="social"><a href="http://fb.me/legismex" target="_blank" title="Facebook" class="social"><i class="fab fa-facebook"></i></a></div>
					<div class="social"><a href="http://twitter.com/legismex" target="_blank" title="Twitter" class="social"><i class="fab fa-twitter"></i></a></div>
					<div class="social"><a href="http://instagram.com/legismex" target="_blank" title="Instagram" class="social"><i class="fab fa-instagram"></i></a></div>
					<div class="social"><a href="https://www.youtube.com/c/LegislaturaEdoMex" target="_blank" title="YouTube" class="social"><i class="fab fa-youtube"></i></a></div>
				</div>
				<div style="clear: both;"></div>
				<ul class="menu">
					<li class="menu"><a href="diputados">Legislatura &#9662;</a>
						<ul class="dropdown">
							<li class="menu"><a href="diputadasydiputados">Diputadas/os</a></li>
							<li class="menu"><a href="comision-1">JUCOPO</a></li>
							<!--<li class="menu"><a href="comision.php?id=2">Mesa Directiva</a></li>-->
							<li class="menu"><a href="comisiones">Comisiones</a></li>
							<li class="menu"><a href="dependencias">Dependencias</a></li>
						</ul>
					</li>
					<li class="menu"><a href="iniciativas">Trabajo &#9662;</a>
						<ul class="dropdown">
							<li class="menu"><a href="asuntos">Asuntos</a></li>
							<li class="menu"><a href="gaceta">Gaceta</a></li>
							<li class="menu"><a href="legislacion">Legislación</a></li>
						</ul>
					</li>
					<li class="menu"><a href="transparencia">Transparencia</a></li>
					<!--<li class="menu"><a href="http://www.amnistiaedomex.gob.mx/landing" target="_blank">Amnistía</a></li>-->
				</ul>
			</nav>
		</div>
		<!-- FIN MENU DESPLEGABLE --->
	</header>
		
	<?
	$con_img = new TConeccion();
	$query_img  = "SELECT * FROM cdd_carrusel ORDER BY RAND() LIMIT 1";
	$con_img->Gestion($query_img);
	$img = mysqli_fetch_array($con_img->Query,MYSQLI_ASSOC);
	?>

	<div id="section" style="background:url(img/carrusel/<? echo $img['img']; ?>) top center no-repeat fixed;">
				
		<!-- BUSCADOR -->
		<div id="box_buscador_desk">
			<form method="get" action="buscador">
				<input type="text" name="tema" class="desk">
				<button id="boton_buscador"><i class="fas fa-search"></i></button>
				<div style="clear: both"></div>
			</form>
			<!--
			<p style="text-align: justify; font-size: 0.9em; color: rgb(255,255,255); text-shadow: rgb(0,0,0) 1px 1px 1px;">El contenido de esta página ha sido temporalmente modificado por la suspensión de la difusión en los medios de comunicación de toda propaganda gubernamental durante el tiempo que comprende el proceso de Consulta Popular, desde la convocatoria y hasta la conclusión de la jornada consultiva (15 de julio al 01 de agosto de 2021). Lo anterior de conformidad con lo dispuesto tanto por la fracción VIII del artículo 35 de la Constitución Política de los Estados Unidos Mexicanos como por los numerales veintiséis y veintisiete del Acuerdo del Consejo General del Instituto Nacional Electoral por el cual se asignan los tiempos en radio y televisión para la difusión de la consulta popular, se  aprueban los criterios de distribución de tiempos para autoridades electorales, así como el procedimiento que regule la suspensión de propaganda gubernamental.</p>
			-->
		</div>

		<div id="box_buscador_movil">
			<form method="get" action="buscador">
				<input type="text" name="tema" placeholder="Ingresa una palabra..." class="movil">
				<button id="boton_buscador"><i class="fas fa-search"></i></button>
				<div style="clear: both"></div>
			</form>
		</div>		
		<!-- FIN BUSCADOR -->

		<!-- LEYENDA VEDA 02 -->
		<!--
		<div style="background: rgba(0,0,0,0.35); padding: 20px 40px; border-radius: 30px; width: 80%; max-width: 800px; margin: 10px auto;">
			<p style="text-align: justify; font-size: 0.8em; color: rgb(255,255,255); text-shadow: rgb(0,0,0) 1px 1px 1px;">El contenido de esta página ha sido temporalmente modificado por la suspensión de la difusión en los medios de comunicación de toda propaganda gubernamental durante el tiempo que comprende el proceso de Consulta Popular, desde la convocatoria y hasta la conclusión de la jornada consultiva (15 de julio al 01 de agosto de 2021). Lo anterior de conformidad con lo dispuesto tanto por la fracción VIII del artículo 35 de la Constitución Política de los Estados Unidos Mexicanos como por los numerales veintiséis y veintisiete del Acuerdo del Consejo General del Instituto Nacional Electoral por el cual se asignan los tiempos en radio y televisión para la difusión de la consulta popular, se  aprueban los criterios de distribución de tiempos para autoridades electorales, así como el procedimiento que regule la suspensión de propaganda gubernamental.</p>
		</div>
		-->
		<!-- FIN LEYENDA VEDA 02 -->
		
		
		<!-- CONTENT -->
		<div style="width: 95%; max-width: 1210px; margin: 15px auto; padding: 10px 0px; background: rgba(0,0,0,0.4);">
			<div id="reciente">
				<h1 style="color: white;">Lo más reciente</h1>
				<?
				$Coneccion = new TConeccion();
				$query  = "SELECT * FROM cdd_comunicados61 ORDER BY comunicado DESC LIMIT 0,6";
				$Coneccion->Gestion($query);
				while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
				?>
				
				<?
					$mes_in = substr($row['fecha'],5,2);
					switch ($mes_in) {
						case "01":
							$mes_txt = "enero";
							break;
						case "02":
							$mes_txt = "febrero";
							break;
						case "03":
							$mes_txt = "marzo";
							break;
						case "04":
							$mes_txt = "abril";
							break;
						case "05":
							$mes_txt = "mayo";
							break;
						case "06":
							$mes_txt = "junio";
							break;
						case "07":
							$mes_txt = "julio";
							break;
						case "08":
							$mes_txt = "agosto";
							break;
						case "09":
							$mes_txt = "septiembre";
							break;
						case "10":
							$mes_txt = "octubre";
							break;
						case "11":
							$mes_txt = "noviembre";
							break;
						case "12":
							$mes_txt = "diciembre";
							break;
					}
				?>
				
				<div class="grid">
					<figure class="effect-sadie">
						<?
						$con_foto = new TConeccion();
						$query_foto  = "SELECT * FROM cdd_fotos WHERE comunicado = ".$row['comunicado'];
						$con_foto->Gestion($query_foto);
						$foto = mysqli_fetch_array($con_foto->Query,MYSQLI_ASSOC);
						?>

						<img src="../img/fotos/comunicados/<? echo $foto['foto']; ?>" alt="<? echo utf8_encode($row['titulo']); ?>"/>
						<figcaption>
							<h2><span style="font-size: 0.8em; font-weight: 400;"><? echo substr($row['fecha'],8,2); ?> de <? echo $mes_txt ?>, <? echo substr($row['fecha'],0,4); ?></span><br><? echo utf8_encode($row['titulo']); ?></h2>
							<a href="comunicado-<? echo $row['comunicado']; ?>" title="Leer más">Leer más</a>
						</figcaption>
					</figure>
				</div>
				<? } ?>
				
				<div style="clear: both"></div>
				<button onclick="location.href='prensa'">Más noticias</button>
			</div>
		</div>
		
		
		<div style="width: 95%; max-width: 580px; margin: auto; padding: 30px; background: rgba(0,0,0,0.4);">
			
			<!-- YOUTUBE -->
			
			<h1 style="color: white;">Previamente</h1>
			<div id="streaming_desktop">
			<div style="width: 560px; height: 430px; margin: auto;">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=UU9kqSF0ZBUhSRp4cyWL_oAA&autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<button onclick="window.open('https://www.youtube.com/c/LegislaturaEdoMex','_blank');">Canal de YouTube</button>
			</div>
			</div>
			<div id="streaming_mobile">
			<div style="width: 360px; height: 320px; margin: auto;">
				<iframe width="360" height="205" src="https://www.youtube.com/embed/videoseries?list=UU9kqSF0ZBUhSRp4cyWL_oAA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<button onclick="window.open('https://www.youtube.com/c/LegislaturaEdoMex','_blank');">Canal de YouTube</button>
			</div>
			</div>
			
			<!-- FIN YOUTUBE -->
			
			<!-- EN VIVO YOUTUBE -->
			<!--
			<h1 style="color: white;"><img src="img/live.gif" height="15px" width="15px"> En vivo</h1>
			<p style="color: white; text-align: left;">Sesión deliberante</p>
			<div id="streaming_desktop">
			<div style="width: 560px; margin: auto;">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/U7d-6wQrnjI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div style="clear: both"></div>
			</div>
			</div>
			<div id="streaming_mobile">
			<div style="width: 360px; margin: auto;">
				<iframe width="360" height="205" src="https://www.youtube.com/embed/U7d-6wQrnjI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div style="clear: both"></div>
			</div>
			</div>
			-->
			<!-- FIN EN VIVO YOUTUBE -->
			
			
			<!-- EN VIVO FACEBOOK -->
			<!--
			<div id="streaming_desktop">
			<div style="width: 560px; height: 350px; margin: auto;">
				<h1 style="color: white;">En vivo <img src="img/live.gif" height="15px" width="15px"></h1>
				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Flegismex%2Fvideos%2F603830503970527%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
			</div>
			</div>
						
			<div id="streaming_mobile">
			<div style="width: 360px; height: 240px; margin: auto;">
				<h1 style="color: white;">En vivo <img src="img/live.gif" height="15px" width="15px"></h1>
				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Flegismex%2Fvideos%2F603830503970527%2F&show_text=false&width=360&t=0" width="360" height="205" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
			</div>
			</div>
			-->
			<!-- FIN EN VIVO FACEBOOK -->
			
			
			<!-- TRANSMISIÓN EN VIVO LIVESTREAM -->
			<!--
			<div id="streaming_desktop">
			<div style="width: 560px; height: 430px; margin: auto;">
				<h1 style="color: white;">En vivo <img src="img/live.gif" height="15px" width="15px"></h1>
				<iframe style="max-width: 100%; display: block; margin: auto;" src="http://www.livestreamingservices.com/html5pro/tvlegismex.php" scrolling="no" allowfullscreen="allowfullscreen" width="560" height="315" frameborder="0" align="middle"></iframe>
				<div style="clear: both"></div>
			</div>
			</div>

			<div id="streaming_mobile">
			<div style="width: 100%; padding: 10px 0px; height: 205px; margin: auto;">
				<h1 style="color: white;">En vivo</h1>
				<iframe style="max-width: 100%; display: block; margin: auto;" src="http://www.livestreamingservices.com/html5pro/tvlegismex.php" scrolling="no" allowfullscreen="allowfullscreen" width="360" height="205" frameborder="0" align="middle"></iframe>
				<div style="clear: both"></div>
			</div>
			</div>
			-->
			<!-- FIN TRANSMISIÓN EN VIVO MOBILE LIVESTREAM -->
			
			<div style="clear: both"></div>
		</div>
	</div>
	
	<div style="width: 100%; padding: 0px; background:linear-gradient( 45deg, rgba(116,0,48,1.00) 20%, rgba(186,172,178,1.00) 100% );">
		<div style="width: 100%; max-width: 1110px; margin: auto; padding: 30px 0px;">
			<h1 style="color: white;">Actividades</h1>
			
			<!-- PRÓXIMOS -->
			<div style="width: 90%; max-width: 500px; padding: 15px; margin: auto; float: left; border: rgba(255,255,255,1.0) solid 1px; background: rgba(255,255,255,1.0); box-shadow: rgba(116,0,48,0.40) 2px 2px 10px; margin: 10px;">
			<h2>Próximas</h2>
			<?
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_eventos WHERE fecha >= '".date('Y-m-d')."' ORDER BY fecha ASC LIMIT 0,3";
			$Coneccion->Gestion($query);
			$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
			if ($row['fecha'] == "") { echo "<p>Espera pronto nuestra agenda de próximas actividades</p>"; }
			?>			
			<?
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_eventos WHERE fecha >= '".date('Y-m-d')."' ORDER BY fecha ASC LIMIT 0,3";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
				
				$mes_in = substr($row['fecha'],5,2);
				switch ($mes_in) {
					case "01":
						$mes_txt = "Ene";
						break;
					case "02":
						$mes_txt = "Feb";
						break;
					case "03":
						$mes_txt = "Mar";
						break;
					case "04":
						$mes_txt = "Abr";
						break;
					case "05":
						$mes_txt = "May";
						break;
					case "06":
						$mes_txt = "Jun";
						break;
					case "07":
						$mes_txt = "Jul";
						break;
					case "08":
						$mes_txt = "Ago";
						break;
					case "09":
						$mes_txt = "Sep";
						break;
					case "10":
						$mes_txt = "Oct";
						break;
					case "11":
						$mes_txt = "Nov";
						break;
					case "12":
						$mes_txt = "Dic";
						break;
				}
				
				$day_txt	=	substr($row['fecha'],8,2);
				if (substr($day_txt,0,1) == "0") { $day_txt = substr($day_txt,1,1); }
				$month_txt	=	substr($row['fecha'],5,2);
				if (substr($month_txt,0,1) == "0") { $month_txt = substr($month_txt,1,1); }
				$year_txt	=	substr($row['fecha'],0,4);
				
				$dia_semana = date("w", mktime(0, 0, 0, $month_txt, $day_txt, $year_txt));
				switch ($dia_semana) {
					case "0":
						$weekday = "Domingo";
						break;
					case "1":
						$weekday = "Lunes";
						break;
					case "2":
						$weekday = "Martes";
						break;
					case "3":
						$weekday = "Miércoles";
						break;
					case "4":
						$weekday = "Jueves";
						break;
					case "5":
						$weekday = "Viernes";
						break;
					case "6":
						$weekday = "Sábado";
						break;
				}
			
			
			?>
			
			<!-- EVENTO -->
			<!-- DESKTOP -->
			<div class="event_desktop">
				<div style="width: 58px; height: 58px; border: rgba(0,0,0,0.2) solid 1px; float: left; margin-right: 20px; background: rgba(255,255,255,1.0);">
					<span style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 1.1em; text-align: center; text-transform: uppercase;"><? echo $mes_txt; ?></span><br>
					<span style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 2.0em; font-weight: 500; text-align: center;"><? echo substr($row['fecha'],8,2); ?></span>
				</div>
				<div style="width: auto; float: left; text-align: left; max-width: 420px;">
					<span style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 0.9em; "><? echo $weekday; ?> - <i class="far fa-clock"></i> <? echo substr($row['fecha'],11,5)." hrs."; ?></span><br>
					<span style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 1.1em; font-weight: 500; "><? echo substr(utf8_encode($row['descripcion']),0,120); ?></span><br>
					<?
					$con_sede = new TConeccion();
					$query_sede  = "SELECT * FROM cdd_sedes WHERE id = ".$row['id_sede'];
					$con_sede->Gestion($query_sede);
					$sede = mysqli_fetch_array($con_sede->Query,MYSQLI_ASSOC);
					?>
					<span style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 0.9em; "><i class="fas fa-map-marker-alt"></i> <? echo substr(utf8_encode($sede['sede']),0,120); ?></span>
				</div>
				<div style="clear: both; height: 20px;"></div>
			</div>
			<div style="clear: both; height: 20px;"></div>
			<!-- FIN DESKTOP -->
			
			<!-- MOBILE -->
			<div class="event_mobile">
			</div>
			<!-- FIN MOBILE -->
			<!-- FIN EVENTO -->
			<? } ?>
			
			<!-- MÁS EVENTOS -->
			<?
			$contador = 0;
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_eventos WHERE fecha >= '".date('Y-m-d')."' ORDER BY fecha ASC";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
				$contador++;
			}
			?>
			<? if ($contador >= 2) { ?>
			<a href="eventos"><div class="myDIV" style="background:rgb(150,0,72);">Más información</div></a>
			<? } ?>
			<!-- FIN MÁS EVENTOS -->
			<div style="clear: both"></div>
			</div>
			<!--FIN PRÓXIMOS -->
			
			<!-- RECIENTES -->
			<div style="width: 90%; max-width: 500px; padding: 15px; margin: auto; float: left; border: rgba(255,255,255,1.0) solid 1px; background: rgba(255,255,255,1.0); box-shadow: rgba(116,0,48,0.40) 2px 2px 10px; margin: 10px;">
			<h2>Recientes</h2>
			<?
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_eventos WHERE fecha <= '".date('Y-m-d')."' ORDER BY fecha DESC LIMIT 0,3";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
				
				$mes_in = substr($row['fecha'],5,2);
				switch ($mes_in) {
					case "01":
						$mes_txt = "Ene";
						break;
					case "02":
						$mes_txt = "Feb";
						break;
					case "03":
						$mes_txt = "Mar";
						break;
					case "04":
						$mes_txt = "Abr";
						break;
					case "05":
						$mes_txt = "May";
						break;
					case "06":
						$mes_txt = "Jun";
						break;
					case "07":
						$mes_txt = "Jul";
						break;
					case "08":
						$mes_txt = "Ago";
						break;
					case "09":
						$mes_txt = "Sep";
						break;
					case "10":
						$mes_txt = "Oct";
						break;
					case "11":
						$mes_txt = "Nov";
						break;
					case "12":
						$mes_txt = "Dic";
						break;
				}
				
				$day_txt	=	substr($row['fecha'],8,2);
				if (substr($day_txt,0,1) == "0") { $day_txt = substr($day_txt,1,1); }
				$month_txt	=	substr($row['fecha'],5,2);
				if (substr($month_txt,0,1) == "0") { $month_txt = substr($month_txt,1,1); }
				$year_txt	=	substr($row['fecha'],0,4);
				
				$dia_semana = date("w", mktime(0, 0, 0, $month_txt, $day_txt, $year_txt));
				switch ($dia_semana) {
					case "0":
						$weekday = "Domingo";
						break;
					case "1":
						$weekday = "Lunes";
						break;
					case "2":
						$weekday = "Martes";
						break;
					case "3":
						$weekday = "Miércoles";
						break;
					case "4":
						$weekday = "Jueves";
						break;
					case "5":
						$weekday = "Viernes";
						break;
					case "6":
						$weekday = "Sábado";
						break;
				}
			
			
			?>
			
			<!-- EVENTO -->
			<!-- DESKTOP -->
			<div class="event_desktop">
				<div style="width: 58px; height: 58px; border: rgba(0,0,0,0.2) solid 1px; float: left; margin-right: 20px; background: rgba(255,255,255,0.3);">
					<span style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 1.1em; text-align: center; text-transform: uppercase;"><? echo $mes_txt; ?></span><br>
					<span style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 2.0em; font-weight: 500; text-align: center;"><? echo substr($row['fecha'],8,2); ?></span>
				</div>
				<div style="width: auto; width: 100%; max-width: 315px; float: left; text-align: left; max-width: 420px;">
					<span style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 0.9em; "><? echo $weekday; ?> - <i class="far fa-clock"></i> <? echo substr($row['fecha'],11,5)." hrs."; ?></span><br>
					<span style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 1.1em; font-weight: 500; "><? echo substr(utf8_encode($row['descripcion']),0,120); ?></span><br>
					<?
					$con_sede = new TConeccion();
					$query_sede  = "SELECT * FROM cdd_sedes WHERE id = ".$row['id_sede'];
					$con_sede->Gestion($query_sede);
					$sede = mysqli_fetch_array($con_sede->Query,MYSQLI_ASSOC);
					?>
					<? if ($row['id_sede'] != 0) { ?>
					<span style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 0.9em; "><i class="fas fa-map-marker-alt"></i> <? echo substr(utf8_encode($sede['sede']),0,120); ?></span>
					<? } ?>
				</div>
				<div style="clear: both; height: 20px;"></div>
			</div>
			<!-- FIN DESKTOP -->
			
			<!-- MOBILE -->
			<div class="event_mobile">
			</div>
			<!-- FIN MOBILE -->
			<!-- FIN EVENTO -->
			<? } ?>
			
			<div style="clear: both"></div>
			</div>
			<!--FIN RECIENTES -->
			<div style="clear: both"></div>
		</div>
	</div>
	
	<!-- ENLACES DE INTERÉS -->
	<div style="width: 100%; padding: 0px; background: rgba(255,255,255,1.00);">
		<div style="width: 100%; max-width: 1110px; margin: auto; padding: 30px 0px;">
			<h1>Información de interés</h1>
			
			<!-- DÍA NARANJA -->
			<? $orangeday = date('d'); if ($orangeday == 25) { ?>
			
			<div style="width:90%; max-width: 650px; margin:50px auto;">
				<img src="img/banners/AccionNaranja_ch.jpg" style="width: 100%;" alt="Acción Naranja">
			</div>
			<? } ?>
			<!-- FIN DÍA NARANJA -->			
			
			<!--
			<a href="convocatoria_cec.php" title="Convocatoria CEC" target="_blank">
			<div style="width:90%; max-width: 650px; margin:50px auto;">
				<img src="img/banners/convoatoria_cec.png" style="width: 100%;">
			</div>
			</a>
			-->
			
			<!-- INFORME -->
			<!--
			<a href="/informe" title="3er. Informe de Trabajo - Junta de Coordinación Política" target="_blank">
			<div style="width:90%; max-width: 650px; margin:50px auto;">
				<img src="img/banners/banner_informe.png" style="width: 100%;">
			</div>
			</a>
			-->
			<!-- INFORME -->
			
			<!-- CONVOCATORIAS -->
			<!--
			<a href="convocatorias" title="Convocatorias" target="_blank">
			<div style="width:90%; max-width: 650px; margin:50px auto;">
				<img src="img/banners/banner_convocatorias.png" style="width: 100%;">
			</div>
			</a>
			-->
			<!-- CONVOCATORIAS -->
			
			<!-- AMNISTÍA -->
			<!--
			<a href="http://www.amnistiaedomex.gob.mx" title="Ley de Amnistía del Estado de México" target="_blank">
			<div style="width:90%; max-width: 650px; margin:50px auto;">
				<img src="img/banners/amnistia.jpg" style="width: 100%;">
			</div>
			</a>
			-->
			<!-- FIN AMNISTÍA -->
			
			<!-- COMPENDIO -->
			<a href="compendio" rel="shadowbox[album]" title="Conpendio del marco jurídico internacional y regional sobre derechos de niñas, niños y adolescentes">
			<div style="width:90%; max-width: 650px; margin:50px auto;">
				<img src="img/banners/compendio_marco_juridico.png" style="width: 100%;">
			</div>
			</a>
			<!-- FIN COMPENDIO -->
			
			<!-- VIOLENTÓMETRO -->
			<!--
			<a href="../img/banners/violentometro.jpg" rel="shadowbox[album]" title="Violentómetro">
			<div style="width:90%; max-width: 650px; margin:50px auto;">
				<img src="img/banners/violentrometro_banner.jpg" style="width: 100%;">
			</div>
			</a>
			-->
			<!-- FIN VIOLENTÓMETRO -->
			
			<!-- PROTOCOLO -->
			<a href="../documentos/gaceta/protocolo_para_la_prevencion_y_atencion_de presuntos_casos_de_violencia_laboral.pdf" title="Protocolo para la prevención y atención de presuntos casis de violencia laboral" target="_blank">
			<div style="width:90%; max-width: 650px; margin:50px auto;">
				<img src="img/banners/protocolo_prevencion_violencia.png" style="width: 100%;">
			</div>
			</a>
			<!-- FIN PROTOCOLO -->
						
			<!-- DIÁLOGO PÚBLICO -->
			<a href="dialogopublico" title="Diálogo Público - Revista del Poder Legislativo del Estado de México" alt="Diálogo Público - Revista del Poder Legislativo del Estado de México">
				<div id="dialogo_banner">
					<?
					$connect = new TConeccion();
					$query  = "SELECT * FROM cdd_dialogopublico ORDER BY numero DESC LIMIT 1";
					$connect->Gestion($query);
					$revista = mysqli_fetch_array($connect->Query,MYSQLI_ASSOC);
					?>
					<img src="img/dialogopublico/<? echo $revista['img_portada']; ?>" class="portada_dp">
					<img src="img/dialogo_publico.png" class="logo_dp">
					<div style="clear: both"></div>
				</div>
			</a>
			<!-- FIN DIÁLOGO PÚBLICO -->
						
			<a href="http://administracionyfinanzasplem.gob.mx/uas/" title="UAS - Unidad de Asistencia Social" target="_blank">
			<div style="width:90%; max-width: 650px; margin:50px auto;">
				<img src="img/banners/uas.png" style="width: 100%;" alt="UAS - Unidad de Asistencia Social">
			</div>
			</a>
			
			<!-- END BANNER -->
			
			<div style="clear: both"></div>
		</div>
	</div>
	<!-- FIN DE ENLACES DE INTERÉS -->

	
	<? include('footer.php'); ?>
	
</div>
</body>
</html>