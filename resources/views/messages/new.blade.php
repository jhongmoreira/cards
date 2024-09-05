@extends('layouts.main')
@section('title','Cadastrar mensagem')
@section('content')

<h1>Cadastrar</h1>

<form action="{{ route('store') }}" method="post">
    @csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" name="titulo" id="titulo" class="form-control">
        </div>
    </div>
</div>    

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label for="mensagem">Mensagem</label>
          <input type="text" name="mensagem" id="mensagem" class="form-control">
        </div>
    </div>
</div>    

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label for="autor">Autor</label>
          <input type="text" name="autor" id="autor" class="form-control">
        </div>
    </div>
</div>    

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label for="categoria">Categoria</label>
          <select name="categoria" id="categoria" class="form form-control">
            <option value="depressao">Depressão</option>
            <option value="ansiedade">Ansiedade</option>
            <option value="feliz">Feliz</option>
          </select>
        </div>
    </div>
</div>   

<div class="row mt-2">
    <div class="col-md-2">
        <button class="form-control btn btn-primary" type="submit">Cadastrar</button>
    </div>
</div>

</form>

@endsection