@extends('layouts.admin')

@section('dashboard_content-header')
<h1>
    POSTS
    <small>Crear Publicación</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Panel</a></li>
    <li class="active">Posts</li>
    <li >crear</li>
</ol>
@endsection

@section('dashboard_content')
<div class="row">
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Detalle una Publicación</h3>
            </div>
                <div class="box-body">
                    <div class="form-group">
                        <label >Titulo de la publicación</label>
                        <input type="text" name="title" class="form-control" placeholder="Ingresa el titulo de la publicación">
                    </div>                    
                    <div class="form-group">
                        <label for="body">Cuerpo de la publicación</label>
                        <textarea id="editor" name="body" class="form-control" rows="10" placeholder="Ingresa Cuerpo de la publicación"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Resumen de la publicación</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Fecha de Publicación:</label>        
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker">
                        </div>
                      </div>
                    <div class="form-group">
                        <label for="category_id">Categorias</label>
                        <select name="category" id="category_id" class="form-control">
                            <option value="">Selecciona una categoria</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Etiquetas</label>
                        <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Selecciona una o varias etiquetas" style="width: 100%;">
                          @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                          @endforeach                          
                        </select>
                      </div>
                    <div class="form-group">
                        <label for="excerpt">Extracto de la publicación</label>
                        <textarea name="excerpt" class="form-control" ></textarea>
                    </div>
                    <input type="submit" value="Guardar Publicación" class="btn btn-primary btn-block">
                </div>
            </div>
        </div>
</form>
</div>
@endsection

@push('style')
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
      <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
@endpush

@push('script')
    <!-- bootstrap datepicker -->
    <script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.16.0/basic/ckeditor.js"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>
    <script>
        //Date picker
        $('#datepicker').datepicker({
        autoclose: true
        });

        //Initialize Select2 Elements
        $(".select2").select2();

        $(function () {    
            CKEDITOR.replace('editor', {
                uiColor: '#CCEAEE',
                language: 'es'
            });
        });
    </script>
@endpush