@extends('layouts.app')

@section('content')

<div class="card-header">Advogado</div>
<div class="card-body">
  <form class="form-horizontal" role="form" action="#" >
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> <b>Nome</b> </label>
      <div class="col-sm-12">
        <label  class="col-xs-12 col-sm-12">
          {{ $contato->nome }}
        </label>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> <b>E-mail</b> </label>

      <div class="col-sm-12">
        <label  class="col-xs-12 col-sm-12">
          {{ $contato->email }}
        </label>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> <b>Telefone</b> </label>

      <div class="col-sm-12">
        <label  class="col-xs-12 col-sm-12">
          {{ $contato->telefone }}
        </label>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> <b>Assunto</b> </label>

      <div class="col-sm-12">
        <label  class="col-xs-12 col-sm-12">
          {{ $contato->assunto }}
        </label>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 no-padding-right"> <b>Mensagem</b> </label>

      <div class="col-sm-12">
        <label  class="col-xs-12 col-sm-12">
          {{ $contato->mensagem }}
        </label>
      </div>
    </div>
    <div class="form-group buttons-controls">
      <div class="col-sm-12">
        <a href="{{ route('contatos.index') }}"><button type="button" class="btn btn-primary">Voltar</button></a>
      </div>
    </div>
  </form>
</div>

@endsection