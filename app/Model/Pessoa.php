<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';   

    protected  $fillable =[
        'id',
        'nome_completo',
        'data_nascimento',
        'cpf',
        'email'
    ];

    public function telefones()
    {
        return $this->hasMany('App\Model\PessoaTelefone', 'pessoa_id');
    }



}
