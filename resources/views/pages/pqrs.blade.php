@extends('layouts.web')

@section('page-title', 'COODESCOR | PQRS')

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
				<li class="breadcrumb-item active" aria-current="page">PQRS</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<!-- contact -->
	<div class="agileits-contact">
		<div class="py-lg-3">
			<div class="w3ls-titles text-center mb-5 welcome-left">
				<h3>PQRS</h3>				
				<p class="mt-2">Cuentanos tu experiencia en COODESCOR</p>
			</div>
			<div class="d-flex">
				<div class="col-lg-5 ml-5">
                    <p class="text-justify">De acuerdo con la Ley Estatutaria 1581 de 2012 de Protección de Datos y su Decreto reglamentario 1377 de 2013, se informa al usuario que los datos consignados en el presente formulario serán incorporados en una base de datos responsabilidad de la COOPERATIVA DE ENTIDADES DE SALUD DE CÓRDOBA “COODESCOR”, siendo tratados con la finalidad de: gestión de clientes, gestión administrativa, prospección comercial, fidelización de clientes, marketing y él envío de comunicaciones comerciales sobre nuestros productos y/o servicios.</p><br>
                    <p class="text-justify">Usted puede ejercitar los derechos de acceso, corrección, supresión, revocación o reclamo por infracción sobre los datos, mediante escrito dirigido a la COOPERATIVA DE ENTIDADES DE SALUD DE CÓRDOBA “COODESCOR”, a la dirección de correo electrónico: thcalidad@coodescor.org.co, indicando en el asunto el derecho que desea ejercitar, o mediante correo ordinario remitido a la dirección: Calle 28a No.23-03 B/ San Jose- Montería (Córdoba)</p>
                    </p>
				</div>
				<div class="col-lg-7 contact-right-w3l">
					<!-- <h5 class="title-w3 text-center mb-5">Get In Touch</h5> -->
					<form action="{{ route('pqrs.send') }}" method="POST">
						@csrf
						<div class="d-flex space-d-flex">
							<div class="form-group grid-inputs">
								<input type="text" class="name form-control" name="firstname" placeholder="Nombres" value="{{ old('firstname') }}">
								{!! $errors->first('firstname', '<span style="color:red; margin-bottom: 5px;">:message</span>') !!}
							</div>
							<div class="form-group grid-inputs">
								<input type="text" class="name form-control" name="lastname" placeholder="Apellidos" value="{{ old('lastname') }}">
								{!! $errors->first('lastname', '<span style="color:red; margin-bottom: 5px;">:message</span>') !!}
							</div>
						</div>
						<div class="form-group">
							<input type="email" class="name form-control" name="email" placeholder="Email" value="{{ old('email') }}">
							{!! $errors->first('email', '<span style="color:red; margin-bottom: 5px;">:message</span>') !!}
						</div>
						<div class="form-group">
							<input type="text" class="name form-control" name="subject" placeholder="Asunto" value="{{ old('subject') }}">
							{!! $errors->first('subject', '<span style="color:red; margin-bottom: 5px;">:message</span>') !!}
						</div>
						<div class="form-group">
							<textarea name="message" placeholder="escribe un mensaje" value="{{ old('message') }}" class="form-control"></textarea>
							{!! $errors->first('message', '<span style="color:red; margin-bottom: 5px;">:message</span>') !!}
						</div>

                        <div class="form-group">
							<input class="form-check-input" type="checkbox" name="terminosycondiciones" value="Acepto Consentimiento y Políticas de Tratamiento de Datos Personales" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Acepto Consentimiento y Políticas de Tratamiento de Datos Personales
                            </label>
							{!! $errors->first('terminosycondiciones', '<span style="color:red; margin-bottom: 5px;">:message</span>') !!}
						</div>

						<div class="form-group">
							<input type="submit" value="Enviar Mensaje">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
@endsection