@extends('layouts.web')

@section('page-title', 'COODESCOR | Nosotros')

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
            <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
        </ol>
    </div>
</div>
<!-- //page details -->

<!-- about -->
	<section class="about">
		<div class="container">
			<div class="w3ls-titles text-center mb-md-5 mb-4 welcome-left">
				<h3 >Quienes Somos</h3>
				<span>
					<i class="fas fa-pills"></i>
				</span>
			</div>
			<p class="aboutpara text-center mx-auto">La Cooperativa de Entidades de Salud de Córdoba “COODESCOR” es una empresa sin ánimo de lucro creada bajo 
				la forma de Administración Pública Cooperativa y dedicada a la gestión de Insumos Hospitalarios Esenciales.</p>

			<div class="row about_grids mt-5 mb-5">
				<div class="col-lg-4" style="background: #D0e3f5;">					
					<strong><h3 class="mt-3 text-dark text-center">MISIÓN</h3></strong>
					<p class="my-3 text-justify">Ofrecemos soluciones integrales en la comercialización y gestión de insumos hospitalarios esenciales que generen un alto valor agregado a nuestros asociados y clientes con adecuado soporte tecnológico y talento humano competente y ético.</p>					
				</div>
				<div class="col-lg-4 ml-3" style="background: #D0e3f5;">
					<strong><h3 class="mt-3 text-dark text-center">VISIÓN</h3></strong>
					<p class="my-3 text-justify">Ser una empresa competitiva y sostenible, reconocida por sus asociados y clientes no asociados  como el principal aliado estratégico que favorece y fortalece la prestación del servicio.</p>					
				</div>
				<div class="col-lg-3 ml-3" style="background: #D0e3f5;">
					<strong><h3 class="mt-3 text-dark text-center">VALORES</h3></strong>
					<p >Responsabilidad</p>
					<p >Compromiso</p>
					<p >Transparencia</p>
					<p >Solidaridad</p>
					<p >Ética</p>					
				</div>
			</div>
		</div>
	</section>
	<!-- //about -->
	
	<!-- banner bottom -->
	<div class="banner-bottom py-5">
		<div class="d-flex container py-xl-3 py-lg-3">
			<div class="banner-left-bottom-w3ls offset-lg-2 offset-md-1">
				<h3 class="text-white my-3">Historia</h3>
				<p class="text-justify">En diciembre de 1996 el Servicio seccional de salud de Córdoba preocupado por el alto costo de los insumos hospitalarios esenciales, comparte con los hospitales del departamento la idea de crear mecanismos para optimizar la adquisición de estos insumos; llevando a la Asamblea Departamental el interés de crear una Administración Pública Cooperativa que se encargue de tal fin. A través de la ordenanza Nº 43 de diciembre 13 de 1996 se le da vida jurídica a esta empresa de Economía Solidaria, inscrita en la Cámara de Comercio de Montería el 5 de Junio de 1997 bajo el número 00000608 del libro I de las personas jurídicas sin animo de lucro.</p><br>
				<p class="text-justify">Es así como nace La Cooperativa de entidades de Salud de Córdoba “COODESCOR”, una persona jurídica de derecho privado, creada como empresa de bienes y servicios en la forma de administración publica cooperativa, de responsabilidad limitada, numero de entidades asociadas y patrimonio social variable e ilimitado, regida por las disposiciones legales vigentes en Colombia, la doctrina cooperativa y los estatutos.</p>
			</div>
			{{-- <div class="button">
				<a href="about.html" class="w3ls-button-agile">Read More
					<i class="fas fa-hand-point-right"></i>
				</a>
			</div> --}}
		</div>
	</div>
	<!-- //banner bottom -->

	<!-- middle section -->
	<div class="w3ls-welcome py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 welcome-right py-4">
					<img src="images/mapacordoba.png" alt=" " class="img-fluid">
				</div>
				<div class="col-lg-7 welcome-left mt-4">
					<h3>Nuestros Servicios Farmaceuticos</h3>
					<h6 class="mt-3">Farmacia Valencia</h6>
					<h6 class="mt-3">Farmacia Lorica</h6>
					<h6 class="mt-3">Farmacia Montelibano</h6>
					<h6 class="mt-3">Farmacias Monteria</h6>
					<h6 class="mt-3">Farmacia Planeta Rica</h6>
					<h6 class="mt-3">farmacia San Antero</h6>
					<h6 class="mt-3">farmacia San Pelayo</h6>

					<h4 class="my-4 font-italic">Cum sociis natoque penatibus et magnis dis parturient montesmus, Proin vel nibh et
						elit mollis commodo et nec augue
						tristique sed.</h4>
					{{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta erat sit amet eros sagittis, quis
						hendrerit
						libero aliquam. Fusce semper augue ac dolor efficitur, a pretium metus pellentesque.</p> --}}
					{{-- <div class="readmore-w3-agileits mt-md-5 mt-4">
						<a href="single.html" class="w3ls-button-agile text-dark">View Some More</a>
					</div> --}}
				</div>
			</div>
		</div>
	</div>
	<!-- //middle section -->

	@include('partials.services')
	<!-- //services -->

	@endsection