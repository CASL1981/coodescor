@extends('layouts.news')

@section('page-title', "Noticia | $news->title")

@section('content')
    <div class="col-lg-8 left-blog-info text-left">
        <div class="card">
            <a href="#">
                <img src="/images/{{ $news->photo }}" class="img-fluid" alt="">                
            </a>
            <div class="card-body">
                <ul class="blog-icons my-4">
                    <li>
                        <a href="#">
                            <i class="far fa-calendar-alt"></i> {{ $news->published_at->format('d M Y')}}</a>
                    </li>
                </ul>
                <h5 class="card-title ">
                    <a href="{{ route('news.post', $news->url) }}">{{ $news->title }}</a>
                </h5>
                {!! $news->body !!}

            </div>
        </div>
    </div>
@endsection