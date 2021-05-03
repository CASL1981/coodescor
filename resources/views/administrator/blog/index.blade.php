@extends('layouts.admin')

@section('dashboard_content')

<div class="box">
    <div class="box-header box-primary">
      <h3 class="box-title">Lista de publicaciones</h3>
      <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#crearPost"><i class="fa fa-plus"></i> Crear Publicación</button>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="posts-table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Titulo</th>
          <th>Extracto</th>          
          <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->excerpt}}</td>            
            <td>
              <a href="{{ route('blog.post', $post) }}" class="btn btn-default btn-xs" target="_blank"><i class="fa fa-eye"></i></a>
              <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
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