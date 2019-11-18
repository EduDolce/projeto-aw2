<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultoria extends Model
{
    protected $table = 'consultorias';

    protected $fillable = ['lesaoOcular', 'tempoManifestacao', 'historicoOcular', 'antecedentes', 'tratamentoPrevio', 'tratamentoResposta', 'motivo'];

    public function paciente(){
        return $this->hasOne('App\Paciente');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
