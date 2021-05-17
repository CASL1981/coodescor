@extends('layouts.blog')

@section('content')
    <div class="col-lg-8 left-blog-info text-left">
        <div class="card">
            <a href="#">
                <img src="/images/{{ $post->photo }}" class="img-fluid" alt="">                
            </a>
            <div class="card-body">
                <ul class="blog-icons my-4">
                    <li>
                        <a href="#">
                            <i class="far fa-calendar-alt"></i> {{ optional($post->published_at)->format('d M Y')}}</a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <i class="far fa-comment"></i> 21</a>
                    </li>
                </ul>
                <h5 class="card-title ">
                    <a href="#">{{ $post->title }}</a>
                </h5>
                <p class="card-text">{!! $post->body !!}</p>

            </div>
        </div>
        <div class="comment-top">
            <h4>Commentarios</h4>
            @foreach ($post->comments as $comment)
                <div class="media">
                    <div class="media-body">
                        <h5 class="mt-0">{{ $comment->name }}</h5>
                        <p>{{ $comment->message }}</p>
                    </div>
                </div>                
            @endforeach
        </div>
        <div class="comment-top">
            <h4>realizar Comentario</h4>
            <div class="comment-bottom">
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input class="form-control" type="text" name="name" placeholder="Nombre y Apellido" required=""
                    value="{{ old('name') }}">
                    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                    <input class="form-control" type="email" name="email" placeholder="Email" required="">
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    <input class="form-control" type="text" name="subject" placeholder="Asunto" required="">
                    {!! $errors->first('subject', '<span class="help-block">:message</span>') !!}
                    <textarea class="form-control" name="message" placeholder="Mensage..." required=""></textarea>
                    {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                    <input type="text" name="post_id" value="{{ $post->id }}" hidden="true">
                    <button type="submit" class="btn btn-primary submit">Enviar</button>
                </form>
            </div>
        </div>

    </div>
@endsection