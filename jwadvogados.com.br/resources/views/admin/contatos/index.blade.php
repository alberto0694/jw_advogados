@extends('layouts.app')

@section('content')
  <div class="card-header">Contatos do Site
    <a href="{{ route('dashboard') }}"><button class="btn btn-primary">Início</button></a>
  </div>

  <div class="card-body">
    <table>
      <tr>
        <td style="width: 30%"><b>Nome</b></td>
        <td style="width: 40%"><b>Assunto</b></td>
        <td style="width: 30%">
          <b>Ações</b>
        </td>
      </tr>
    @foreach($contatos as $contato)
      <tr>
        <td style="width: 30%">{{ $contato->nome }}</td>
        <td style="width: 40%">{{ $contato->assunto }}</td>
        <td style="width: 30%">
          <a href="{{ route('contatos.edit', $contato->id) }}"><button class="btn btn-primary">Visualizar</button></a>
          <a href="{{ route('contatos.destroy', $contato->id) }}"><button class="btn btn-danger">Deletar</button></a>
        </td>
      </tr>
    @endforeach
  </table>
  {{ $contatos->links() }}
@endsection