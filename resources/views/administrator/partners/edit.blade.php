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
@if ($partner->logo)
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                <form action="{{ route('admin.partner.logo.update', $partner) }}"  method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-2">
                        <button class="btn btn-danger btn-xs" style="position: absolute"><i class="fa fa-remove"></i></button>
                        <img class="img-responsive" src="/images/{{ $partner->logo }}" alt="">
                    </div>
                </form>            
            </div>
        </div>
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
        <div class="form-group col-md-2">
            <label>Orden</label>
            <input class="form-control form-control-sm" type="number" name="order" value="{{ $partner->order }}" min="0">
            @error('order')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="form-group col-md-4">
            <div class="dropzone"></div>
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

@push('style')
    {{-- Dropzone css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
@endpush

@push('script')
    {{-- Dropzon js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>

    <script>
        
        var myDropzone = new Dropzone('.dropzone', {
            url: '/admin/news/{{ $partner->id }}/logo',
            paramName: 'logo',
            acceptedFiles: 'image/*',
            maxFilesize: 2,
            maxFiles: 1,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            dictDefaultMessage: 'Arrastra una foto minimo de 350 x 250 aquí para subirla'
        });

        myDropzone.on('error', function(file, res){
            var msg = res.errors.photo[0];
            $('.dz-error-message:last > span').text(msg);
        });

        Dropzone.autoDiscover = false;
    </script>
@endpush