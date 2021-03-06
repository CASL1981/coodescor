@extends('layouts.admin')

@section('dashboard_content-header')
<h1>
    POSTS
    <small>Actualizar Publicación</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Panel</a></li>
    <li class="active">Posts</li>
    <li >crear</li>
</ol>
@endsection

@section('dashboard_content')

@if ($post->photo)
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                <form action="{{ route('admin.photos.update', $post) }}"  method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-2">
                        <button class="btn btn-danger btn-xs" style="position: absolute"><i class="fa fa-remove"></i></button>
                        <img class="img-responsive" src="/images/{{ $post->photo }}" alt="">
                    </div>
                </form>            
            </div>
        </div>
    </div>    
@endif

<div class="row">
<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Detalle una Publicación</h3>
            </div>
                <div class="box-body">
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        <label >Titulo de la publicación</label>
                        <input type="text" name="title" class="form-control" 
                        value="{{ old('title', $post->title) }}"
                        placeholder="Ingresa el titulo de la publicación">
                        {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                    </div>                    
                    <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                        <label for="body">Cuerpo de la publicación</label>
                        <textarea id="editor" name="body" class="form-control" rows="10" placeholder="Ingresa Cuerpo de la publicación">{{ old('body', $post->body) }}</textarea>
                        {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
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
                            <input name="published_at" 
                            value="{{ old('published_at', $post->published_at ? $post->published_at->format('m/d/Y') : null) }}"
                            type="text" class="form-control pull-right" id="datepicker">
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                        <label for="category_id">Categorias</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Selecciona una categoria</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" 
                                {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                                >{{$category->name}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('category_id', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
                        <label>Etiquetas</label>
                        <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Selecciona una o varias etiquetas" style="width: 100%;">
                            @foreach ($tags as $tag)
                            <option {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach                          
                        </select>
                        {!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                        <label for="excerpt">Extracto de la publicación</label>
                        <textarea name="excerpt" class="form-control" >{{ old('excerpt', $post->excerpt) }}</textarea>
                        {!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <div class="dropzone"></div>
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

    {{-- Dropzone css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
@endpush

@push('script')
    <!-- bootstrap datepicker -->
    <script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.16.0/basic/ckeditor.js"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>

    {{-- Dropzon js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>

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

            CKEDITOR.config.height = 360;
        });

        var myDropzone = new Dropzone('.dropzone', {
            url: '/admin/posts/{{ $post->url }}/photos',
            paramName: 'photo',
            acceptedFiles: 'image/*',
            maxFilesize: 2,
            maxFiles: 1,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            dictDefaultMessage: 'Arrastra una foto de 1680 x 900 aquí para subirla'
        });

        myDropzone.on('error', function(file, res){
            var msg = res.errors.photo[0];
            $('.dz-error-message:last > span').text(msg);
        });

        Dropzone.autoDiscover = false;
    </script>
@endpush