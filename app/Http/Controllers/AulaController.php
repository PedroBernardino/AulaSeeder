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

        return response()->json([$aula]);

    }
    public function updateAula(Request $request, $id){
        
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
        
        return response()->json([$aula]);

    }
    public function listAula(){
        
        return Aula::all();
    }

    public function showAula($id){
        
        $aula = Aula::findOrFail($id);
        return $aula;
    }
    public function deleteAula($id){
        
        Aula::destroy($id);
        return response()->json(['Aula deletada']); 
    }
}
