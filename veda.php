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
	<meta property="og:title" content="LX Legislatura del Estado de México, Legislatura de la Paridad de Género" />

	<link rel="icon" type="image/png" href="favicon.svg">
	<link href="veda.css" rel="stylesheet" type="text/css">
	<link href="css/menu_home_veda.css" rel="stylesheet" type="text/css">
	<link href="css/grid.css" rel="stylesheet" type="text/css">
	
	<title>LX Legislatura del Estado de México, Legislatura de la Paridad de Género</title>
	
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

<body style="background:linear-gradient( 40deg, rgb(0,0,0,1.00) 0%, rgb(100,100,100,1.00) 100% );">
<div align="center">	
	<header class="large">

		<!-- MENU RESPONSIVO --->
		<div id="responsive">
			<nav>
				<a href="index.php"><div style="float: left; display: block;"><img src="img/congreso_edomex_byn.svg" class="logo"></div></a>
				<div id="salto_menu"></div>
				<ul class="topnav">
					<li><a href="diputadasydiputados">Diputadas/os</a>
					<li><a href="comision-1">JUCOPO</a>
					<li><a href="comisiones">Comisiones</a>
					<li><a href="dependencias">Dependencias</a>
					<li><a href="iniciativas">Iniciativas</a></li>
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
				<a href="index"><div style="float: left; display: block;"><img src="img/congreso_edomex_byn.svg" class="logo"></div></a>
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
							<li class="menu"><a href="iniciativas">Iniciativas</a></li>
							<li class="menu"><a href="gaceta">Gaceta</a></li>
							<li class="menu"><a href="legislacion">Legislación</a></li>
						</ul>
					</li>
					<li class="menu"><a href="transparencia">Transparencia</a></li>
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
		</div>

		<div id="box_buscador_movil">
			<form method="get" action="buscador">
				<input type="text" name="tema" placeholder="Ingresa una palabra..." class="movil">
				<button id="boton_buscador"><i class="fas fa-search"></i></button>
				<div style="clear: both"></div>
			</form>
		</div>		
		<!-- FIN BUSCADOR -->
		
		<!-- CONTENT -->
		<div style="width: 95%; max-width: 1210px; margin: 15px auto; padding: 10px 0px; background: rgba(0,0,0,0.4);">
			<div id="reciente">
				<h1 style="color: white;">Lo más reciente</h1>
				<?
				$Coneccion = new TConeccion();
				$query  = "SELECT * FROM cdd_comunicados ORDER BY comunicado DESC LIMIT 0,6";
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
		
		
		<div style="width: 95%; max-width: 610px; margin: auto; padding: 30px 0px; background: rgba(0,0,0,0.4);">
			
			<!-- YOUTUBE -->
			<div id="streaming_desktop">
			<div style="width: 560px; height: 430px; margin: auto;">
				<h1 style="color: white;">Previamente</h1>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=UU9kqSF0ZBUhSRp4cyWL_oAA&autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<button onclick="window.open('https://www.youtube.com/c/LegislaturaEdoMex','_blank');">Canal de YouTube</button>
			</div>
			</div>
			
			<div id="streaming_mobile">
			<div style="width: 360px; height: 320px; margin: auto;">
				<h1 style="color: white;">Previamente</h1>
				<iframe width="360" height="205" src="https://www.youtube.com/embed/videoseries?list=UU9kqSF0ZBUhSRp4cyWL_oAA&autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<button onclick="window.open('https://www.youtube.com/c/LegislaturaEdoMex','_blank');">Canal de YouTube</button>
			</div>
			</div>
			<!-- FIN YOUTUBE -->
			
			
			<!-- TRANSMISIÓN EN VIVO  -->
			<!--
			<div id="streaming_desktop">
			<div style="width: 560px; height: 430px; margin: auto;">
				<h1 style="color: white;">Transmisión en vivo</h1>
				<iframe style="max-width: 100%; display: block; margin: auto;" src="http://www.livestreamingservices.com/html5pro/tvlegismex.php" scrolling="no" allowfullscreen="allowfullscreen" width="560" height="315" frameborder="0" align="middle"></iframe>
				<div style="clear: both"></div>
			</div>
			</div>

			<div id="streaming_mobile">
			<div style="width: 100%; padding: 10px 0px; height: 205px; margin: auto;">
				<h1 style="color: white;">Transmisión en vivo</h1>
				<iframe style="max-width: 100%; display: block; margin: auto;" src="http://www.livestreamingservices.com/html5pro/tvlegismex.php" scrolling="no" allowfullscreen="allowfullscreen" width="360" height="205" frameborder="0" align="middle"></iframe>
				<div style="clear: both"></div>
			</div>
			</div>
			-->
			<!-- FIN TRANSMISIÓN EN VIVO MOBILE -->
			
			<div style="clear: both"></div>
		</div>
	</div>
	
	<div style="width: 100%; padding: 0px; background:linear-gradient( 65deg, rgb(255,255,255,1.00) 0%, rgb(235,235,235,1.00) 100% );">
		<div style="width: 100%; max-width: 1110px; margin: auto; padding: 30px 0px;">
			<h1>Próximas actividades</h1>
			<div style="background: url(img/time_line.png) top center no-repeat; padding: 20px 0px 10px;">
				
				<!-- ANTERIORES ---Z
				<?
				$Coneccion = new TConeccion();
				$query  = "SELECT * FROM cdd_eventos WHERE fecha <= '".date('Y-m-d')."' ORDER BY fecha DESC LIMIT 0,2";
				$Coneccion->Gestion($query);
				while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
				?>
				<?
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
				?>
				
				<!-- EVENTO -->
				<div class="myDIV"><? echo substr($row['fecha'],8,2); ?>/<? echo $mes_txt; ?>/<? echo substr($row['fecha'],0,4); ?> - <? echo substr($row['fecha'],11,5)." hrs."; ?></div>
				<div class="hide">
					<!--<div style="float: left; width: 65px; height: 65px; background: rgb(150,0,72);"></div>-->
					<div style="float: left; border: rgb(150,0,72) 3px solid; height: 53px; padding: 3px; width: 273px; text-align: left;">
						<span style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 0.7em; text-transform: uppercase; font-weight: bolder; color: rgba(128,0,72);"><? echo substr(utf8_encode($row['descripcion']),0,120); ?></span>
					</div>
				</div>
				<!-- FIN EVENTO -->				
				<? } ?>
				<!-- FIN ANTERIORES --->
			</div>
			
			<div style="background: url(img/time_line.png) top center no-repeat; padding: 20px 0px;">
				
				<!-- PRÓXIMOS -->
				<?
				$Coneccion = new TConeccion();
				$query  = "SELECT * FROM cdd_eventos WHERE fecha >= '".date('Y-m-d')."' ORDER BY fecha ASC LIMIT 0,3";
				$Coneccion->Gestion($query);
				while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
				?>
				
				<?
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
				?>
				
				<!-- EVENTO -->
				<div class="myDIV"><? echo substr($row['fecha'],8,2); ?>/<? echo $mes_txt; ?>/<? echo substr($row['fecha'],0,4); ?> - <? echo substr($row['fecha'],11,5)." hrs."; ?></div>
				<div class="hide">
					<!--<div style="float: left; width: 65px; height: 65px; background: rgb(150,0,72);"></div>-->
					<div style="float: left; border: rgb(150,0,72) 3px solid; height: 53px; padding: 3px; width: 273px; text-align: left;">
						<span style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 0.7em; text-transform: uppercase; font-weight: bolder; color: rgba(128,0,72);"><? echo substr(utf8_encode($row['descripcion']),0,120); ?></span>
					</div>
				</div>
				<!-- FIN EVENTO -->				
				<? } ?>
				
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
				<!-- EVENTO -->
				<a href="eventos"><div class="myDIV" style="background:rgb(150,0,72);">Más información</div></a>
				<div class="hide">
					<!--<div style="float: left; width: 65px; height: 65px; background: rgb(150,0,72);"></div>-->
					<div style="float: left; border: rgb(150,0,72) 3px solid; height: 53px; padding: 3px; width: 273px; text-align: left;">
						<span style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 0.7em; text-transform: uppercase; font-weight: bolder; color: rgba(128,0,72);"><? echo substr(utf8_encode($row['descripcion']),0,120); ?></span>
					</div>
				</div>
				<!-- FIN EVENTO -->
				<? } ?>

				
				<div style="clear: both"></div>
			</div>
		</div>
	</div>
	
	
	<!-- ENLACES DE INTERÉS -->
	<div style="width: 100%; padding: 0px; background: rgba(255,255,255,1.00);">
		<div style="width: 100%; max-width: 1110px; margin: auto; padding: 30px 0px;">
			<h1>Información de interés</h1>
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
			
			<!-- BANNER -->
			<!--
			<a href="http://www.sectec.gob.mx/convocatorias" title="Inscríbete al Parlamenteo Abierto" target="_blank">
			<div style="width:90%; margin:50px auto;">
				<img src="img/banners/sectec.jpg" style="width: 100%;">
			</div>
			</a>

			-->
			<a href="https://www.osfem.gob.mx/08_Galeria/PDF/ACUERDO%20009%202021%20PAA.pdf" title="OSFEM - Programa Anual de Auditorías 2021" target="_blank">
			<div style="width:90%; max-width: 650px; margin:50px auto;">
				<img src="img/banners/osfem.jpg" style="width: 100%;" alt="OSFEM">
			</div>
			</a>
			
			<? $orangeday = date('d'); if ($orangeday == 25) { ?>
			
			<div style="width:90%; max-width: 650px; margin:50px auto;">
				<img src="img/banners/AccionNaranja_ch.jpg" style="width: 100%;" alt="Acción Naranja">
			</div>
			<? } ?>

			<!-- END BANNER -->
			
			<div style="clear: both"></div>
		</div>
	</div>
	<!-- FIN DE ENLACES DE INTERÉS -->

	
	<? include('footer.php'); ?>
	
</div>
</body>
</html>