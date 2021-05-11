@extends('layouts.web')

@section('content')
<!-- banner -->
    @include('partials.bannertop')
<!-- //banner -->
<div class="clearfix"></div>
<!-- services -->
    @include('partials.services')    
<!-- //services -->

<!-- blog -->
    @include('partials.homeblog', $posts)
<!-- //blog -->

<!-- treatments -->
    @include('partials.homeabout')
<!-- //treatments -->
@endsection