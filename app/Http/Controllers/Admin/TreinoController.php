<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Treino;

use App\Aluno;
use DB;
use Illuminate\Support\CollectionstdClass;

class TreinoController extends Controller
{
    //
    public function index()
    {
        $registros = Treino::all();
        return view('admin.treinos.index', compact('registros'));
    }
    
    //public function adicionar()
    //{
        //return view('admin.treinos.adicionar');
    //}
    
    public function adicionar($id)
    {
        //return view('admin.treinos.adicionar');
        //$registros = DB::table('treinos')->where('aluno', $id)->get();
        //$id = DB::table('alunos')->where('id', $id)->get();
        $id = $id;
        return view('admin.treinos.adicionar', compact('id'));
        //return view('admin.treinos.adicionar');
        //$id = $request->query('id'); // Pega somente o da query string
    }
    /*
    public function adicionar()
    {

        //$registrosID = DB::table('alunos')->where('id', $id)->get();
        //return view('admin.treinos.adicionar');
        //return redirect()->route ('admin.alunos.pegaId');
        $registros = DB::table('alunos')->where('id')->get();
        return view('admin.treinos.adicionarFinal', compact('registros'));

    }
    */

    public function salvar(Request $req)
    {
        $dados = $req->all();
        
        Treino::create($dados);
        //Editado em 04/10/19. Aqui é pego o id do aluno (pk) e passado para a rota visualizarlista de treinos do aluno trabalhado.
        $id = $req->aluno;
        return redirect()->route('admin.treinos.visualizarlista', compact('id'));
    }

    public function editar($id)
    {
      $registro = Treino::find($id);
      return view('admin.treinos.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
              
        Treino::find($id)->update($dados);
        //Editado em 04/10/19. Aqui é pego o id do aluno (pk) e passado para a rota visualizarlista de treinos do aluno trabalhado.
        $id = $req->aluno;
        return redirect()->route('admin.treinos.visualizarlista', compact('id'));
    }

    public function deletar($id)
    {
        Treino::find($id)->delete();
        //$idAluno = DB::table('treinos')->where('aluno', $id)->get();
        //$registros = DB::table('treinos')->where('id', $id)->get('aluno');
        //$id = Treino::find()->aluno->get();
        //$idAluno = Treino::where('id', $id)->get(0);
        //$registros = Treino::find($id);
        //$id = $registros->aluno->get();
        //foreach($registros as $registro){
        //}
        //$idA = $registros->aluno;
        //$id = $idA; 
        //Editei aqui de admin.treinos para admin.alunos 04/10/19.
        //return redirect()->route('admin.treinos.visualizarlista', compact('id'));
        return redirect()->route('admin.alunos');
    }

    public function visualizar($id)
    {
        $registros = Treino::find($id);
        return view('admin.treinos.visualizar', compact('registros'));
    }
    
    public function visualizarlista($id)
    { 
        //$treinos= DB::table('treinos')->where('aluno')->get();

        //Aqui pega os registros do banco de treino onde o campo 'aluno' é igual ao id do aluno em questão.

        $registros = DB::table('treinos')->where('aluno', $id)->get();
        $id = $id;
        $registrosAlunos = DB::table('alunos')->where('id', $id)->get();

        return view('admin.treinos.visualizarlista', compact('registros','id','registrosAlunos'));
    }
    
 
}
