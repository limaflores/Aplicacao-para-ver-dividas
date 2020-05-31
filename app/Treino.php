<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    //Classe.
    //Campos que serão utilizados.
    protected $fillable = [
        'objetivo', 'descricao', 'numerotreino', 'aluno', 'nometreino'
    ];
}
