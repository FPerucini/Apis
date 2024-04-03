<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alunos; // Importe o modelo Alunos corretamente

class AlunosController extends Controller
{
    protected $alunos; // Renomeie o atributo para seguir as convenções de nomenclatura

    public function __construct(){
        $this->alunos = new Alunos(); // Corrija o nome do método construtor
    }
    
    public function index()
    {
        return $this->alunos->all();
    }

    public function store(Request $request)
    {
        return $this->alunos->create($request->all());
    }

    public function show(string $id)
    {
       return $this->alunos->find($id); // Retorna o resultado da busca
    }

    public function update(Request $request, string $id)
    {
        $aluno = $this->alunos->find($id); 
        $aluno->update($request->all());
        return $aluno;
    }

    public function destroy(string $id)
    {
        $aluno = $this->alunos->find($id);
        $aluno->delete();
        return response()->json(['message' => 'Aluno deletado com sucesso'], 200);
    }
}
