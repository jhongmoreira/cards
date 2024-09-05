@extends('layouts.main')
@section('title','Página Inicial')
@section('content')

<div class="row">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CARDs</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Todos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categoria/depressao">Depressão</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categoria/ansiedade">Ansiedade</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<hr>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-inner">
                @php $ativo = true; @endphp
                    @foreach($messages as $message)
                    <div class="carousel-item {{ $ativo ? 'active' : '' }}">
                        <div style="min-height: 250px;">
                            <div class="carousel-caption d-block">
                                <h5>{{ $message->titulo }}</h5>
                                <p>{{ $message->mensagem }}</p>
                                <p>{{ $message->autor }}</p>
                            </div>
                        </div>
                    </div>
                    @php $ativo = false; @endphp
                @endforeach                
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>    
</div>

<div class="row">
    <div class="col-md-4 mx-auto text-center mt-5">
        <a href="{{ route('new') }}">Novo</a>
    </div>
</div>
@endsection