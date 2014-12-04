<?php
session_start();
if(isset($_SESSION['admin']) or isset($_SESSION['nivel2']) or isset($_SESSION['nivel3']) or isset($_SESSION['nivel4'])){
    
}else{
    header("location:loginerror.php");
}
?>
<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>GOboard</title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
		<!--[if IE 8]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css" />
		<![endif]-->
		<!-- ENDS CSS -->	
		
		<!-- GOOGLE FONTS 
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->
		
		<!-- JS -->
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		
		<!-- Isotope -->
		<script src="js/jquery.isotope.min.js"></script>
		
		<!--[if IE]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
	      		/* EXAMPLE */
	      		//DD_belatedPNG.fix('*');
	    	</script>
		<![endif]-->
		<!-- ENDS JS -->
		
		
		<!-- Nivo slider -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<script src="js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- ENDS Nivo slider -->
		
		<!-- tabs -->
		<link rel="stylesheet" href="css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/tabs.js"></script>
  		<!-- ENDS tabs -->
  		
  		<!-- prettyPhoto -->
		<script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<link rel="stylesheet" media="screen" href="css/superfish-left.css" /> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  type="text/css"/> 
		<script src="js/tweet/jquery.tweet.js" type="text/javascript"></script> 
		<!-- ENDS Tweet -->
		
		<!-- Fancybox -->
		<link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<!-- ENDS Fancybox -->
		
		

	</head>
	
	<body class="home">

			<!-- HEADER -->
			<div id="header">
				<!-- wrapper-header -->
				<div class="wrapper">
					<a href="index.php"><img class=logo id="logo" src="images2/logo.png" alt="Nova" /></a>
					<!-- search -->
					<div class="top-search">
						<form  method="get" id="searchform" action="#">
							<div>
								<input type="text" value="Search..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
								<input type="submit" id="searchsubmit" value=" " /> <br>                               
                                <a href="logout.php">Cerrar sesion</a>
							</div>
						</form>
					</div>
					<!-- ENDS search -->
				</div>
				<!-- ENDS wrapper-header -->					
			</div>
			<!-- ENDS HEADER -->
			
			
			<!-- Menu -->
			<div id="menu">
			
			
			
				<!-- ENDS menu-holder -->
				<div id="menu-holder">
					<!-- wrapper-menu -->
					<div class="wrapper">
						<!-- Navigation -->
						<ul id="nav" class="sf-menu">
							<li class="current-menu-item"><a href="index.php">Home<span class="subheader">Bienvenido</span></a></li>
							<li><a href="unidad.php">Unidades<span class="subheader">Unidades</span></a>
								<ul>
							
									<li><a href="registrounidad.php"><span> Registro de unidad</span></a></li>
