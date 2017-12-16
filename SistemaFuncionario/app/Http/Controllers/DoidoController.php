<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\funcionario;
use App\Http\Requests\ProfRequest;


class DoidoController extends Controller
{
   
   public function listaUsuario(Request $requisicao)
  {
    $usuarios = funcionario::select('*');

    if($requisicao->has('pesquisa')) {
      $usuarios->where('name', 'like', '%' . $requisicao->get('pesquisa') . '%');
    }

    $usuarios->orderBy('name', 'asc');

    $listaDeUsuarios = $usuarios->get();

    return view('usuarios.lista', [
      'usuarios' => $listaDeUsuarios
    ]);
  }

  public function salvarUsuario(ProfRequest $requisicao)
  {
    funcionario::create([
      'name' => $requisicao->get('name'),
      'genero' => $requisicao->get('genero'),
      'email' => $requisicao->get('email'),
      'cpf' => $requisicao->get('cpf'),
      'data' => $requisicao->get('data'),
    ]);

      

    return redirect('lista-usuarios');
  }

   public function homeUsuario()
  {
    return view('usuarios.index');
  }


  public function formularioUsuario()
  {
  	return view('usuarios.criar');
  }


  public function editarUsuario($id)
  {
    $usuario = funcionario::find($id);

    return view('usuarios.editar', [
      'usuario' => $usuario
    ]);
  }

  public function alteraUsuario($id, Request $requisicao)
  {
    $usuario = funcionario::find($id);

    $usuario->update([
      'name' => $requisicao->get('name'),
      'genero' => $requisicao->get('genero'),
      'email' => $requisicao->get('email'),
      'cpf' => $requisicao->get('cpf'),
      'data' => $requisicao->get('data'),
    ]);

    return redirect('lista-usuarios');
  }

	public function deletarUsuario($id)
	  {
      Funcionario::destroy($id);
	return redirect('lista-usuarios');
	  }
	
}
