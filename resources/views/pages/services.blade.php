@extends('layouts.web')

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
            <li class="breadcrumb-item active" aria-current="page">Asociados</li>
        </ol>
    </div>
</div>
<!-- //page details -->

{{-- Details services --}}
<div class="agileits-about py-md-5 py-5" id="services">
    <div class="container pt-lg-5">
        <div class="title-section text-center pb-md-5 welcome-left">
            <h3>Lineas de Productos</h3>
        </div>
        <div class="agileits-about-row row  text-center pt-md-0 pt-5">
            <div class="col-lg-4 col-sm-6 agileits-about-grids">
                <div class="p-md-5 p-sm-3">
                    <i class="fas fa-pills"></i>
                    <h4 class="mt-2 mb-3">Medicamentos</h4>
                    <p>
                        Genéricos y Comerciales<br>
                        POS y NO – POS<br>
                        Uso ambulatorio y Hospitalario<br>
                        Altos costos
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 agileits-about-grids  border-left border-right my-sm-0 my-5">
                <div class="p-md-5 p-sm-3">
                    <i class="fas fa-tooth"></i>
                    <h4 class="mt-2 mb-3">Odontologia</h4>
                    <p>Insumos para Odontologia</p>
                </div>
            </div>
            <div class="col-lg-4 agileits-about-grids">
                <div class="p-md-5 p-sm-3">
                    <i class="fas fa-prescription"></i>                    
                    <h4 class="mt-2 mb-3">Radiologia</h4>
                    <p>Insumos para Imagenologia</p>
                </div>
            </div>
        </div>
        <div class="agileits-about-row border-top row text-center pt-md-0 pt-5 mt-md-0 mt-5">
            <div class="col-lg-4 col-sm-6 agileits-about-grids">
                <div class="p-md-5 p-sm-3 col-label">
                    <i class="fas fa-syringe"></i>
                    <h4 class="mt-2 mb-3">Dispositvos Medicos</h4>
                    <p>Equipos Medicos</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 agileits-about-grids mt-lg-0 mt-md-3 border-left border-right pt-sm-0 pt-5">
                <div class="p-md-5 p-sm-3 col-label">
                    <i class="fas fa-mortar-pestle"></i>
                    <h4 class="mt-2 mb-3">Laboratorio Clinico</h4>
                    <p>insumos para Laboratorio Clínico</p>
                </div>
            </div>
            <div class="col-lg-4 agileits-about-grids pt-md-0 pt-5">
                <div class="p-md-5 p-sm-3 col-label">
                    <i class="fa fa-user-md"></i>
                    <h4 class="mt-2 mb-3">SISMED</h4>
                    <p>Herramienta SEVEN SISMED</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end Details services --}}
@endsection