<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //eloquent assume que o nome da tabela é o plural do nome do modelo
    protected $table = 'fornecedores';
}
