<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $fillable = [
        'license_plate',
        'color',
        'type',
        'year',
    ];

    public function resident() {
        return $this->belongsTo(Resident::class);
    }
}
