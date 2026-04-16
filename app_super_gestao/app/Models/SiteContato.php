<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteContato extends Model
{
    //
    use SoftDeletes;
    use HasFactory; // aqui usamos a trait HasFactory para poder usar a factory do site contato
    protected $table = 'site_contatos';
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contatos_id', 'mensagem'];
}
