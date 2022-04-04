<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Veiculos;
use App\Models\Apartamentos;
use App\Models\VagasMorador;

class Moradores extends Model
{
    use HasFactory;
    protected $table = 'moradores';

    public function veiculos()
    {
        return $this->hasMany(Veiculos::class, 'id', 'veiculo_id');
    }

    public function apartamentos()
    {
        return $this->hasMany(Apartamentos::class, 'id', 'apartamento_id');
    }

    public function vagasMorador()
    {
        return $this->hasMany(VagasMorador::class, 'id_morador', 'id');
    }
}
