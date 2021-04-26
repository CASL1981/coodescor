@extends('layouts.admin')

@section('dashboard_content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
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
    <h3 class="box-title">Editar Asociados</h3>
  </div>  
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{ route('asociados.update', $partner->id) }}" method="POST">
  @csrf @method('PUT')
    <div class="box-body">
    <div class="row">
        <div class="form-group col-md-6">
          <label for="nit">NIT</label>
          <input class="form-control form-control-sm" type="text" name="nit" value="{{ $partner->nit }}">
          @error('nit')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="form-group col-md-6">
            <label>Rason Social</label>
            <input class="form-control form-control-sm" type="text" name="name" value="{{ $partner->name }}">
            @error('name')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label>Dirección</label>
            <input class="form-control form-control-sm" type="text" name="address" value="{{ $partner->address }}">
            @error('addres')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="form-group col-md-6">
            <label>Imagen</label>
            <input class="form-control form-control-sm" type="text" name="logo" value="{{ $partner->logo }}">
            @error('logo')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <label>Orden</label>
            <input class="form-control form-control-sm" type="number" name="order" value={{ $partner->order }}>
            @error('addres')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="form-group col-md-4">
            <label>Estado</label>
            <input class="form-control form-control-sm" type="number" name="status" value={{ $partner->status }}>
            @error('logo')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="form-group col-md-4">
            <label>Habilitado</label>
            <input class="form-control form-control-sm" type="number" name="enabled" value={{ $partner->enabled }}>
            @error('logo')<span class="error invalid-feedback">{{ $message }}</span>@enderror
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