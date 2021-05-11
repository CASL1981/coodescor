@extends('layouts.blog')

@section('content')

    <div class="col-lg-8 left-blog-info text-left">
        <div class="row mb-4">
            @foreach ($posts as $post)
                <div class="col-md-6 card">
                    <a href="{{ route('blog.post', $post->url) }}">
                        <img src="/images/{{ $post->photo }}" class="img-fluid" alt="">
                    </a>
                    <div class="card-body">
                        <ul class="blog-icons my-4">
                            <li>
                                <a href="#">
                                <i class="far fa-calendar-alt"></i>{{ $post->published_at->diffForHumans()}}</a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                <i class="far fa-comment"></i> 21</a>
                            </li>
                        </ul>
                        <h5 class="card-title ">
                            <a href="{{ route('blog.post', $post->url) }}">{{ $post->title }}</a>
                        </h5>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <div class="read inner mt-4">
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('tags.show', $tag) }}" class="badge badge-secondary">#{{ $tag->name }}</a>                                                
                            @endforeach
                        </div>
                        <div class="read inner mt-4">
                            <a href="{{ route('blog.post', $post->url) }}" class="btn btn-sm animated-button victoria-two">Leer Mas</a>
                        </div>
                    </div>
                </div>                                
            @endforeach                            
        </div>
        {{ $posts->links() }}
    </div>

@endsection