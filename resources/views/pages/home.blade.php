@extends('layouts.web')

@section('page-title', 'COODESCOR | Inicio')

@section('content')
<!-- banner -->
    @include('partials.bannertop')
<!-- //banner -->

<!-- services -->
@include('partials.services')
    {{-- <div class="row">
        <div class="col-md-12">
        </div>
    </div> --}}
<!-- //services -->

<!-- blog -->
    @include('partials.homeblog')
<!-- //blog -->

<!-- treatments -->
    @include('partials.homeabout')
<!-- //treatments -->
@endsection