<?php

use App\Medico; 

class ApiController extends Controller
{
    public function getAllMedicos() {
        $medicos = Medico::get()->toJson(JSON_PRETTY_PRINT);
        return response($medicos, 200);
    }

    public function createMedico (Request $request) {
      $medico = new Medico;
      $medico->nome = $request->nome;
      $medico->crm = $request->crm;
      $medico->email = $request->email; 
      $medico->save(); 

      return response()->json([
          "message" => "Médico cadastrado"
      ], 201); 
    }

    public function getMedico($id) {
        if (Medico::where('id', $id)->exists()) {
            $medico = Medico::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($medico, 200);
          } else {
            return response()->json([
              "message" => "Médco não encontrado"
            ], 404);
          }
    }

    public function updateMedico (Request $request, $id) {
        if (Medico::where('id', $id)->exists()) {
            $medico = Student::find($id);
            $medico->nome = is_null($request->nome) ? $medico->nome : $request->nome;
            $medico->crm = is_null($request->crm) ? $medico->crm : $request->crm;
            $medico->email = is_null($request->email) ? $medico->email : $request->email; 
            $medico->save();
    
            return response()->json([
                "message" => "Atualizado com sucesso"
            ], 200);
            } else {
            return response()->json([
                "message" => "Atualização não realizada"
            ], 404);
            
        }
    }

    public function deleteMedico ($id) {
        if(Medico::where('id', $id)->exists()) {
            $medico = Medico::find($id);
            $medico->delete();
    
            return response()->json([
              "message" => "Deletado com sucesso"
            ], 202);
          } else {
            return response()->json([
              "message" => "Médico não encontrado"
            ], 404);
          }
        }
    }
}
