@extends('template')

@section('conteudo')
<form method="POST" action="/altera-usuario/{{$usuario->id }}">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
      <label>Genero</label>
      <input type="text" class="form-control" name="genero">
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" name="email">
    </div>

    <div class="form-group">
      <label>CPF</label>
      <input type="number" class="form-control" name="cpf">
    </div>

    <div class="form-group">
      <label>Data Nascimento</label>
      <input type="date" class="form-control" name="data">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection