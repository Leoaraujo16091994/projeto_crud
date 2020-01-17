<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PessoaTelefone extends Model
{
    protected $table = 'pessoa_telefones';   

    protected  $fillable =[
        'id',
        'ddd',
        'numero',
        'pessoa_id'
    ];

    public function pessoa()
    {
        return $this->belongsTo('App\Model\Pessoa', 'pessoa_id');
    }



}
