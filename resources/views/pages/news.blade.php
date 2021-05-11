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
                    <li class="mx-2">
                        <a href="#">
                            <i class="far fa-comment"></i> 21</a>
                    </li>
                </ul>
                <h5 class="card-title ">
                    <a href="#">{{ $news->title }}</a>
                </h5>
                <p class="card-text">{!! $news->body !!}</p>

            </div>
        </div>
    </div>
@endsection