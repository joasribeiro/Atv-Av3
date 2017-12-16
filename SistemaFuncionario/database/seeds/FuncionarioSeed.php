<?php

use Illuminate\Database\Seeder;
use App\funcionario;

class FuncionarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::insert(['nome' => 'Matheus', ,'genero' => 'masculino','email' => 'matheus@teste.com','cpf' => '123456','data' => '19/08/1996']);
        Categoria::insert(['nome' => 'Allan', ,'genero' => 'masculino','email' => 'allan@teste.com','cpf' => '23456','data' => '10/05/1998']);
        Categoria::insert(['nome' => 'Maria', ,'genero' => 'feminino','email' => 'maria@teste.com','cpf' => '789123456','data' => '19/08/1987']);
        Categoria::insert(['nome' => 'Marta', ,'genero' => 'feminino','email' => 'marta@teste.com','cpf' => '45678925','data' => '19/08/1986']);
        Categoria::insert(['nome' => 'jose', ,'genero' => 'masculino','email' => 'jose@teste.com','cpf' => '369741229','data' => '19/08/2000']);
    }
}
