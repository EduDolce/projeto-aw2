<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultoriaController extends Controller
{
    public function solicitar(){
        return view('consultoria.solicitar');
    }

    public function salvar(Request $request){
        $consultoria = new Consultoria();
        $consultoria->historicoOcular = $request->get('historicoOcular');
    }
}
