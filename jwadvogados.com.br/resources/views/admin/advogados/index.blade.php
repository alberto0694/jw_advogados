@extends('layouts.app')

@section('content')
  <div class="card-header">Advogados
    <a href="{{ route('advogados.create') }}"><button class="btn btn-primary">Novo</button></a>
    <a href="{{ route('dashboard') }}"><button class="btn btn-primary">Início</button></a>
  </div>

  <div class="card-body">
    <table>
    @foreach($advogados as $advogado)
      <tr>
        <td style="width: 20%"><img style="max-width: 60px;" src="{{ asset($advogado->foto) }}"></td>
        <td style="width: 50%">{{ $advogado->nome }}</td>
        <td style="width: 30%">
          <a href="{{ route('advogados.edit', $advogado->id) }}"><button class="btn btn-primary">Editar</button></a>
          <a href="{{ route('advogados.destroy', $advogado->id) }}"><button class="btn btn-danger">Deletar</button></a>
        </td>
      </tr>
    @endforeach
  </table>
  {{ $advogados->links() }}
@endsection