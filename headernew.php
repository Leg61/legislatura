<header class="large">

		<!-- MENU RESPONSIVO --->
		<div id="responsive">
			<nav>
				<a href="index.php"><div style="float: left; display: block;"><img src="img/congreso_edomex.svg" class="logo"></div></a>
				<div id="salto_menu"></div>
				<ul class="topnav">
					<li><a href="diputadasydiputados">Diputadas/os</a></li>
					<li><a href="comision-1">JUCOPO</a></li>
					<li><a href="comision-2"><? $conn_name = new TConeccion(); $query_name  = "SELECT * FROM cdd_comisiones WHERE id = 2"; $conn_name->Gestion($query_name); $nombre = mysqli_fetch_array($conn_name->Query,MYSQLI_ASSOC); echo utf8_encode($nombre['nombre']); ?></a></li>
					<li><a href="comisiones">Comisiones</a></li>
					<li><a href="dependencias">Dependencias</a></li>
					<li><a href="asuntos">Asuntos</a></li>
					<li><a href="gaceta">Gaceta</a></li>
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
					<li class="menu"><a href="diputadasydiputados">Legislatura &#9662;</a>
						<ul class="dropdown">
							<li class="menu"><a href="diputadasydiputados">Diputadas/os</a></li>
							<li class="menu"><a href="comision-1">JUCOPO</a></li>
							<li class="menu"><a href="comision-2"><? $conn_name = new TConeccion(); $query_name  = "SELECT * FROM cdd_comisiones WHERE id = 2"; $conn_name->Gestion($query_name); $nombre = mysqli_fetch_array($conn_name->Query,MYSQLI_ASSOC); echo utf8_encode($nombre['nombre']); ?></a></li>
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
					<li class="menu">
						<form method="get" action="buscador">
						<div>
							<input type="text" name="tema" placeholder="Buscador" style="width: 120px; border-radius: 15px; margin-right: 3px;">
							<button style="float: right; border-radius: 15px;"><i class="fas fa-search"></i></button>
						</div>
						</form>
					</li>
				</ul>
			</nav>
		</div>
		<!-- FIN MENU DESPLEGABLE --->
	</header>