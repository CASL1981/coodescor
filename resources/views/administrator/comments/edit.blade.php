@extends('layouts.admin')

@section('dashboard_content')
{{-- @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error</strong> Soluciona las siguientes validaciones<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Editar Comentario</h3>
  </div>  
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{ route('comments.update', $comment) }}" method="POST">
  @csrf @method('PUT')
    <div class="box-body">
    <div class="row">
        <div class="form-group col-md-6">
          <label for="nit">Nombre</label>
          <input class="form-control form-control-sm" type="text" name="name" value="{{ old('name', $comment->name) }}">
          @error('name')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="form-group col-md-6">
            <label>Email</label>
            <input class="form-control form-control-sm" type="email" name="email" value="{{ old('name', $comment->email) }}">
            @error('email')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <label>Asunto</label>
            <input class="form-control form-control-sm" type="text" name="subject" value="{{ old('subject', $comment->subject) }}"">
            @error('subject')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>        
        <div class="form-group col-md-12">
            <label>Asunto</label>
            <textarea name="message" rows="10" class="form-control">{{ old('message', $comment->message) }}</textarea>
            @error('message')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>        
    </div>    
    </div>
    <!-- /.card-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
  </form>
</div>

@endsection