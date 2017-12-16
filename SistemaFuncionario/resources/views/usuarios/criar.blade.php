@extends('template')


@section('conteudo')
  <form method="POST" action="/salva-usuario">
    {!! csrf_field() !!}
    <div class="form-group">

          @if($errors->any())

      <ul class="list-group">
        
        @foreach($errors->all() as $error)

        <li class="list-group-item list-group-item-warning">{{ $error }}</li>


        @endforeach 

      </ul>


      @endif



      <label>Nome</label>
      <input type="text" class="form-control" name="name" value="{{old('name')}}">
    </div>

    <div class="form-group">
      <label>Genero</label>
      <input type="text" class="form-control" name="genero" value="{{old('genero')}}">
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" name="email" value="{{old('email')}}">
    </div>

    <div class="form-group">
      <label>CPF</label>
      <input type="number" class="form-control" name="cpf" value="{{old('cpf')}}">
    </div>

    <div class="form-group">
      <label>Data Nascimento</label>
      <input type="date" class="form-control" name="data" value="{{old('data')}}">
    </div>

    <a class="btn btn-secondary" href="/index-usuarios" >
      <i class="fa fa-arrow-left"></i> Voltar
    </a>
    
    <button type="submit" class="btn btn-success">
      <i class="fa fa-check-circle"></i>
      Salvar
    </button>

  </form>
@stop