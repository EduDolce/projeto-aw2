<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = ['iniciaisNome', 'dataNascimento', 'genero'];

    public function consultoria(){
        return $this->belongsTo('App\Consultoria');
    }
}
