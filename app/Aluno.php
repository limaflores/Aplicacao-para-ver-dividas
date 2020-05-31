<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //Classe.
    //Campos que serão utilizados.
    protected $fillable = [
        'nome', 'email', 'telefone', 'objetivo', 'vo2', 'usuario', 'senha', 'observacoes'
    ];
}