<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Vagas;
use App\Models\Situacao;

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

    public function vaga()
    {
        return $this->hasOne(Vagas::class, 'id', 'id_vaga');
    }
}
