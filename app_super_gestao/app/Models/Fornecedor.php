<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fornecedor extends Model
{   
    use SoftDeletes;
    use HasFactory;
    //eloquent assume que o nome da tabela é o plural do nome do modelo
    protected $table = 'fornecedores';
    //definindo os campos que podem ser preenchidos via atribuição em massa
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
