@extends('layouts.app')

@section('content')
  <div class="card-header">Posts do Blog
    <a href="{{ route('posts.create') }}"><button class="btn btn-primary">Novo</button></a>
    <a href="{{ route('dashboard') }}"><button class="btn btn-primary">Início</button></a>
  </div>

  <div class="card-body">
    <table>
    @foreach($posts as $post)
      <tr>
        <td style="width: 70%">{{ $post->titulo }}</td>
        <td style="width: 30%">
          <a href="{{ route('posts.edit', $post->id) }}"><button class="btn btn-primary">Editar</button></a>
          <a href="{{ route('posts.destroy', $post->id) }}"><button class="btn btn-danger">Deletar</button></a>
        </td>
      </tr>
    @endforeach
  </table>
  {{ $posts->links() }}
@endsection