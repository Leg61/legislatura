<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/aos.css">
	<link rel="stylesheet" type="text/css" href="css/dialogopublico.css">
	
	<title>Diálogo Público Estado de México</title>
	
	<script src="https://kit.fontawesome.com/e6414ed8fa.js" crossorigin="anonymous"></script>		
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
		$(document).on("scroll",function(){
			if($(document).scrollTop()>40){
				$("header").removeClass("large").addClass("small");
			} else{
				$("header").removeClass("small").addClass("large");
			}
		});
	</script>	
	
</head>
	
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

	<header class="large">
		
		<!-- MENU RESPONSIVO --->
		<div id="responsive">
			<nav>
				<div align="center"><img data-aos="fade-down" data-aos-delay="300" src="img/dialogo-publico-edomex.svg" class="logo"></div>
				<ul class="topnav">
					<li><a class="active" href="/"><i class="fas fa-home"></i></a></li>
					<li><a href="#">Secciones</a>
					<li><a href="#">Números anteriores</a>
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
			<nav style="width:95%; margin:10px auto;">
				<a href="/"><img data-aos="fade-down" data-aos-delay="300" src="img/dialogo-publico-edomex.svg" class="logo"></a>
				<ul class="menu">
					<li class="menu"><a href="/"><i class="fas fa-home"></i></a></li>
					<li class="menu"><a href="#"><i class="far fa-bookmark"></i> Secciones &#9662;</a>
						<ul class="dropdown">
							<li class="menu"><a href="#">Editorial</a></li>
							<li class="menu"><a href="#">Cuadrilátero</a></li>
							<li class="menu"><a href="#">Diálogo</a></li>
							<li class="menu"><a href="#">Resumen</a></li>
						</ul>
					</li>
					<li class="menu"><a href="#">Números anteriores &#9662;</a>
						<ul class="dropdown">
							<li class="menu"><a href="#">No. 07</a></li>
							<li class="menu"><a href="#">No. 06</a></li>
							<li class="menu"><a href="#">No. 05</a></li>
							<li class="menu"><a href="#">No. 04</a></li>
							<li class="menu"><a href="#">No. 03</a></li>
							<li class="menu"><a href="#">No. 02</a></li>
							<li class="menu"><a href="#">No. 01</a></li>
						</ul>
					</li>
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
	
	<!-- FONDO VIDEO -->
	<!--
	<div style="left:0%; margin-left:0px; width:100%; position:fixed; top:0; height:100%; overflow:hidden; z-index:-100; background:rgba(19,47,63,1.00);" align="center">
		<video autoplay="autoplay" loop="loop" width="100%">
			<source src="video/people.mp4" type='video/mp4; codecs="amp4v.20.8, mp4a.40.2"'>
			<source src="video/people.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
		</video>	  
	</div>
	-->
	<!-- FONDO VIDEO -->
		
	<section style="padding: 95px 0px 10px; box-sizing: border-box; ">
		
		<!-- PORTADA -->
		<div style="width: 100%; max-width: 970px; margin: 10px auto;"><img data-aos="fade-up" data-aos-delay="100" src="img/dialogopublico/portada/editorial.png" style="width: 100%; max-width: 970px;"></div>
		<!-- FIN PORTADA -->
		
		<!-- BANNER -->
		<div style="width: 100%; max-width: 970px; margin: 10px auto;"><img src="img/banners/super-leaderboard.png" style="width: 100%; max-width: 970px;"></div>
		<!-- FIN BANNER -->
		
		<div style="width: 100%; max-width: 970px; margin: auto;">
			<!-- ARTÍCULO -->
			<div style="width: 350px; height: 350px; float: left; margin: 0px 10px 10px 0px; background: url(http://www.legislativoedomex.gob.mx/img/fotos/comunicados/0171a.jpg) 50% 50%; background-size: cover;">
				<div style="background:linear-gradient( 0deg, rgb(0,0,0,0.80) 0%, rgb(100,100,100,0.30) 60% ); width: 330px; height: 105px; padding: 235px 10px 10px 10px;">
					<p style="background: rgba(78,0,56,1.00); color: rgb(255,35,251,1.00); padding: 3px 10px; color: white; margin: 0px; font-size: 0.8em; text-transform: uppercase; width: fit-content;"><i class="far fa-bookmark"></i> Sección</p>
					<h3 style="color: white; margin: 0px;">Proyecto de Constitución se entrega en enero, confirma el Sectec</h1>
				</div>
			</div>
			<!-- FIN ARTÍCULO -->
			
			
			<div style="width: 300px; float: left;">
				<!-- ARTÍCULO -->
				<div style="width: 280px; height: 170px; float: left; margin: 0px 10px 10px 0px; background: url(http://www.legislativoedomex.gob.mx/img/fotos/comunicados/0186a.jpeg) 50% 50%; background-size: cover;">
					<div style="background:linear-gradient( 0deg, rgb(0,0,0,0.80) 0%, rgb(100,100,100,0.30) 60% ); width: 260px; height: 105px; padding: 55px 10px 10px 10px;">
						<p style="background: rgba(78,0,56,1.00); color: rgb(255,35,251,1.00); padding: 3px 10px; color: white; margin: 0px; font-size: 0.8em; text-transform: uppercase; width: fit-content;"><i class="far fa-bookmark"></i> Sección</p>
						<h3 style="color: white; margin: 0px;">Nueva Constitución de Edomex en 2022</h1>
					</div>
				</div>
				<!-- FIN ARTÍCULO -->
				
				<!-- ARTÍCULO -->
				<div style="width: 280px; height: 170px; float: left; margin: 0px 10px 0px 0px; background: url(http://www.legislativoedomex.gob.mx/img/fotos/comunicados/0192a.jpg) 50% 50%; background-size: cover;">
					<div style="background:linear-gradient( 0deg, rgb(0,0,0,0.80) 0%, rgb(100,100,100,0.30) 60% ); width: 260px; height: 105px; padding: 55px 10px 10px 10px;">
						<p style="background: rgba(78,0,56,1.00); color: rgb(255,35,251,1.00); padding: 3px 10px; color: white; margin: 0px; font-size: 0.8em; text-transform: uppercase; width: fit-content;"><i class="far fa-bookmark"></i> Sección</p>
						<h3 style="color: white; margin: 0px;">Impulsa el Congreso acciones a favor de la salud masculina</h1>
					</div>
				</div>
				<!-- FIN ARTÍCULO -->
			</div>
			
			<!-- BANNER -->
			<div style="width: 100%; max-width: 300px; margin: 0px auto; float: left;"><img data-aos="fade-up" data-aos-delay="100" src="img/banners/medium-rectangle.png" style="width: 100%; max-width: 300px;"></div>
			<!-- FIN BANNER -->			
			
			<div style="clear: both;"></div>
		</div>
		<div style="clear: both;"></div>
	</section>
	
	<section style="padding: 10px 0px; box-sizing: border-box; background: rgba(255,255,255,0.2); ">
		<div style="width: 100%; max-width: 970px; margin: auto;">
			
			<div style="width: 100%; max-width: 580px; padding: 5px; margin: 0px 10px 10px 0px; float: left;">
				<img src="http://www.legislativoedomex.gob.mx/img/fotos/comunicados/0171a.jpg" alt="SECTEC" style="width: 100%; max-width: 590px; margin: auto;">
				<h2 data-aos="fade-up" data-aos-delay="100" style="color: rgb(255,255,255); text-align: center; width: 80%; max-width: 456px; margin: auto; background: rgba(78,0,56,0.9); padding: 10px 20px;">Legislatura con perspectiva de género </h2>
			</div>
			
			<div style="width: 100%; max-width: 370px; float: left;">
				<iframe width="370" height="206" src="https://www.youtube.com/embed/A6wdJnlOpYU?start=7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h3 data-aos="fade-up" data-aos-delay="100" style="color: rgb(255,255,255);">Mexiquenses opinan</h3>
			</div>
			
			<div style="clear: both;"></div>
		</div>
	</section>	
			
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>