<!--									<li><a href="features-toggle.php"><span> Toggle box</span></a></li>
									<li><a href="features-tabs.php"><span> Tabs</span></a></li>
									<li><a href="features-infobox.php"><span> Text box</span></a></li>
									<li><a href="features-monobox.php"><span> Icons</span></a></li>-->
								</ul>
							</li>
                                                        <li><a href="ventas.php">Ventas<span class="subheader">Ventas</span></a></li>
							<li><a href="articulo.php">Articulos <span class="subheader">Showcase work</span></a>
                                                            <ul>
                                                                    <li><a href="registroarticulo.php"><span> Registro de articulo  </span></a></li>
                                                                    <li><a href="listaarticulo.php"><span>Lista de articulos</span></a></li>
									
								</ul>
                                                        </li>
                                                        <li><a href="cliente.php">Cliente<span class="subheader">Cliente</span></a>
								<ul>
									<li><a href="registrocliente.php"><span> Registro de cliente  </span></a></li>
									<li><a href="gallery-2.php"><span></span></a></li>
									<li><a href="video-gallery.php"><span>  </span></a></li>
								</ul>
							</li>
							<li><a href="almacen.php">Almacen<span class="subheader">Almacen</span></a></li>
                                                        <li><a href="empleado.php">Empleado<span class="subheader">Empleado</span></a>
                                                            <ul>
                                                                <li><a href="registroempleado.php"><span> Registro de empleado</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="proveedor.php">Proveedor<span class="subheader">Proveedor</span></a>
                                                            <ul>
                                                                <li><a href="registroproveedor.php"><span> Registro proveedor</span></a></li>
                                                                <li><a href="lista_proveedor.php"><span>Lista de proveedores</span></a></li>
                                                            </ul>
                                                        </li>
						</ul>
						<!-- Navigation -->
					</div>
					<!-- wrapper-menu -->
				</div>
				<!-- ENDS menu-holder -->
			</div>
			<!-- ENDS Menu -->
			
			
			

			<!-- Slider -->
			<div id="slider-block">
				<div id="slider-holder">
					<div id="slider">
						<a href="http://www.luiszuno.com"><img src="images2/almacen.png" title="Bienvenido a Goutboard!" alt="" /></a>
						<a href="http://themeforest.net/user/Ansimuz/portfolio?ref=ansimuz"><img src="images2/articulo.png" title="Tu Mejor Sistema" alt="" /></a>
					</div>
				</div>
			</div>
			<!-- ENDS Slider -->
			
			<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					<!-- headline -->
					<div class="clear"></div>
					<div id="headline">
						
					</div>
					<!-- ENDS headline -->
					
					<!-- content -->
					<div id="content">
						<!-- abajo de las imagenes -->
                        
							<div class="panes">
							
								<!-- Posts -->
								<div>
									<ul class="blocks-thumbs thumbs-rollover">
										<li>
											<a href="single.html" class="thumb" title="An image"><img src="img/dummies/282x150.gif" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">Lorem ipsum dolor</a>
												Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.
											</div>
											<a href="single.html" class="link-button"><span>Read more &#8594;</span></a>
										</li>
										<li>
											<a href="single.html" class="thumb" title="An image"><img src="img/dummies/282x150.gif" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">Lorem ipsum dolor</a>
												Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.
											</div>
											<a href="single.html" class="link-button"><span>Read more &#8594;</span></a>
										</li>
										<li>
											<a href="single.html" class="thumb" title="An image"><img src="img/dummies/282x150.gif" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">Lorem ipsum dolor</a>
												Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.
											</div>
											<a href="single.html" class="link-button"><span>Read more &#8594;</span></a>
										</li>
									</ul>
								</div>
								<!-- ENDS posts -->
								
								<!-- Information  -->
								<div>
									<div class="plain-text">
										<h6>Pellentesque habitant morbi tristique senectus et netus et malesuada.</h6> 
										<p>Fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. </p>
										<p>Fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.Fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper <a href="single.html">This is a link</a>. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. </p>
										<a href="single.html" class="link-button"><span>Read more &#8594;</span></a>
									</div>
								</div>
								<!-- ENDS Information -->

								<!-- Posts -->
								<div>
									<ul class="blocks-thumbs thumbs-rollover">
										<li>
											<a href="single.html" class="thumb" title="An image"><img src="img/dummies/282x150.gif" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">Lorem ipsum dolor</a>
												Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.
											</div>
											<a href="single.html" class="link-button"><span>Read more &#8594;</span></a>
										</li>
										<li>
											<a href="single.html" class="thumb" title="An image"><img src="img/dummies/282x150.gif" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">Lorem ipsum dolor</a>
												Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.
											</div>
											<a href="single.html" class="link-button"><span>Read more &#8594;</span></a>
										</li>
										<li>
											<a href="single.html" class="thumb" title="An image"><img src="img/dummies/282x150.gif" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">Lorem ipsum dolor</a>
												Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.
											</div>
											<a href="single.html" class="link-button"><span>Read more &#8594;</span></a>
										</li>
									</ul>
								</div>
								<!-- ENDS posts -->
								
								
							</div>
							<!-- ENDS TABS -->
		
		
		
					</div>
					<!-- ENDS content -->
				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->
			
			<!-- Twitter -->
			<div id="twitter">
				<div class="wrapper">
					<a href="#" id="prev-tweet"></a>
					<a href="#" id="next-tweet"></a>
					<img id="bird" src="img/bird.png" alt="Tweets" />
					<div id="tweets">
						<ul class="tweet_list"></ul>
					</div>
				</div>
			</div>
			<!-- ENDS Twitter -->

			
			<!-- FOOTER -->
			<div id="footer">
				<!-- wrapper-footer -->
				<div class="wrapper">
					<!-- footer-cols -->
					<ul id="footer-cols">
