@extends('layouts.admin')

@section('dashboard_content')
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
    <h3 class="box-title">Crear Asociados</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{ route('asociados.store') }}" method="POST">
  @csrf
    <div class="box-body">
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