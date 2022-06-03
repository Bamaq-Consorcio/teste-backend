<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'veiculo_id',
        'apartamento_id'
    ];
}
