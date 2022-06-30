<!doctype html>
<?
include('config/tconnection.php');
$Coneccion = new TConeccion();
$query  = "SELECT * FROM cdd_comunicados WHERE comunicado = ".$_GET['id'];
$Coneccion->Gestion($query);
$row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC);
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="keywords" content="">
	<meta name="description" content="<? echo utf8_encode($row['bullet1']); ?>">
	<meta property="og:description" content="<? echo utf8_encode($row['bullet1']); ?>" />
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="img/fotos/comunicados/<? echo $row['foto1']; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="1024" />
	<meta property="og:image:height" content="683" />
	<meta property="og:title" content="<? echo utf8_encode($row['titulo']); ?>" />

	<title><? echo utf8_encode($row['titulo']); ?></title>
	
	<link rel="icon" type="image/png" href="favicon.png">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	<link href="css/waterfall.css" rel="stylesheet" type="text/css">
	
	<script src="https://kit.fontawesome.com/e6414ed8fa.js" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="js/shadowbox/shadowbox.css">
	<script type="text/javascript" src="js/shadowbox/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init({
			language:   "es"
		});
	</script>	
	
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
			<p>Comunicado de Prensa No. <? echo $row['comunicado']; ?></p>
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
			
			<p class="date" style="font-size: 1.0em;">Toluca de Lerdo, México, <? echo substr($row['fecha'],8,2); ?> de <? echo $mes_txt ?> de <? echo substr($row['fecha'],0,4); ?></p>
			<h1><? echo utf8_encode($row['titulo']); ?></h1>
			<ul>
				<? if ($row['bullet1']) { ?><li><? echo utf8_encode($row['bullet1']); ?></li><? } ?>
				
				<? if ($row['bullet2']) { ?><li><? echo utf8_encode($row['bullet2']); ?></li><? } ?>
				
				<? if ($row['bullet3']) { ?><li><? echo utf8_encode($row['bullet3']); ?></li><? } ?>
				
				<? if ($row['bullet4']) { ?><li><? echo utf8_encode($row['bullet4']); ?></li><? } ?>
				
			</ul>
			<?
			$con_foto = new TConeccion();
			$query_foto  = "SELECT * FROM cdd_fotos WHERE comunicado = ".$row['comunicado'];
			$con_foto->Gestion($query_foto);
			$foto = mysqli_fetch_array($con_foto->Query,MYSQLI_ASSOC);
			?>
			<img src="../img/fotos/comunicados/<? echo $foto['foto']; ?>" alt="<? echo utf8_encode($row['titulo']); ?>" style="width: 100%;">
			<p><? echo nl2br(utf8_encode($row['texto'])); ?></p>
			<? if ($row['comunicado'] == 3011) { ?>
			<h3>Integración de los grupos parlamentarios</h3>
			<table><thead><tr><th colspan="2">Grupo parlamentario de Morena</th></tr></thead><tbody><tr><td style="width: 80px">XI Tultitlán</td><td>Maurilio Hernández González (coordinador)</td></tr><tr><td>I Chalco</td><td>Anais Miriam Burgos Hernández </td></tr><tr><td>III Chimalhuacán</td><td>Emiliano Aguirre Cruz</td></tr><tr><td>V Chicoloapan</td><td>Adrián Manuel Galicia Salceda</td></tr><tr><td>VI Ecatepec</td><td>Elba Aldana Duarte </td></tr><tr>		  <td>VIII Ecatepec </td><td>Azucena isneros Coss</td></tr><tr><td>XII Teoloyucan</td><td>Marco Antonio Cruz Cruz</td>		</tr>		<tr>		 <td>XIX ultepec </td><td>Mario Ariel Juárez Rodríguez</td>		</tr>		<tr>		  <td>XXI Ecatepec</td>		  <td>Faustino de la Cruz érez</td>		</tr>		<tr>		  <td>XXII Ecatepec </td><td>Camilo Murillo Zavala</td>		</tr>		<tr>		  <td>XXIII Texcoco</td>		  <td>Nazario Gutiérrez Martínez</td>		</tr>		<tr>		  <td>XXIV Nezahualcóyotl</td>		  <td>Valentín González Bautista</td>		</tr>		<tr>
		  <td>XXV Nezahualcóyotl</td>
		  <td>Gerardo Ulloa Pérez</td>
		</tr>
		<tr>
		  <td>XXVII Valle de Chalco</td>
		  <td>Yesica Yanet Rojas Hernández </td>
		</tr>
		<tr>
		  <td>XXVIII Amecameca</td>
		  <td>Beatriz García Villegas</td>
		</tr>
		<tr>
		  <td>XXXIX Acolman</td>
		  <td>María del Rosario Elizalde Vázquez</td>
		</tr>
		<tr>
		  <td>XL Ixtapaluca</td>
		  <td>Rosa María Zetina González</td>
		</tr>
		<tr>
		  <td>XLI Nezahualcóyotl</td>
		  <td>María del Carmen de la Rosa Mendoza</td>
		</tr>
		<tr>
		  <td>XLII Ecatepec </td>
		  <td>Daniel Andrés Sibaja González</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Karina Labastida Sotelo</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Dionicio Jorge García Sánchez</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Isaac Martín Montoya Márquez</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Mónica Angélica Álvarez Nemer</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Luz María Hernández Bermúdez</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Max Agustín Correa Hernández</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Abraham Saroné Campos</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Alicia Mercado Moreno </td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Lourdes Jezabel Delgado Flores</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Edith Marisol Mercado Torres</td>
		</tr>
	</tbody>
</table>
<table>
	<thead>
		<tr>
			<th colspan="2">Grupo parlamentario del Partido Revolucionario Institucional (PRI)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		  <td style="width: 80px">RP</td>
		  <td>Elías Rescala Jiménez (coordinador) </td>
		</tr>
		<tr>
		  <td>II Toluca</td>
		  <td>Braulio Antonio Álvarez Jasso</td>
		</tr>
		<tr>
		  <td>IV Lerma</td>
		  <td>Jaime Cervantes Sánchez</td>
		</tr>
		<tr>
		  <td>VII Tenancingo</td>
		  <td>Karla Gabriela Esperanza Aguilar Talavera</td>
		</tr>
		<tr>
		  <td>X Valle de Bravo</td>
		  <td>Mario Santana Carbajal</td>
		</tr>
		<tr>
		  <td>XIII Atlacomulco</td>
		  <td>Iván de Jesús Esquer Cruz</td>
		</tr>
		<tr>
		  <td>XIV Jilotepec</td>
		  <td>Aurora González Ledezma</td>
		</tr>
		<tr>
		  <td>XV Ixtlahuaca</td>
		  <td>Leticia Mejía García</td>
		</tr>
		<tr>
		  <td>XXX Naucalpan</td>
		  <td>Enrique Edgardo Jacob Rocha</td>
		</tr>
		<tr>
		  <td>XXXI Los Reyes </td>
		  <td>Fernando González Mejía</td>
		</tr>
		<tr>
		  <td>XXXII Naucalpan</td>
		  <td>David Parra Sánchez</td>
		</tr>
		<tr>
		  <td>XXXIII Tecámac</td>
		  <td>Lilia Urbina Salazar</td>
		</tr>
		<tr>
		  <td>XXXV Metepec</td>
		  <td>Alfredo Quiroz Fuentes</td>
		</tr>
		<tr>
		  <td>XXXVI Zinacantepec</td>
		  <td>Paola Jiménez Hernández</td>
		</tr>
		<tr>
		  <td>XLV Almoloya de Juárez </td>
		  <td>Myriam Cárdenas Rojas</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Paulina Alejandra del Moral Vela</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Cristina Sánchez Coronel</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Gretel González Aguirre</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Evelyn Osornio Jiménez</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Jesús Isidro Moreno Mercado</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Jesús Gerardo Izquierdo Rojas</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>María Monserrath Sobreyra Santos</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>María Rosa Hernández Arango</td>
		</tr>
	</tbody>
</table><table>
	<thead>
		<tr>
			<th colspan="2">Grupo parlamentario del Partido Acción Nacional (PAN)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		  <td style="width: 80px">RP</td>
		  <td>Enrique Vargas del Villar (coordinador)</td>
		</tr>
		<tr>
		  <td>XVI Atizapán</td>
		  <td>Román Francisco Cortés Lugo </td>
		</tr>
		<tr>
		  <td>XVII Huixquilucan</td>
		  <td>Luis Narciso Fierro Cima</td>
		</tr>
		<tr>
		  <td>XVIII Tlalnepantla</td>
		  <td>Alonso Adrián Juárez Jiménez</td>
		</tr>
		<tr>
		  <td>XXVI Cuautitlán Izcalli </td>
		  <td>Francisco Javier Santos Arreola</td>
		</tr>
		<tr>
		  <td>XXIX Naucalpan</td>
		  <td>Martha Amalia Moya Bastón</td>
		</tr>
		<tr>
		  <td>XXXIV Toluca</td>
		  <td>Gerardo Lamas Pombo</td>
		</tr>
		<tr>
		  <td>XLIII Cuautitlán Izcalli</td>
		  <td>Francisco Brian Rojas Cano </td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Ingrid Krasopani Schemelensky Castro </td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>María de los Ángeles Dávila Vargas</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Miriam Escalona Piña</td>
		</tr>
	</tbody>
</table><table>
	<thead>
		<tr>
			<th colspan="2">Grupo parlamentario del Partido de la Revolución Democrática (PRD)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		  <td style="width: 80px">XXXVIII Coacalco</td>
		  <td>Omar Ortega Álvarez (coordinador)</td>
		</tr>
		<tr>
		  <td>IX Tejupilco</td>
		  <td>María Elida Castelán Mondragón</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Viridiana Fuentes Cruz </td>
		</tr>
	</tbody>
</table><table>
	<thead>
		<tr>
			<th colspan="2">Grupo parlamentario del Partido del Trabajo (PT)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		  <td style="width: 80px">XLIV Nicolás Romero</td>
		  <td>Sergio García Sosa (coordinador) </td>
		</tr>
		<tr>
		  <td>XXXVII Tlalnepantla</td>
		  <td>Ma Trinidad Franco Arpero</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Silvia Barberena Maldonado</td>
		</tr>
	</tbody>
</table><table>
	<thead>
		<tr>
			<th colspan="2">Grupo parlamentario del Partido Verde Ecologista (PVEM)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		  <td style="width: 80px">RP</td>
		  <td>María Luisa Mendoza Mondragón (coordinadora)</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Claudia Desiree Morales Robledo </td>
		</tr>
	</tbody>
</table><table>
	<thead>
		<tr>
			<th colspan="2">Grupo parlamentario del Partido Movimiento Ciudadano (MC)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		  <td style="width: 80px">RP</td>
		  <td>Martín Zepeda Hernández (coordinador)</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Juana Bonilla Jaime </td>
		</tr>
	</tbody>
</table><table>
	<thead>
		<tr>
			<th colspan="2">Grupo parlamentario del Partido Nueva Alianza (NA)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		  <td style="width: 80px">XX Zumpango</td>
		  <td>Rigoberto Vargas Cervantes (coordinador)</td>
		</tr>
		<tr>
		  <td>RP</td>
		  <td>Mónica Miriam Granillo Velazco </td>
		</tr>
	</tbody>
</table>			
			
			<? } ?>
			
			<div style="background: rgba(227,227,227,0.8); padding: 5px;">
				<h3>Fotografías</h3>
				<?
				$con_pic = new TConeccion();
				$query_pic  = "SELECT * FROM cdd_fotos WHERE comunicado = '".$row['comunicado']."' ORDER BY foto ASC";
				$con_pic->Gestion($query_pic);
				while($pic = mysqli_fetch_array($con_pic->Query,MYSQLI_ASSOC)){
				?>
				<a href="../img/fotos/comunicados/<? echo $pic['foto']; ?>" rel="shadowbox[album]" title="<? echo utf8_encode($row['titulo']); ?>"><div style="display: block; margin: 5px; float: left; padding: 0px;"><img src="../img/fotos/comunicados/<? echo $pic['foto']; ?>" style="width: 180px; height:120px; text-decoration:none;"></div></a>
				<? } ?>	

				<div style="clear: both;"></div>				
			</div>
			
		</div>
		
		<!-- NOTAS SECUNDARIAS -->
		<div style="width: 90%; max-width: 280px; float: left; margin:5px 20px 5px 50px; display: block; text-align: justify;">
		<!--<div style="width: 90%; max-width: 330px; float: left; margin:10px; display: block; text-align: justify;">-->
			<h3>Lo más reciente</h3>
			<?
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_comunicados WHERE comunicado != ".$row['comunicado']." ORDER BY fecha DESC, comunicado DESC LIMIT 3";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<a href="comunicado.php?id=<? echo $row['comunicado'] ?>">
			<div style="width: 100%; max-width: 330px; float: left; margin-bottom: 20px; display: block; text-align: justify;">
				<?
				$con_foto = new TConeccion();
				$query_foto  = "SELECT * FROM cdd_fotos WHERE comunicado = ".$row['comunicado'];
				$con_foto->Gestion($query_foto);
				$foto = mysqli_fetch_array($con_foto->Query,MYSQLI_ASSOC);
				?>
				
				<img src="../img/fotos/comunicados/<? echo $foto['foto']; ?>" alt="<? echo utf8_encode($row['titulo']); ?>" style="width: 100%;">
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
				<p class="date"><? echo substr($row['fecha'],8,2); ?> de <? echo $mes_txt ?>, <? echo substr($row['fecha'],0,4); ?></p>
				<h3><? echo utf8_encode($row['titulo']); ?></h3>
			</div>
			</a>
			<? } ?>
			<div style="clear: both;"></div>
			<button onclick="location.href='prensa'">Ver más</button>
		</div>
		<!-- FIN NOTAS SECUNDARIAS -->


	</div>
	<div style="clear: both; height: 80px;"></div>
	
	<? include('footer.php'); ?>
	
</div>
</body>
</html>