<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\VagasMorador;

class Veiculos extends Model
{
    use HasFactory;
    protected $table = 'veiculos';

    public function vagasMorador()
    {
        return $this->hasMany(VagasMorador::class, 'id_veiculo', 'id');
    }
}
