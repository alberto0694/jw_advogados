@extends('layouts.app')

@section('content')

<div class="card-header">Advogado
  <a href="{{ route('dashboard') }}"><button class="btn btn-primary">Início</button></a>
</div>
<div class="card-body">
  <form method="post" enctype="multipart/form-data" class="form-horizontal" role="form" action="{{ route('advogados.store') }}" >
    {{ csrf_field() }}
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> Nome </label>
      <div class="col-sm-12">
        <input  id="nome" name="nome" type="text" class="col-xs-12 col-sm-12" />
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> Descrição </label>

      <div class="col-sm-12">
        <textarea rows="5" id="descricao" name="descricao" class="col-xs-12 col-sm-12"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> Foto</label>

      <div class="col-sm-12">
        <input required id="foto" name="foto" type="file" class="col-xs-12 col-sm-12" />
      </div>
    </div>
    <div class="form-group buttons-controls">
      <div class="col-sm-12">
        <a href="{{ route('advogados.index') }}"><button type="button" class="btn btn-primary">Cancelar</button></a>
        <button type="submit" class="btn btn-success">Gravar</button>
      </div>
    </div>
  </form>
</div>

@endsection