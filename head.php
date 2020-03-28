<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "es">
<!-- BEGIN head -->


<head>
	<meta name="google-site-verification" content="aOwLZKAxbIA6aa8K8fPrF5HPTCikYTK2qXSYJrrSPs0" />
	<script data-ad-client="ca-pub-2126345999915909" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script type="text/javascript" src="web/jquery.js"></script>
	<script type="text/javascript" src="web/ajax-poll.php"></script>



	<?php
		//importacion de clases a el sitio 
	require_once("db/Db.class.php");
	require_once("db/Crud.class.php");
		//require("db/easyCRUD/Nota.class.php");


	// Se crean los objetos para la conexion a base de datos
	$db = new DB();
	$crud  = new Crud();

	$resInst = $crud->allDescDate("noticias");
	$resUltima = $crud->findDesc("*","ubicacion","marquesina","0","10");
	$delicias1 = $crud->findDesc("*","ubicacion","delicias1","0","1");
	$delicias2 = $crud->findDesc("*","ubicacion","delicias2","0","1");
	$delicias3 = $crud->findDesc("*","ubicacion","delicias3","0","1");
	$delicias4 = $crud->findDesc("*","ubicacion","delicias4","0","1");
	$delicias5 = $crud->findDesc("*","ubicacion","delicias5","0","1");
	$delicias6 = $crud->findDesc("*","ubicacion","delicias6","0","1");

	$chihuahuaprincipal= $crud->findDesc("*","ubicacion","chihuahuaprincipal","0","1");
	$chihuahua1= $crud->findDesc("*","ubicacion","chihuahua1","0","1");
	$chihuahua2= $crud->findDesc("*","ubicacion","chihuahua2","0","1");
	$chihuahua3= $crud->findDesc("*","ubicacion","chihuahua3","0","1");
	$chihuahua4= $crud->findDesc("*","ubicacion","chihuahua4","0","1");

	$nacionalprincipal= $crud->findDesc("*","ubicacion","nacionalprincipal","0","1");
	$nacional1= $crud->findDesc("*","ubicacion","nacional1","0","1");
	$nacional2= $crud->findDesc("*","ubicacion","nacional2","0","1");
	$nacional3= $crud->findDesc("*","ubicacion","nacional3","0","1");
	$nacional4= $crud->findDesc("*","ubicacion","nacional4","0","1");

	$mundo1= $crud->findDesc("*","ubicacion","mundo1","0","1");
	$mundo2= $crud->findDesc("*","ubicacion","mundo2","0","1");
	$mundo3= $crud->findDesc("*","ubicacion","mundo3","0","1");

	$resVideoPortada = $crud->findVideo("vp");
	$resVideoEspecial = $crud->findVideo("ve");
	?>



	<!-- Meta Tags -->

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Información que te interesa del Delicias, Tu Estado,  México y el Mundo" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

	<!-- Stylesheets -->
	<link type="text/css" rel="stylesheet" href="css/reset.css" />
	<link type="text/css" rel="stylesheet" href="css/main-stylesheet.css" />
	<link type="text/css" rel="stylesheet" href="css/lightbox.css" />
	<link type="text/css" rel="stylesheet" href="css/shortcode.css" />
	<link type="text/css" rel="stylesheet" href="css/fonts.css" />
	<link type="text/css" rel="stylesheet" href="css/colors.css" />
	<link type="text/css" rel="stylesheet" href="css/types.css" />
		<!--[if lte IE 8]>
		<link type="text/css" rel="stylesheet" href="css/ie-ancient.css" />
		<![endif]-->
		<link type="text/css" rel="stylesheet" href="css/responsive.css" />

		<!--Slider-->
		<link rel="stylesheet" type="text/css" href="css/slider/layout.css" />
		<link rel="stylesheet" type="text/css" href="css/slider/layout-rtl.css" />
		<link rel="stylesheet" type="text/css" href="css/slider/style1.css" />
		<link rel="stylesheet" type="text/css" href="css/slider/style1-rtl.css" />
		<?

		date_default_timezone_set("America/Chihuahua");

		function fecha(){

			$meses = array(Enero, Febrero, Marzo, Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre);

			$dias = array(Domingo, Lunes, Martes, Miercoles, Jueves, Viernes, Sabado);

			$dia = date(j); 

			$dia2 = date(w); 

			$mes = date(n)-1; 

			$ano = date(Y); 

			$fecha = $dias[$dia2].", ".$dia." de ".$meses[$mes]." de ".$ano;

			return $fecha;

		}

		?>
		<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
		<!--<link href="bootstrap/css/styles.css" rel="stylesheet">-->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-2126345999915909",
          enable_page_level_ads: true
     });
		</script>


		<!-- END head -->

		<!-- END head -->
	</head>

	<!-- BEGIN body -->
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=203134989723717&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!-- BEGIN .boxed -->
		<div class="boxed">
			<!-- BEGIN .header -->
			<div class="header">
