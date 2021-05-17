@extends('layouts.news')

@section('content')

<div class="col-lg-8 left-blog-info text-left">
    <div class="row mb-4">
        @foreach ($news as $item)
            <div class="col-md-6 card">
                <a href="{{ route('news.post', $item->url) }}">
                    <img src="images/g1.jpg" class="img-fluid" alt="">
                </a>
                <div class="card-body">
                    <ul class="blog-icons my-4">
                        <li>
                            <a href="#">
                            <i class="far fa-calendar-alt"></i>{{ $item->published_at->diffForHumans()}}</a>
                        </li>                        
                    </ul>
                    <h5 class="card-title ">
                        <a href="{{ route('news.post', $item->url) }}">{{ $item->title }}</a>
                    </h5>
                    <p class="card-text">{{ $item->excerpt }}</p>
                    <div class="read inner mt-4">
                        <a href="{{ route('news.post', $item->url) }}" class="btn btn-sm animated-button victoria-two">Leer Mas</a>
                    </div>
                </div>
            </div>                                
        @endforeach                            
    </div>
    {{ $news->links() }}
</div>                    

@endsection