<!--						<li class="col">
							<h6>Pages</h6>
							<ul>
								<li class="page_item"><a href="index.html">Home</a></li>
								<li class="page_item"><a href="features.html">Unidades</a></li>
								<li class="page_item"><a href="blog.html">Ventas</a></li>
								<li class="page_item"><a href="portfolio.html">Articulos</a></li>
								<li class="page_item"><a href="gallery.html">Cliente</a></li>
								<li class="page_item"><a href="contact.html">Almacen</a></li>
                                <li class="page_item"><a href="contact.html">Empleado</a></li>
                                <li class="page_item"><a href="contact.html">Proveedor</a></li>
							</ul>
						</li>-->
						
<!--						<li class="col">
							<h6>Categories</h6>
							<ul>
								<li><a href="#">Webdesign projects senectus</a></li>
								<li><a href="#/">Wordpress projects senectus</a></li>
								<li><a href="#">Vestibulum tortor quam</a></li>
								<li><a href="#">Code projects amet quam egestas</a></li>
								<li><a href="#">Web design projects senectus</a></li>
								<li><a href="#/">Marketplace projects</a></li>
								<li><a href="#">Writting projects senectus</a></li>
								<li><a href="#">Drawings projects fames Aenean</a></li>
								<li><a href="#/">Wordpress projects Aenean ultricies</a></li>
							</ul>
						</li>-->
<!--						<li class="col">
							<h6>About the theme</h6>
							Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Cursus faucibus, tortor neque egestas augue, eu vulputate magna eros.
						</li>-->
						
					</ul>
					<!-- ENDS footer-cols -->
				</div>
				<!-- ENDS wrapper-footer -->
			</div>
			<!-- ENDS FOOTER -->
		
		
			<!-- Bottom -->
			<div id="bottom">
				 wrapper-bottom 
				<div class="wrapper">
					<div id="bottom-text"> <a href="http://www.uabcs.com.mx"> uabcs.com</a> </div>
					 Social 
					<ul class="social ">
						<li><a href="http://www.facebook.com" class="poshytip  facebook" title="Facebook"></a></li>
						<li><a href="http://www.twitter.com" class="poshytip twitter" title="tweeter"></a></li>
						
						<li><a href="http://www.vimeo.com" class="poshytip vimeo" title="Vimeo"></a></li>
						<li><a href="http://www.youtube.com" class="poshytip youtube" title="Youtube"></a></li>
					</ul>
					 ENDS Social 
					<div id="to-top" class="poshytip" title="To top"></div>
				</div>
				<!-- ENDS wrapper-bottom -->
			</div>
			<!-- ENDS Bottom -->
	<?php
    require 'lib/Inter.php';
    session_start();

    $X = new Inter();
    $nombrerec=$_POST['username'];
    $passrec=$_POST['password'];
    
        
        
        
    $status=0;
        
    
        $resultado = $X->consultalogin($nombrerec,$passrec);
    
        foreach($resultado as $res) {
            
           
           
           
        }
        
        
    
        switch ($res['nivel_usuario'])
            {
                case 1:
                    $_SESSION['admin'] = $nombrerec;
                    echo $res['nivel_usuario'].$_SESSION['admin'];
                    $status=1;
                    
                    $X->editarUsuario($status,$nombrerec);            
                                         
//                    echo 'usuario andres';
                    break;
                case 2:
                    $_SESSION['nivel2'] = $nombrerec;
                    echo $res['nivel_usuario'].$_SESSION['nivel2'];
                    $status=1;
                    
                    $X->editarUsuario($status,$nombrerec);  
//                    echo 'usuario miguel';
                    break;
                case 3:
                    $_SESSION['nivel3'] = $nombrerec;
                    echo $res['nivel_usuario'].$_SESSION['nivel2'];
                    $status=1;
                    
                    $X->editarUsuario($status,$nombrerec);  
//                    echo 'usuario riki';
                    break;
                case 4:
                    $_SESSION['nivel4'] = $nombrerec;
                    echo $res['nivel_usuario'].$_SESSION['nivel2'];
                    $status=1;
                    
                    $X->editarUsuario($status,$nombrerec);  
//                    echo 'usuario chino';
                    break;
//                    
            }
//        if($i==1){
//           
////            echo '<a href="logout.php">Logout</a>';
//            $_SESSION['admin'] = $nombrerec;
//            
//            
//        }else{
//            $_SESSION['error'] = "Login incorrecto";
//            
//            
//        }
        

?>
	</body>
</html>