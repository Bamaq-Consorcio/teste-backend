<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Resident extends Model
{
    use HasFactory;
    protected $table = 'residents';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'vehicle_id',
        'apartment_id',
    ];

    public function apartment() {
        return $this->hasOne(Apartment::class, 'apartment_id', 'id');
    }

    public function vehicle() {
        return $this->hasOne(Vehicle::class, 'vehicle_id', 'id');
    }

    public function vacancies()
    {
        return $this->belongsToMany(Vacancy::class);
    }

    public static function getResidentByEdifice($edifice_id = null) {
        $residentsWithVacancies = DB::table('residents')
            ->join('apartments', 'apartments.id', '=', 'residents.apartment_id')
            ->select('residents.*', 'apartments.edifice_id')
            ->where('edifice_id', $edifice_id)
            ->get()->toArray();
            
        return $residentsWithVacancies;
    }

}
