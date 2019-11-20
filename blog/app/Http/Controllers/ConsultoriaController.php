<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultoriaController extends Controller
{
    //public function __construct(){
      //  $this->middleware('auth');
    //}

    public function solicitar(){
        return view('consultoria.solicitar');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'iniciaisNome' => ['required', 'string', 'max:255'],
        ]);
    }

    public function salvar(Request $request){
        $consultoria = new Consultoria();
        $consultoria->lesaoOcular = $request->get('lesaoOcular');
        $consultoria->tempoManifestacao = $request->get('tempoManifestacao');
        $consultoria->historicoOcular = $request->get('historicoOcular');
        $consultoria->antecedentes = $request->get('antecedentes');
        $consultoria->tratamentoPrevio = $request->get('tratamentoPrevio');
        $consultoria->user()->associate($request->user());

        $paciente = new Paciente();
        $paciente->iniciaisNome = $request->get('iniciaisNome');
        $paciente->dataNascimento = $request->get('dataNascimento');
        $paciente->genero = $request->get('genero');
        $paciente->consultoria()->associate($request->consultoria());

        $consultoria->save();
        $paciente->save();

        return 'Solicitação enviada.';
    }
}
