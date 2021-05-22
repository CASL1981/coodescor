@extends('layouts.admin')

@section('dashboard_content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="box">
    <div class="box-header with-border">
      <h3 class="card-title">Lista de Asociados</h3>
    </div>
    <!-- /.card-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>NIT</th>
            <th>Razon Social</th>
            <th>Dirección</th>
            <th>O</th>
            <th>E</th>
            <th>H</th>
            <th>imagen</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>          
            @foreach ($partners as $partner)
            <tr>
                <td>{{ $partner->nit }}</td>
                <td>{{ $partner->name }}</td>
                <td>{{ $partner->address }}</td>
                <td>{{ $partner->order }}</td>
                <td>{{ $partner->status ? "Sí" : "No" }}</td>
                <td>{{ $partner->enabled ? "Habilitado" : "Inhabil" }}</td>
                <td width="10px" height="10px"><img class="img-responsive" src="/images/{{ $partner->logo }}" alt=""></td>
                <td>
                  <form action="{{ route('asociados.destroy',$partner->id) }}" method="POST">
                      <a class="btn btn-primary btn-xs" href="{{ route('asociados.edit',$partner->id) }}">
                      <i class="fa fa-pencil"></i></a>
                      @csrf
                      @method('DELETE')      
                      <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>
                      </button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          {!! $partners->links() !!}
          {{-- <li class="page-item"><a class="page-link" href="#">«</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li> --}}
      </ul>
    </div>
  </div>
@endsection