<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $table = 'respostas';

    protected $fillable = ['conteudo'];

    public function consultoria(){
        return $this->belongsTo('App\Consultoria');
    }
}
