<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listAluno()
    {
        return Aluno::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createAluno(Request $request)
    {
        $aluno = new Aluno;

        $aluno->nome = $request->nome;
        $aluno->idade= $request->idade;
        $aluno->matricula = $request->matricula;
        $aluno->curso = $request->curso;
        $aluno->save();

        return response()->success($aluno);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAluno($id)
    {
        $aluno = Aluno::find($id);

        if($aluno){
            return response()->success($aluno);
        } else{
            $data = "Aluno não encontrado";
            return response()->error($data, 400);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAluno(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);

        if($request->nome)
            $aluno->nome = $request->nome;
        if($request->matricula)
            $aluno->matricula = $request->matricula;
        if($request->idade)
            $aluno->matricula = $request->matricula;
        if($request->curso)
            $aluno->curso = $request->curso;
        $aluno->save();

        return response()->success($aluno);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aluno::destroy($id);
        return response()->json(['Aluno deletado']);
    }
}
