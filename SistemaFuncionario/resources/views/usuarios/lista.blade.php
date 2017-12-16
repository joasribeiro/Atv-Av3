@extends('template')


@section('conteudo')
  <div class="panel">
    <div class="panel-heading">
      aqui vai mostra todos da lista
    </div>
    <div class="panel-body">
      <form>
        <div class="form-group">
          <input type="text" class="form-control" name="pesquisa"/>
        </div>
        <button type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Genero</th>
        <th>Email</th>
        <th>CPF</th>
        <th>Data Nascimento</th>
        <th>Funções</th>
      </tr>
    </thead>

    <tbody>
      @foreach($usuarios as $usuario)
        <tr>
            <td> {{ $usuario->id }} </td>
            <td> {{ $usuario->name }} </td>
            <td> {{ $usuario->genero }} </td>
            <td> {{ $usuario->email }} </td>
            <td> {{ $usuario->cpf }} </td>
            <td> {{ $usuario->data }} </td>
            <td>
              <a class="btn btn-secondary" href="/editar-usuario/{{ $usuario->id }}">
                <i class="fa fa-edit"></i> Editar
              </a>

              <form style="display: inline;" method="POST" action="deletar-usuario/{{ $usuario->id }}">
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}
              <button type="submit" class="btn btn-danger" href="/editar-usuario/{{ $usuario->id }}">
                <i class="fa fa-trash"></i> Deletar
              </button>
              </form>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/cria-usuario" class="btn btn-success">
    <i class="fa fa-plus-circle"></i>
    Criar um Usuário
  </a>
@stop
    