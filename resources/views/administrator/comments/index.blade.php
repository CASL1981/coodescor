@extends('layouts.admin')

@section('dashboard_content')

<div class="box">
    <div class="box-header box-primary">
      <h3 class="box-title">Listado de comentarios</h3>      
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="posts-table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nombre</th>
          <th>Email</th>
          <th>Asunto</th>
          <th>Mensaje</th>
          <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($comments as $comment)
          <tr>
            <td>{{$comment->name}}</td>
            <td>{{$comment->email}}</td>
            <td>{{$comment->subject}}</td>
            <td>{{$comment->message}}</td>
            <td>              
              <a href="{{ route('comments.edit', $comment) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
            </td>
          </tr>          
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>Titulo</th>
          <th>Extracto</th>          
          <th>Opciones</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

@endsection

@push('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
@endpush

@push('script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<script>
    $(function () { 
      $('#posts-table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
</script>
@endpush