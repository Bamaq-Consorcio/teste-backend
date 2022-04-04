<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VagasMorador extends Model
{
    use HasFactory;
    protected $table = 'vagas_morador';
    protected $fillable = [
        "id_vaga",
        "id_veiculo",
        "id_morador",
        "situacao_id",
    ];
}
