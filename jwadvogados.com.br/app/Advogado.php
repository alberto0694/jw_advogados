<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advogado extends Model
{
    protected $fillable = ['nome', 'descricao', 'foto', 'ativo'];
}
