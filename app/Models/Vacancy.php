<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'edifice_id',
    ];

    public function edifice()
    {
        return $this->belongsTo(Edifice::class);
    }

    public function residents()
    {
        return $this->belongsToMany(Resident::class);
    }

    public static function getMinIdVacancies($edifice_id = null) {
        $min = DB::table('vacancies')
            ->where(['edifice_id' => $edifice_id])
            ->select('*')
            ->min('id');
            
        

        return $min;
    }
}
