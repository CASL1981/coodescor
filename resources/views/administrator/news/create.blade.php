<div class="example-modal">
    <div class="modal modal-primary" id="crearNews">
    <form action="{{ route('news.store') }}" method="POST">
        @csrf
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Agrega el titulo de una nueva noticia</h4>
          </div>
          <div class="modal-body">
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">                
                <input type="text" name="title" class="form-control" required
                value="{{ old('title') }}"
                placeholder="Ingresa el titulo de la noticia">
                {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            <button class="btn btn-outline">crear noticia</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
    </form>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>