<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\SlackWebhookHandler;

class ResidentVacancy extends Model
{
    use HasFactory;
    protected $table = 'resident_vacancy';
    protected $fillable = [
        'resident_id',
        'vacancy_id',
        'start_id',
    ];

    public static function getResidentWithVacanciesById($resident_id = null) {
        $residentsWithVacancies = DB::table('residents')
            ->join('resident_vacancy', 'residents.id', '=', 'resident_vacancy.resident_id')
            ->join('vacancies', 'vacancies.id', '=', 'resident_vacancy.vacancy_id')
            //->select('residents.*', 'contacts.phone', 'orders.price')
            ->where('resident_id', $resident_id)
            ->get()->toArray();
            
        return $residentsWithVacancies;
    }

    public static function getResidentWithVacanciesByEdifice($edifice_id = null) {
        $residentsWithVacancies = DB::table('residents')
            ->join('resident_vacancy', 'residents.id', '=', 'resident_vacancy.resident_id')
            ->join('vacancies', 'vacancies.id', '=', 'resident_vacancy.vacancy_id')
            ->select('residents.name as r_name', 'residents.*', 'resident_vacancy.*', 'vacancies.*')
            ->where('edifice_id', $edifice_id)
            ->get()->toArray();
            
        return $residentsWithVacancies;
    }

    public static function getMaxIdResidentVacanciesByEdifice($edifice_id = null, $resident_id = null) {
        $max = DB::table('resident_vacancy')
            ->join('vacancies', 'vacancies.id', '=','resident_vacancy.vacancy_id')
            ->where(['edifice_id' => $edifice_id, 'resident_id' => $resident_id])
            ->select('*')
            ->max('resident_vacancy.id');
            
        $maxLineResidentVacancy = DB::table('resident_vacancy')
            ->where('id', $max)
            ->get()->toArray();

        return $maxLineResidentVacancy;
    }
    
}
