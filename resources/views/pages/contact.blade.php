@extends('layouts.web')

@section('page-title', 'COODESCOR | Contactanos')

@section('content')
	
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
					<a href="/">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Contacto</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<div class="agileits-contact">
		<div class="py-lg-3">
			<div class="w3ls-titles text-center mb-5 welcome-left">
				<h3>Contacto</h3>
				<span>
					<i class="fas fa-pills"></i>
				</span>
				<p class="mt-2">Comunicate con nosotros, pronto te responderemos</p>
			</div>
			<div class="d-flex">
				<div class="col-lg-5 w3_agileits-contact-left">
				</div>
				<div class="col-lg-7 contact-right-w3l">
					<!-- <h5 class="title-w3 text-center mb-5">Get In Touch</h5> -->
					<form action="#" method="post">
						<div class="d-flex space-d-flex">
							<div class="form-group grid-inputs">
								<input type="text" class="name form-control" name="First Name" placeholder="First Name" required="">
							</div>
							<div class="form-group grid-inputs">
								<input type="text" class="name form-control" name="Last Name" placeholder="Last Name" required="">
							</div>
						</div>
						<div class="form-group">
							<input type="email" class="name form-control" name="Email" placeholder="Email" required="">
						</div>
						<div class="form-group">
							<input type="text" class="name form-control" name="Subject" placeholder="Subject" required="">
						</div>

						<div class="form-group">
							<textarea placeholder="Your Message" required="" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->

	<!-- Map -->
	<div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.4173159585275!2d-75.8744803858965!3d8.746746895755708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a2fdf3e85a795%3A0xbf48873bada6c41e!2sCoodescor%20(%20Venta%20de%20medicamentos%20y%20dispositivos%20m%C3%A9dicos%20)!5e0!3m2!1ses!2sco!4v1613791112201!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	<!-- //Map -->

@endsection