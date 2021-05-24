@extends('layouts.admin')

@section('dashboard_content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $posts->count() }}</h3>

          <p>Publicaciones</p>
        </div>
        <div class="icon">
          <i class="ion ion-chatbubbles"></i>
        </div>
        <a href="{{ route('posts.index') }}" class="small-box-footer">+ Infomación <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $news->count() }}</h3>
          <p>Noticias</p>
        </div>
        <div class="icon">
          <i class="ion ion-clipboard"></i>
        </div>
        <a href="{{ route('news.index') }}" class="small-box-footer">+ Información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $partners->count() }}</h3>
          <p>Asociados</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-stalker"></i>
        </div>
        <a href="{{ route('asociados.index') }}" class="small-box-footer">+ Informmación <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $comments->count() }}</h3>

          <p>Comentarios</p>
        </div>
        <div class="icon">
          <i class="ion ion-chatbox"></i>
        </div>
        <a href="{{ route('comments.index') }}" class="small-box-footer">+ Información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
@endsection