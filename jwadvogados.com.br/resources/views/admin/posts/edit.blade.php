@extends('layouts.app')

@section('content')

<div class="card-header">Advogado
  <a href="{{ route('dashboard') }}"><button class="btn btn-primary">Início</button></a>
</div>
<div class="card-body">
  <form method="post" enctype="multipart/form-data" class="form-horizontal" role="form" action="{{ route('posts.update', $post->id) }}" >
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> Nome </label>
      <div class="col-sm-12">
        <input  id="titulo" name="titulo" value="{{ $post->titulo }}" type="text" class="col-xs-12 col-sm-12" />
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> Descrição </label>
      <div class="col-sm-12">
        <textarea rows="5" id="descricao" name="descricao" class="col-xs-12 col-sm-12"> {{ $post->descricao }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> Foto</label>

      <div class="col-sm-12">
        <input id="foto" name="fotos[]" type="file" multiple class="col-xs-12 col-sm-12" />
        @foreach($post->imagens as $imagem)
          <img style="width: 60px; margin-top: 10px; margin-right: 10px;" src="{{ asset($imagem->caminho) }}">
        @endforeach
      </div>
    </div>
    <div class="form-group buttons-controls">
      <div class="col-sm-12">
        <a href="{{ route('advogados.index') }}">
          <button type="button" class="btn btn-primary">Cancelar</button>
        </a>
        <button type="submit" class="btn btn-success">Gravar</button>
      </div>
    </div>
  </form>
</div>

@endsection