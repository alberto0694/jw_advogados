@extends('layouts.app')

@section('content')
  <div class="card-header">Dashboard</div>

  <div class="card-body">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

      <div class="row row-dashboard">
        <div class="col-md-4">
          <a href="{{ route('advogados.index') }}">
            <button class="btn btn-primary">
              Advogados
            </button>
          </a>
        </div>
        <div class="col-md-4">
          <a href="{{ route('posts.index') }}">
            <button class="btn btn-primary">
              Post do Blog
            </button>
          </a>
        </div>
        <div class="col-md-4">
          <a href="{{ route('contatos.index') }}">
            <button class="btn btn-primary">
              Contatos
            </button>
          </a>
        </div>
      </div>
  </div>

@endsection
