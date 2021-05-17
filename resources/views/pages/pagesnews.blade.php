@extends('layouts.news')

@section('page-title', 'COODESCOR | Noticias')

@section('content')
  <!-- blog -->
    
    <!--left-->
    <div class="col-lg-8 left-blog-info text-left">
        <div class="row mb-4">
            @foreach ($news as $news)
                <div class="col-md-6 card">
                    <a href="{{ route('news.post', $news->url) }}">
                        <img src="/images/{{ $news->photo }}" class="img-fluid" alt="">
                    </a>
                    <div class="card-body">
                        <ul class="blog-icons my-4">
                            <li>
                                <a href="{{ route('news.post', $news->url) }}">
                                <i class="far fa-calendar-alt"></i>{{ $news->published_at->diffForHumans() }}</a>
                            </li>
                        </ul>
                        <h5 class="card-title ">
                            <a href="{{ route('news.post', $news->url) }}">{{ $news->title }}</a>
                        </h5>
                        <p class="card-text">{{ $news->excerpt }}</p>
                        <i class="fas fa-user mr-2"></i>Publicada por {{ $news->owner->name }}</a>
                        <div class="read inner mt-4">
                            <a href="{{ route('news.post', $news->url) }}" class="btn btn-sm animated-button victoria-two">Leer Mas</a>
                        </div>
                    </div>
                </div>                
            @endforeach
        </div>        
    </div>
    <!--//left-->
                
    <!-- //blog-->
@endsection