<!DOCTYPE html>
<html lang="es">

<head>
    <title>Coodescor | Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Medication a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/blog.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel='stylesheet' type='text/css' />
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
                                <i class="fas fa-map-marker-alt mr-2"></i>Parma Via Modena,BO, Italy</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 top-social-agile text-lg-right text-center">
                    <div class="row">
                        <div class="col-lg-7 col-6 top-w3layouts">
                            <p class="text-white">
                                <i class="far fa-envelope-open mr-2"></i>
                                <a href="mailto:info@example.com" class="text-white">info@example.com</a>
                            </p>
                        </div>
                        <div class="col-lg-5 col-6 header-w3layouts pl-4 text-lg-left">
                            <p class="text-white">
                                <i class="fas fa-phone mr-2"></i>+1 000263676</p>
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
                <!-- <h1>
                    <a class="navbar-brand font-weight-bold font-italic" href="index.html">
                        <span>M</span>edic
                        <i class="fas fa-syringe"></i>
                    </a>
                </h1> -->
                <!-- //logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item mt-lg-0 mt-3">
                            <a class="nav-link" href="{{ route('home') }}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item mx-lg-4 my-lg-0 my-3 active">
                            <a class="nav-link" href="about.html">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="#">Servicio</a>
                                <a class="dropdown-item" href="{{ route('partner') }}">Asociados</a>
                                <a class="dropdown-item" href="{{ route('blog') }}">Blog</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('blog.post') }}">Single Page</a>
                            </div>
                        </li>
                        <li class="nav-item mx-lg-4 my-lg-0 my-3">
                            <a class="nav-link" href="appointment.html">Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
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
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="" required="">
                            </div>
                            <button type="submit" class="btn submit mb-4">Login</button>
                            <p class="forgot-w3ls text-center pb-4">
                                <a href="#" class="text-white">Forgot your password?</a>
                            </p>
                            <p class="account-w3ls text-center pb-4">
                                Don't have an account?
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
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
                        <h5 class="text-center mb-4">Register Now</h5>
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

<!-- banner 2 -->
<div class="inner-banner-w3ls">
    <div class="container">

    </div>
</div>
<!-- //banner 2 -->
<!-- page details -->
<div class="breadcrumb-agile">
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Asociados</li>
        </ol>
    </div>
</div>
<!-- //page details -->

<!-- social media vertical -->
<div class="social">
    <ul>
        <li><a href="http://www.facebook.com" target="_blank" class="fab fa-facebook-f"></a></li>
        <li><a href="http://www.twitter.com" target="_blank" class="fab fa-twitter"></a></li>
        <li><a href="http://www.googleplus.com" target="_blank" class="fab fa-google-plus-g"></a></li>
        <li><a href="http://www.pinterest.com" target="_blank" class="fab fa-instagram"></a></li>			
    </ul>
</div>
<!-- end social media vertical -->

{{-- Images partner --}}
{{-- <div class="container-1"> --}}
    <div class="container-partner">
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/logos/hospitalsagradocorazon.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE HOSPITAL SAGRADO CORAZÓN DE JESÚS</h3>
                    <p>Calle 12 No. 8 - 99 B/Nazareth 23430 Valencia, Colombia</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/logos/camusantateresita.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE CAMU SANTA TERESITA</h3>
                    <p>LORICA CORDOBA Santa Cruz de Lorica, Cordoba, Colombia</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g3.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE HOSPITAL DE MONTELIBANO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g4.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE VIDASINÚ</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g5.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE HOSPITAL SAN NICOLÁS</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g1.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE CAMU IRIS LOPEZ DURAN</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g1.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE HOSPITAL SAN ANDRÉS APÓSTOL</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g2.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE HOSPITAL SAN DIEGO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g3.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE HOSPITAL SAN FRANCISCO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g4.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE HOSPITAL SAN JERÓNIMO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g5.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE HOSPITAL SAN JORGE</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g6.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE HOSPITAL SAN JOSÉ - SAN BERNARDO DEL VIENTO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g1.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE HOSPITAL SAN RAFAEL</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g2.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE HOSPITAL SAN VICENTE DE PAÚL</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g3.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE CAMU BUENAVISTA</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g4.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE CAMU PUERTO LIBERTADOR</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g5.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE CAMU LA APARTADA</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g6.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE CAMU PUERTO ESCONDIDO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g1.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE CAMU PUEBLO NUEVO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g2.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE CAMU SAN PELAYO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g3.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE CENTRO DE SALUD COTORRA</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="card-partner">
            <div class="imgBX">
                <img src="/images/g4.jpg" alt="asociado1">
            </div>
            <div class="contentBx">
                <div class="content">
                    <h3>ESE CAMU DEL PRADO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
    
{{-- Images partner --}}
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

<!-- js -->
{{-- <script src="js/jquery-2.2.3.min.js"></script> --}}
<!-- fixed navigation -->
{{-- <script src="js/fixed-nav.js"></script> --}}
<!-- //fixed navigation -->

<!-- smooth scrolling -->
{{-- <script src="js/SmoothScroll.min.js"></script> --}}
<!-- move-top -->
{{-- <script src="js/move-top.js"></script> --}}
<!-- easing -->
{{-- <script src="js/easing.js"></script> --}}
<!--  necessary snippets for few javascript files -->
{{-- <script src="js/medic.js"></script> --}}

{{-- <script src="js/bootstrap.min.js"></script> --}}
<!-- Necessary-JavaScript-File-For-Bootstrap -->
{{-- <script>
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 900);
		});
	});
</script>
<script>
	$(document).ready(function () {
		$().UItoTop({
			easingType: 'easeOutQuart'
		});

	});
</script> --}}
<!--// end-smoth-scrolling -->
</body>

</html>