@extends('layouts.news')

@section('page-title', 'COODESCOR | Noticias')

@section('content')
    
<!-- banner 2 -->
<div class="inner-banner-w3ls">
    <div class="container">

    </div>
</div>
<!-- //banner 2 -->
<!-- page details -->

<!-- //page details -->

  <!-- blog -->
    
    <!--left-->
    <div class="col-lg-8 left-blog-info text-left">
        <div class="row mb-4">
            @foreach ($news as $noticia)
                <div class="col-md-6 card">
                    <a href="#">
                        <img src="/images/{{ $noticia->photo }}" class="img-fluid" alt="">
                    </a>
                    <div class="card-body">
                        <ul class="blog-icons my-4">
                            <li>
                                <a href="#">
                                <i class="far fa-calendar-alt"></i>{{ $noticia->published_at->diffForHumans() }}</a>
                            </li>
                        </ul>
                        <h5 class="card-title ">
                            <a href="#">{{ $noticia->title }}</a>
                        </h5>
                        <p class="card-text">{{ $noticia->excerpt }}</p>
                        <div class="read inner mt-4">
                            <a href="#" class="btn btn-sm animated-button victoria-two">Leer Mas</a>
                        </div>
                    </div>
                </div>                
            @endforeach
        </div>        
    </div>
    <!--//left-->
                
    <!-- //blog-->
@endsection