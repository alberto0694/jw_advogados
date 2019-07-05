@extends('layouts.app')

@section('content')

<div class="card-header">Post
  <a href="{{ route('dashboard') }}"><button class="btn btn-primary">Início</button></a>
</div>
<div class="card-body">
  <form method="post" enctype="multipart/form-data" class="form-horizontal" role="form" action="{{ route('posts.store') }}" >
    {{ csrf_field() }}
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> Titulo </label>
      <div class="col-sm-12">
        <input  id="titulo" name="titulo" type="text" class="col-xs-12 col-sm-12" />
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> Descrição </label>

      <div class="col-sm-12">
        <textarea rows="5" id="descricao" name="descricao" class="col-xs-12 col-sm-12"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> Fotos</label>

      <div class="col-sm-12">
        <input required id="fotos" name="fotos[]" type="file" multiple class="col-xs-12 col-sm-12" />
      </div>
    </div>
    <div class="form-group buttons-controls">
      <div class="col-sm-12">
        <a href="{{ route('posts.index') }}"><button type="button" class="btn btn-primary">Cancelar</button></a>
        <button type="submit" class="btn btn-success">Gravar</button>
      </div>
    </div>
  </form>
</div>

@endsection