<div class="wrapper" style="padding-bottom: 2%;">
						<div class="widget">
								<div class="widget-social">
									<div class="social-bar">
									<br><b><span ><? $hoy = fecha(); echo $hoy; ?></span></b>
										

										<!--<a href="#" class="social-icon"><i class="number">1.2m</i><span class="facebook">Facebook</span></a>
										<a href="#" class="social-icon"><i class="number">2.6k</i><span class="twitter">Twitter</span></a>
									 <!--<a href="#" class="social-icon"><i class="number">1.4k</i><span class="google">Google+</span></a>
										<a href="#" class="social-icon"><i class="number">823</i><span class="linkedin">Linkedin</span></a>-->
									</div>
								</div> 
							</div>
				
				
					<div class="header-logo">
						<div id="logo" class="header-logo">
							<div>
							<span class="digital">Digital</span>
							</div>
						   <div>
							<span class="capital">D</span>
							<span class="nocapital">elicias</span>
							<span class="espacio">&nbsp;</span>
							<span class="capital">H</span>    
							<span class="nocapital2">oy</span>
							</div>
						</div>  
					</div>
				<div class="header-addons">
						<!--<div class="header-search">
							<form action="busqueda.php" method="get">
								<input type="text" placeholder="Buscador" value="" class="search-input" name="s" />
								<input type="submit" value="Search" class="search-button" />
							</form>
						</div>-->
                      <!--  <div class="header-weather">
							<span class="report"></span>
							<img class="conditionimagen" width="35px">
							<span class="city"><small class="condition"></small><b>Delicias, Chihuahua</b></span>
						</div> -->
						
					</div>
					
				<!-- END .wrapper -->
				</div>
				
				<!-- END .wrapper -->

			<div class="main-menu">

				<!-- BEGIN .wrapper -->
				<div class="wrapper">

						<!-- END .wrapper -->
					</div>

				</div>

				<div class="secondary-menu">

					<!-- BEGIN .wrapper -->
					<div class="wrapper">
<nav>
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="categoria.php?class=delicias&pag=1">Delicias</a></li>
							<li><a href="categoria.php?class=estado&pag=1">Estado</a></li>
							<li><a href="categoria.php?class=nacional&pag=1">Nacional</a></li>
							<li><a href="categoria.php?class=mundo&pag=1">Mundo</a></li>
							<li><a href="categoria.php?class=deportes&pag=1">Deportes</a></li>
							<li><a href="categoria.php?class=gobierno&pag=1"><img src="images/meoquihoy.png" alt="meoquihoy" height="27.5" width="129"></a></li>
							<li><a href="categoria.php?class=economia&pag=1">Economia</a></li>
							<li><a href="categoria.php?class=espectaculos&pag=1">Espectaculos</a></li>
							<li><a href="categoria.php?class=ciencia&pag=1">Ciencia</a></li>
							<li><a href="categoria.php?class=tecnologia&pag=1">Tecnología</a></li>
							<li><a href="categoria.php?class=editorial&pag=1">Editorial</a></li>


						</ul>
</nav>
						<!-- END .wrapper -->
					</div>

				</div>
			
			<!-- END .header -->
			</div>
			
			<!-- BEGIN .content -->
			<div class="content">

				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					 <div class="ad-banner">
					 	 <!--<div class="fb-like" data-href="https://www.facebook.com/deliciashoy" data-width="728" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>-->

						<!--<a href="contact-us.html" class="ad-link top"><span class="icon-text">&#9662;</span>Advertisement<span class="icon-text">&#9662;</span></a>-->

						<!--<a href="#" target="_blank"><img src="images/100dias.gif" alt="100 dias de trabajo" width="600" height="200" /></a>-->

					</div> 

					<div id="break" class="breaking-news">
						<span class="the-title" style="background: #2182b4;">Últimas Noticias</span>
						<ul>
							<li><a href="<?php echo 'post.php?id='.$resInst['0']['id'].''?>" style="color: #F55F22;"><?php echo $resInst['0']['titulo'];  ?></a></li>
							<li><a href="<?php echo 'post.php?id='.$resInst['1']['id'].''?>" style="color: #F55F22;"><?php echo $resInst['1']['titulo'];  ?></a></li>
							<li><a href="<?php echo 'post.php?id='.$resInst['2']['id'].''?>" style="color: #F55F22;"><?php echo $resInst['2']['titulo'];  ?></a></li>
							<li><a href="<?php echo 'post.php?id='.$resInst['3']['id'].''?>" style="color: #F55F22;"><?php echo $resInst['3']['titulo'];  ?></a></li>
							<li><a href="<?php echo 'post.php?id='.$resInst['4']['id'].''?>" style="color: #F55F22;"><?php echo $resInst['4']['titulo'];  ?></a></li>
							<li><a href="<?php echo 'post.php?id='.$resInst['5']['id'].''?>" style="color: #F55F22;"><?php echo $resInst['5']['titulo'];  ?></a></li> 
						</ul>
					</div>



					