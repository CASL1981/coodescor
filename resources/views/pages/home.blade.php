@extends('layout')

@section('content')
<!-- banner -->
    @include('partials.bannertop')
<!-- //banner -->

<!-- services -->
{{-- <div class="why-choose-agile" id="services">
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
</div> --}}
    <div class="row">
        <div class="col-md-12">
            @include('partials.services')
        </div>
    </div>
<!-- //services -->

<!-- blog -->
    @include('partials.homeblog')
<!-- //blog -->

<!-- treatments -->
    @include('partials.homeabout')
<!-- //treatments -->
@endsection