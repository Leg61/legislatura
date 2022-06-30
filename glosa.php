<!doctype html>
<? include('config/tconnection.php'); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="keywords" content="">
	<meta name="description" content="Todos los detalles sobre la Glosa del 3er. Informe de Gobierno del Estado">
	<meta property="og:description" content="Todos los detalles sobre la Glosa del 3er. Informe de Gobierno del Estado" />
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="" />
	<meta property="og:image:height" content="" />
	<meta property="og:title" content="Glosa 3er. Informe de Gobierno" />

	<link rel="icon" type="image/png" href="favicon.png">	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="css/menu.css" rel="stylesheet" type="text/css">
	
	<title>Glosa 3er. Informe de Gobierno</title>
	
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
	<? include('header.php'); ?>
		
	<div style="width: 100%; max-width: 1260px; margin: auto; padding-top: 202px;">
		<h1>Glosa 3er. Informe de Gobierno</h1>
		
		<!-- CALENDARIO -->
		<div style="float: left; width: 100%; max-width: 870px; margin-right: 30px;">
			<h2>Próximas comparecencias antes comisiones</h2>
			<div style="height: 20px; clear: both;"></div>
			<table>
				<thead>
					<tr>
						<th>Funcionaria/o</th>
						<th>Fecha</th>
						<th>Formato</th>
						<th>Comisiones</th>
					</tr>
				</thead>
				<tbody>
					<?
					$Coneccion = new TConeccion();
					$query  = "SELECT * FROM cdd_comunicados ORDER BY comunicado DESC LIMIT 0,1";
					$Coneccion->Gestion($query);
					while ($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
					?>
					<tr>
						<td class="name"><b>Luis Gilberto Limón Chávez</b><br><span style="font-size: 0.8em; text-transform: uppercase;">Secretario de Comunicaciones</span></td>
						<td>Martes 1º de octubre, 2020<br>17:00 horas</td>
						<td>Presencial</td>
						<td>Comunicaciones y Transportes<br><button onclick="location.href='diputados.php'">Ver integrantes</button></td>
					</tr>
					<tr>
						<td class="name"><b>Luis Gilberto Limón Chávez</b><br><span style="font-size: 0.8em; text-transform: uppercase;">Secretario de Comunicaciones</span></td>
						<td>Martes 1º de octubre, 2020<br>17:00 horas</td>
						<td>Presencial</td>
						<td>Comunicaciones y Transportes<br><button onclick="location.href='diputados.php'">Ver integrantes</button></td>
					</tr>
					<tr>
						<td class="name"><b>Luis Gilberto Limón Chávez</b><br><span style="font-size: 0.8em; text-transform: uppercase;">Secretario de Comunicaciones</span></td>
						<td>Martes 1º de octubre, 2020<br>17:00 horas</td>
						<td>Presencial</td>
						<td>Comunicaciones y Transportes<br><button onclick="location.href='diputados.php'">Ver integrantes</button></td>
					</tr>
					<tr>
						<td class="name"><b>Luis Gilberto Limón Chávez</b><br><span style="font-size: 0.8em; text-transform: uppercase;">Secretario de Comunicaciones</span></td>
						<td>Martes 1º de octubre, 2020<br>17:00 horas</td>
						<td>Presencial</td>
						<td>Comunicaciones y Transportes<br><button onclick="location.href='diputados.php'">Ver integrantes</button></td>
					</tr>
					<tr>
						<td class="name"><b>Luis Gilberto Limón Chávez</b><br><span style="font-size: 0.8em; text-transform: uppercase;">Secretario de Comunicaciones</span></td>
						<td>Martes 1º de octubre, 2020<br>17:00 horas</td>
						<td>Presencial</td>
						<td>Comunicaciones y Transportes<br><button onclick="location.href='diputados.php'">Ver integrantes</button></td>
					</tr>
					<tr>
						<td class="name"><b>Luis Gilberto Limón Chávez</b><br><span style="font-size: 0.8em; text-transform: uppercase;">Secretario de Comunicaciones</span></td>
						<td>Martes 1º de octubre, 2020<br>17:00 horas</td>
						<td>Presencial</td>
						<td>Comunicaciones y Transportes<br><button onclick="location.href='diputados.php'">Ver integrantes</button></td>
					</tr>
					<? } ?>
				</tbody>
			</table>
			
			<div style="clear: both; height: 5px; border-top: 3px solid rgba(150,0,72,1.00); margin: 20px;"></div>
			
			<h2>Comparecencias anteriores</h2>
			
			<div style="height: 20px; clear: both;"></div>
			
			<!-- COMPARECENCIA -->
			<div>
				<div style="float: left; margin-left: 10px; width: 370px;">
					<iframe width="360" height="200" src="https://www.youtube.com/embed/lCCjsPkvL2A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div style="float: left; width: 100%; max-width: 490px;">
					<p class="date">22 de octubre, 2020</p>
					<h3>Sesión Especial de Comparecencia del Fiscal General de Justicia del Estado de México, Alejandro Jaime Gómez Sánchez, en el marco del Análisis del Segundo Informe de Gobierno, LX Legislatura Mexiquense</h3>
				</div>
				<div style="clear: both; height: 25px;"></div>
			</div>
			<!-- COMPARECENCIA -->

			<!-- COMPARECENCIA -->
			<div>
				<div style="float: left; margin-left: 10px; width: 370px;">
					<iframe width="360" height="200" src="https://www.youtube.com/embed/ha-s49dZwoM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div style="float: left; width: 100%; max-width: 490px;">
					<p class="date">15 de octubre, 2020</p>
					<h3>Sesión Especial de Comparecencia del Secretario de Movilidad, Raymundo Martínez Carbajal, en el marco del Análisis del Segundo Informe de Gobierno, Primer Periodo Ordinario 2do. Año, LX Legislatura Mexiquense</h3>
				</div>
				<div style="clear: both; height: 25px;"></div>
			</div>
			<!-- COMPARECENCIA -->
			
			
		</div>
		<!-- FIN CALENDARIO -->
		
		<!-- PREGUNTA MEXIQUENSE -->
		<div style="width: 100%; max-width: 360px; float: left;">
			<h1>#PreguntaMexiquense</h1>
			<iframe width="360" height="200" src="https://www.youtube.com/embed/KNPZlbe_2Zc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<p style="text-align: left; margin: 5px; line-height: 120%;">Ciudadanos del Estado de México participan en este ejercicio democrático</p>
		</div>
		<!-- FIN PREGUNTA MEXIQUENSE -->
		<!-- NOTAS TERCIARIAS -->
		<div style="width: 100%; max-width: 360px; float: left; display: block; text-align: justify;">
			<div style="clear: both; height: 5px; border-top: 3px solid rgba(150,0,72,1.00); margin: 20px;"></div>
			<h2>Comunicados</h2>
			<?
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_comunicados ORDER BY comunicado DESC LIMIT 5";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<div style="width: 100%; max-width: 320px; float: left; margin-bottom: 20px; display: block; text-align: justify;">
				<div style="float: left; width: 100px; height: 100px; margin-right: 10px; background: url(img/fotos/comunicados/<? echo $row['foto1']; ?>) 50% 50%; background-size: cover;"></div>
				<div style="float: left; width: 210px">
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
				<p style="line-height: 110%; font-size: 1.0em; font-weight: bolder; margin: 0px; text-align: left;"><? echo utf8_encode($row['titulo']); ?></p>
				</div>
				<div style="clear: both;"></div>
			</div>
			<? } ?>
			<div style="clear: both;"></div>
		</div>
		<!-- FIN NOTAS TERCIARIAS -->
		
		
		<div style="clear: both; height: 200px;"></div>
		
	</div>
	
	<? include('footer.php'); ?>
	
</div>
</body>
</html>