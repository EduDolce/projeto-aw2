<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    protected $table = 'arquivos';

    protected $fillable = ['tipo', 'caracteristica', 'nome'];

    public function consultoria(){
        return $this->belongsTo('App\Consultoria');
    }
}
