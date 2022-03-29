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

    public static function getInfoResident($resident_id = null) {
        $result = DB::table('residents')
            ->join('apartments', 'residents.apartment_id', '=', 'apartments.id')
            ->join('vehicles', 'residents.vehicle_id', '=', 'vehicles.id')
            ->select('residents.id as id_resident','residents.name as resident_name', 'residents.email', 'residents.phone', 
                    'apartments.id as apartment_id','apartments.*',
                    'vehicles.id as vehicle_id', 'vehicles.*')
            ->where('residents.id', $resident_id)
            ->get()->toArray();
        
        $infoResident['data'] = $result[0];
        $residentVacancy = ResidentVacancy::where('resident_id', $resident_id)->get()->toArray();
        //var_dump($infoResident); die();
        $infoResident['resident_vacancies'] = [];
        foreach($residentVacancy as $vacancy){
            array_push($infoResident["resident_vacancies"], $vacancy);
        }
        return $infoResident;
    }
    
}
