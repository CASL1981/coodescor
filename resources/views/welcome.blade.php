<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COODESCOR</title>
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- Styles -->
        

        <!-- Custom-Files -->
        
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link rel="stylesheet" href="css/fontawesome-all.css">
        <!-- Font-Awesome-Icons-CSS -->

        <!-- //Custom-Files -->

        <!-- Web-Fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" 
            rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
            rel="stylesheet">
        <!-- //Web-Fonts -->
    </head>
    <body>
    <!-- header -->
	<header>
		<!-- top-bar -->
		<div class="top-bar py-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 top-social-agile">
						<div class="row">
							<!-- social icons -->
							<ul class="col-lg-4 col-6 top-right-info text-center">
								<li>
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="mx-3">
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li class="ml-3">
									<a href="#">
										<i class="fab fa-pinterest-p"></i>
									</a>
								</li>
							</ul>
							<!-- //social icons -->
							<div class="col-6 header-top_w3layouts pl-3 text-lg-left text-center">
								<p class="text-white">
                                <i class="fas fa-map-marker-alt mr-2"></i>Calle 28A # 23- 03, Monteria</p>
							</div>
						</div>
					</div>
					<div class="col-lg-5 top-social-agile text-lg-right text-center">
						<div class="row">
							<div class="col-lg-7 col-6 top-w3layouts">
								<p class="text-white">
									<a href="#" class="text-white">comunicación@coodescro.org.co</a>
								</p>
							</div>
							<div class="col-lg-5 col-6 header-w3layouts pl-4 text-lg-left">
								<p class="text-white">                                    
									<i class="fas fa-phone mr-2"></i>+4 7918080</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
	<div id="home">
		<!-- navigation -->
		<div class="main-top py-1">
			<nav class="navbar navbar-expand-lg navbar-light fixed-navi">
				<div class="container">
					<!-- logo -->
					<h1>
						<a class="navbar-brand font-weight-bold font-italic" href="index.html">
							<span>C</span>oodescor
							<i class="fas fa-syringe"></i>
						</a>
					</h1>
					<!-- //logo -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item active mt-lg-0 mt-3">
								<a class="nav-link" href="index.html">Inicio
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="#">Nosotros</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
								    aria-haspopup="true" aria-expanded="false">Paginas
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">

									<a class="dropdown-item scroll" href="#">Servicios</a>
									<a class="dropdown-item" href="#">Asociados</a>
									<a class="dropdown-item scroll" href="#">Blog</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Noticias</a>
								</div>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="#">Contactanos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">PQRS</a>
							</li>
						</ul>
						<!-- login -->
						<a href="#" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" data-toggle="modal" data-target="#exampleModalCenter1">
							<i class="fas fa-sign-in-alt mr-2"></i>Login</a>
						<!-- //login -->
					</div>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
		<!-- modal -->
		<!-- login -->
		<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<!-- <div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div> -->
					<div class="modal-body">
						<div class="login px-4 mx-auto mw-100">
							<h5 class="text-center mb-4">Login Now</h5>
							<form action="#" method="post">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="name" placeholder="Ingresa Email" required="true">
								</div>
								<div class="form-group">
									<label class="mb-2">Contraseña</label>
									<input type="password" class="form-control" name="password" placeholder="Contrseña" required="true">
								</div>
								<button type="submit" class="btn submit mb-4">Login</button>
								<p class="forgot-w3ls text-center pb-4">
									<a href="#" class="text-white">Recordar Contraseña?</a>
								</p>
								<p class="account-w3ls text-center pb-4">
									No tienes cuenta?
									<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Crea una ahora</a>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //login -->
		<!-- register -->
		<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-2">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="login px-4 mx-auto mw-100">
							<h5 class="text-center mb-4">Registro</h5>
							<form action="#" method="post">
								<div class="form-group">
									<label>Your Name</label>
									<input type="text" class="form-control" name="name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="mb-2">Password</label>
									<input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Confirm Password</label>
									<input type="password" class="form-control" name="password" id="password2" placeholder="" required="">
								</div>
								<button type="submit" class="btn btn-primary submit mb-4">Register</button>
								<p class="text-center pb-2">
									<a href="#" class="text-white">By clicking Register, I agree to your terms</a>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //register -->
		<!-- //modal -->
	</div>
	<!-- //header 2 -->

	<!-- banner -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="banner-top1">
						<!-- <div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Medical services that you
									<span>can trust</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
									minim veniam, quis nostrud exercitation
									ullamco.</p>
								<a href="about.html">Read More
									<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
								</a>
							</div>
						</div> -->
					</div>
				</li>
				<li>
					<div class="banner-top2">
						<div class="banner-info_agile_w3ls">
							<!-- <div class="container">
								<h3>Medical excellence
									<span>every day</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
									minim veniam, quis nostrud exercitation
									ullamco.</p>
								<a href="about.html">Read More
									<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
								</a>
							</div> -->
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top3">
						<div class="banner-info_agile_w3ls">
							<!-- <div class="container">
								<h3>The Hospital of the
									<span>future, today</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
									minim veniam, quis nostrud exercitation
									ullamco.</p>
								<a href="about.html">Read More
									<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
								</a>
							</div> -->
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top4">
						<div class="banner-info_agile_w3ls">
							<!-- <div class="container">
								<h3>The Hospital of the
									<span>future, today</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
									minim veniam, quis nostrud exercitation
									ullamco.</p>
								<a href="about.html">Read More
									<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
								</a>
							</div> -->
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

	<!-- banner bottom -->
	<!-- <div class="banner-bottom py-5">
		<div class="d-flex container py-xl-3 py-lg-3">
			<div class="banner-left-bottom-w3ls offset-lg-2 offset-md-1">
				<h6 class="text-white">Sed do eiusmod tempor</h6>
				<h3 class="text-white my-3">High professional doctors</h3>
				<p>all specialists have extensive practical experience and regularly training courses in educational centers of the
					world</p>
			</div>
			<div class="button">
				<a href="about.html" class="w3ls-button-agile">Read More
					<i class="fas fa-hand-point-right"></i>
				</a>
			</div>
		</div>
	</div> -->
	<!-- //banner bottom -->

	<!-- middle section -->
	<!-- <div class="w3ls-welcome py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-5 welcome-right">
					<img src="images/b2.png" alt=" " class="img-fluid">
				</div>
				<div class="col-lg-7 welcome-left mt-4">
					<h3>Awesome Theme for Medical and Health Websites</h3>
					<h6 class="mt-3">Suspendisse porta erat sit amet eros sagittis</h6>
					<h4 class="my-4 font-italic">Cum sociis natoque penatibus et magnis dis parturient montesmus, Proin vel nibh et
						elit mollis commodo et nec augue
						tristique sed.</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta erat sit amet eros sagittis, quis
						hendrerit
						libero aliquam. Fusce semper augue ac dolor efficitur, a pretium metus pellentesque.</p>
					<div class="readmore-w3-agileits mt-md-5 mt-4">
						<a href="single.html" class="w3ls-button-agile text-dark">View Some More</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- //middle section -->
	<!-- social media vertical -->
	<div class="social">
		<ul>
			<li><a href="http://www.facebook.com" target="_blank" class="fab fa-facebook-f"></a></li>
			<li><a href="http://www.twitter.com" target="_blank" class="fab fa-twitter"></a></li>
			<li><a href="http://www.googleplus.com" target="_blank" class="fab fa-google-plus-g"></a></li>
			<li><a href="http://www.pinterest.com" target="_blank" class="fab fa-pinterest"></a></li>			
		</ul>
	</div>
	<!-- end social media vertical -->
	
	<!-- services -->
	<div class="why-choose-agile" id="services">
		<div class="container pt-xl-5 pt-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Nuestros Servicios</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<!-- <p class="mt-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
			</div>
			<div class="row why-choose-agile-grids-top">
				<div class="col-lg-4 agileits-w3layouts-grid">
					<div class="row wthree_agile_us">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fas fa-user-md"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Administración de Servicios Farmaceuticos</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
					</div>
					<div class="row wthree_agile_us my-5">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fas fa-syringe"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Seguimiento Farmacoterapeuticos</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
					</div>
					<!-- <div class="row wthree_agile_us">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fab fa-medrt"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Medical Treatment</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
					</div> -->
				</div>
				<div class="col-lg-4 agileits-w3layouts-grid img text-center">
					<img src="images/b3.png" alt=" " class="img-fluid" />
				</div>
				<div class="col-lg-4 agileits-w3layouts-grid">
					<div class="row wthree_agile_us">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">SISMED</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-medkit"></i>
							</div>
						</div>
					</div>
					<div class="row wthree_agile_us my-5">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Venta Medicamentos y Dispositivos Medicos</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-wheelchair"></i>
							</div>
						</div>
					</div>
					<!-- <div class="row wthree_agile_us">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Laboratory</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-hospital"></i>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- blog -->
	<div class="blog-w3ls" id="blog">
		<div class="mr-5 ml-5 py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title text-white">Notas de Interes</h3>
				<span>
					<i class="fas fa-user-md text-white"></i>
				</span>
				<div class="row">
					<div class="col-md-6">
						<h4 class="title text-white">Blog</h4>
					</div>
					<div class="col-md-6">
						<h4 class="title text-white">Noticias</h4>
					</div>
				</div>
				<!-- <p class="mt-2 text-white">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
			</div>
			<!-- blog -->
			<div class="row package-grids mt-5">
				<div class="col-md-2 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog1.jpg" alt="" class="img-fluid" />
						</a>
						<h3>13
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Titulo Post 1</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-2 pricing my-md-0 my-5">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog2.jpg" alt="" class="img-fluid" />
						</a>
						<h3>24
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Titulo Post 2</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-2 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog3.jpg" alt="" class="img-fluid" />
						</a>
						<h3>30
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Noticia 1</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-2 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog1.jpg" alt="" class="img-fluid" />
						</a>
						<h3>13
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Titulo Post 1</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-2 pricing my-md-0 my-5">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog2.jpg" alt="" class="img-fluid" />
						</a>
						<h3>24
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Titulo Post 2</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-2 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog3.jpg" alt="" class="img-fluid" />
						</a>
						<h3>30
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Noticia 1</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
			</div>
			<!-- end blog -->
		</div>

		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				
				<h3 class="title text-white">Noticias</h3>
				
			</div>
			<!-- blog -->
			<div class="row package-grids mt-5">
				<div class="col-md-4 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog1.jpg" alt="" class="img-fluid" />
						</a>
						<h3>13
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Titulo Post 1</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-4 pricing my-md-0 my-5">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog2.jpg" alt="" class="img-fluid" />
						</a>
						<h3>24
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Titulo Post 2</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-4 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog3.jpg" alt="" class="img-fluid" />
						</a>
						<h3>30
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Noticia 1</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
			</div>
			<!-- end blog -->
		</div>
	</div>
	<!-- //blog -->

	<!-- treatments -->
	<div class="screen-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Nosotros</h3>				
			</div>
			<div class="row">
				<div class="col-lg-6 ">
					<!-- <img src="images/b5.png" alt="" class="img-fluid"> -->
					<iframe width="560" height="315" src="https://www.youtube.com/embed/nExpesRf_us?controls=0" 
					frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
					</iframe>
				</div>
				<div class="col-lg-6">
					<a class="twitter-timeline" data-lang="es" data-width="550" data-height="300" href="https://twitter.com/coodescor?ref_src=twsrc%5Etfw">Tweets by coodescor</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
			<!-- <div class="row">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.417372103258!2d-75.87448038551621!3d8.74674159371697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a2fdf3e85a795%3A0xbf48873bada6c41e!2sCoodescor%20(%20Venta%20de%20medicamentos%20y%20dispositivos%20m%C3%A9dicos%20)!5e0!3m2!1ses-419!2sco!4v1610936615137!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div> -->
		</div>
	</div>
			
	<!-- //treatments -->

	<!-- footer -->
	<footer>
		<div class="w3ls-footer-grids pt-sm-4 pt-3">
			<div class="container py-xl-5 py-lg-3">
				<div class="row">
					<div class="col-md-4 w3l-footer">
						<h2 class="mb-sm-3 mb-2">
							<a href="index.html" class="text-white font-italic font-weight-bold">
								<span>C</span>oodescor
								<i class="fas fa-syringe ml-2"></i>
							</a>
						</h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
							aperiam,
							eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					</div>
					<div class="col-md-4 w3l-footer my-md-0 my-4">
						<h3 class="mb-sm-3 mb-2 text-white">Address</h3>
						<ul class="list-unstyled">
							<li>
								<i class="fas fa-location-arrow float-left"></i>
								<p class="ml-4">Cooperativa de Entidades de Salud de Cordoba
									<span>Lorem ipsum dolor,</span>Monteria,Calle 28A # 23 -03 Barrio San Jóse. </p>
								<div class="clearfix"></div>
							</li>
							<li class="my-3">
								<i class="fas fa-phone float-left"></i>
								<p class="ml-4">(4) 7918080</p>
								<div class="clearfix"></div>
							</li>
							<li>
								<i class="far fa-envelope-open float-left"></i>
								<a href="mailto:info@example.com" class="ml-3">mail@example.com</a>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>
					<div class="col-md-4 w3l-footer">
						<h3 class="mb-sm-3 mb-2 text-white">Links Rapidos</h3>
						<div class="nav-w3-l">
							<ul class="list-unstyled">
								<li>
									<a href="index.html">Inicio</a>
								</li>
								<li class="mt-2">
									<a href="about.html">Asociados</a>
								</li>
								<li class="mt-2">
									<a href="gallery.html">Blog</a>
								</li>
								<li class="mt-2">
									<a href="appointment.html">Noticias</a>
								</li>
								<li class="mt-2">
									<a href="contact.html">Contactanos</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="border-top mt-5 pt-lg-4 pt-3 pb-lg-0 pb-3 text-center">
					<p class="copy-right-grids mt-lg-1">© 2018 Medic. All Rights Reserved | Design by
						<a href="https://w3layouts.com/" target="_blank">W3layouts</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
    <!-- //footer -->
    
    <!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
    </script>
    
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->
    </body>
</html>
