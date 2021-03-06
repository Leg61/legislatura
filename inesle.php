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
	<meta property="og:title" content="INESLE | Instituto de Estudios Legislativos" />

	<link rel="icon" type="image/png" href="favicon.svg">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>INESLE | Instituto de Estudios Legislativos</title>
	
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
	<? include('header.php'); ?>
		
	<div id="contenido">
		<div style="width: 100%; max-width: 688px; margin: 0px 20px; float: left; text-align: justify;">
			<img src="http://www.inesle.gob.mx/images/logo.jpg" style="float: right; margin: 0px 0px 20px 20px;">
			<h1>Instituto de Estudios Legislativos (INESLE)</h1>
			<p>El Instituto de Estudios Legislativos es la dependencia de la Legislatura del Estado de  M??xico,  como  instancia  acad??mica,  de  asesor??a  y  de  apoyo  t??cnico  consultivo  para  los diputados del Poder Legislativo.</p>
			<p>El Instituto ha procurado, mediante actividades acad??micas y de investigaci??n, fortalecer su vinculaci??n institucional con dependencias de los Poderes Ejecutivo y Judicial del Estado y del propio Poder Legislativo; as?? como de institutos y organismos de investigaci??n y acad??micos de nuestra entidad, del pa??s y del extranjero.</p>
			<p>El Instituto se encuentra abierto para todos aquellos acad??micos, investigadores, estudiantes y p??blico en general interesados en el derecho parlamentario y sus ciencias afines.</p>
			<button onclick="location.href='investigaciones'"><i class="fas fa-book-open"></i> Investigaciones</button>
			<button onclick="location.href='conveniosinesle'"><i class="far fa-handshake"></i> Convenios</button>
			<hr>
			
			<!-- FOTOGRAF??AS -->
			<div style="background: rgba(227,227,227,0.8); padding: 5px;">
				<h3>Actividades recientes</h3>
				<p>Recibimos con gusto al Dr. Felipe Serrano Larenas, Vocal Ejecutivo del Instituto Hacendario del Estado de M??xico, para concretar trabajos futuros interdicipinarios con el INESLE</p>
				<a href="../img/fotos/otros/inesle-1.jpg" rel="shadowbox[album]" title="Reuni??n con Vocal Ejecutivo del Instituto Hacendario"><div style="display: block; margin: 5px; float: left; padding: 0px;"><img src="../img/fotos/otros/inesle-1.jpg" style="width: 180px; height:120px; text-decoration:none;"></div></a>
				<a href="../img/fotos/otros/inesle-2.jpg" rel="shadowbox[album]" title="Reuni??n con Vocal Ejecutivo del Instituto Hacendario"><div style="display: block; margin: 5px; float: left; padding: 0px;"><img src="../img/fotos/otros/inesle-2.jpg" style="width: 180px; height:120px; text-decoration:none;"></div></a>
				<a href="../img/fotos/otros/inesle-3.jpg" rel="shadowbox[album]" title="Reuni??n con Vocal Ejecutivo del Instituto Hacendario"><div style="display: block; margin: 5px; float: left; padding: 0px;"><img src="../img/fotos/otros/inesle-3.jpg" style="width: 180px; height:120px; text-decoration:none;"></div></a>
				<div style="clear: both;"></div>
				<hr>
				<p>En el marco de la equidad de g??nero, el INESLE incluy?? dentro de sus actividades el an??lisis de cortometrajes en la materia, para despu??s realizar una autorreflexi??n sobre el contenido que le aport?? cada uno de los mismos, sumando en la concientizaci??n, de las diferencias de g??nero, y la importancia de fomentar desde la ni??ez un trato de igualdad y respeto a la Mujer.</p>
				<a href="../img/fotos/otros/dia-naranja-1.jpg" rel="shadowbox[album]" title="??D??a Naranja"><div style="display: block; margin: 5px; float: left; padding: 0px;"><img src="../img/fotos/otros/dia-naranja-1.jpg" style="width: 180px; height:120px; text-decoration:none;"></div></a>
				<a href="../img/fotos/otros/dia-naranja-2.jpg" rel="shadowbox[album]" title="??D??a Naranja"><div style="display: block; margin: 5px; float: left; padding: 0px;"><img src="../img/fotos/otros/dia-naranja-2.jpg" style="width: 180px; height:120px; text-decoration:none;"></div></a>
				<div style="clear: both;"></div>
			</div>
			<hr>
			<h2>Instituto de Estudios Legislativos (INESLE)</h2>
			<p><b>Mar??a Isabel Selene Clemente Mu??oz</b><br>Vocal Ejecutiva</p>
			<address>Av. Hidalgo No. 313<br>Col. Merced-Alameda - CP 50080<br>Toluca, Estado de M??xico</address>
			<p>Conmutador: 722 214-1952 y 722 214-1627</p>
			<img src="http://www.inesle.gob.mx/images/FI-5.jpg" style="width: 100%;">			
		</div>
		<? include('boxbanner.php'); ?>
		
		<div style="clear: both;"></div>
	</div>
	<? include('footer.php'); ?>
	
</div>
</body>
</html>