<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogAcesso extends Model
{
    protected $table = 'log_acessos';
    protected $fillable = ['log'];
}
