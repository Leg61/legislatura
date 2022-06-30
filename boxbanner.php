
		<!-- NOTAS SECUNDARIAS -->
		<div style="width: 90%; max-width: 280px; float: left; margin:5px 20px 5px 50px; display: block; text-align: justify;">
			<h3>Lo más reciente</h3>
			<?
			$Coneccion = new TConeccion();
			$query  = "SELECT * FROM cdd_comunicados61 ORDER BY fecha DESC, comunicado DESC LIMIT 0,2";
			$Coneccion->Gestion($query);
			while($row = mysqli_fetch_array($Coneccion->Query,MYSQLI_ASSOC)){
			?>
			<a href="comunicado-<? echo $row['comunicado'] ?>">
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
