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
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Crear Asociados</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{ route('asociados.store') }}" method="POST">
  @csrf
    <div class="card-body">
    <div class="row">
        <div class="form-group col-md-6">
          <label for="nit">NIT</label>
          <input class="form-control form-control-sm" type="text" id="nit" name="nit" placeholder="NIT">
          @error('nit')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="form-group col-md-6">
            <label>Rason Social</label>
            <input class="form-control form-control-sm" type="text" name="name" placeholder="Razon Social">
            @error('name')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label>Dirección</label>
            <input class="form-control form-control-sm" type="text" name="address" placeholder="Dirección ESE">
            @error('addres')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="form-group col-md-6">
            <label>Imagen</label>
            <input class="form-control form-control-sm" type="text" name="logo" placeholder="archivo image">
            @error('logo')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
    </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </form>
</div>

@endsection