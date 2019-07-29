<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aula;

class AulaController extends Controller
{
    public function createAula(Request $request){

        $aula = new Aula;

        $aula->professor = $request->professor;
        $aula->materia = $request->materia;
        $aula->instituto = $request->instituto;
        $aula->curso = $request->curso;
        $aula->save();

        return response()->success($aula);

    }
    public function updateAula(Request $request, $id){
        /**Método para o padrão Update, que nos permite modificar
         * dados no banco de dados através do id
         */

        $aula = Aula::findOrFail($id);

        if($request->professor)
            $aula->professor = $request->professor;
        if($request->materia)
            $aula->materia = $request->materia;
        if($request->instituto)
            $aula->instituto = $request->instituto;
        if($request->curso)
            $aula->curso = $request->curso;
        $aula->save();
        
        return response()->success($aula);

    }
    public function listAula(){
        /**Método para o padrão Read que lista todas os registros da instância aula */
        
        return Aula::all();
    }

    public function showAula($id){
        /**Método para o padrão Read que lista somente um registro, baseando-se no id */
        
        $aula = Aula::find($id);
        
        if($aula){
            return response()->success($aula);
        } else{
            $data = "Aula não encontrada, verifique o id novamente";
            return response()->error($data, 400);
        }
    }
    public function deleteAula($id){
        /**Método para o padrão Delete, que deleta um registro pelo seu id */

        Aula::destroy($id);
        return response()->json(['Aula deletada']); 
    }
}
