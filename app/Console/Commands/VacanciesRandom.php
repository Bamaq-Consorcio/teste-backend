<?php

namespace App\Console\Commands;

use App\Models\Edifice;
use App\Models\Resident;
use App\Models\ResidentVacancy;
use App\Models\Vacancy;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class VacanciesRandom extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vacanciesrandom:random';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando sorteia vagas de um estacionamento';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $count = DB::table('resident_vacancy')->distinct()->groupBy('resident_id')->count('*');

        if ($count >= 7) {
            try {
                $deleted = DB::table('resident_vacancy')->delete();
                echo 'Uma nova semana foi iniciada';
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }
        $edifices = Edifice::all('id')->toArray();
        $edifices_ids = [];
        foreach ($edifices as $key => $edifice_id) {
            array_push($edifices_ids, $edifice_id['id']);
        }

        $multiplos = [3, 6, 9];
        //sorteio dos multiplos
        $rand_keys = array_rand($multiplos, 1);
        $multiplo = $multiplos[$rand_keys];



        foreach ($edifices_ids as $edifice_id) {
            //numero das vagas
            $vacancies = Vacancy::where('edifice_id', $edifice_id)->get('id')->toArray();
            $vacancyArray = [];
            foreach ($vacancies as $vac) {
                array_push($vacancyArray, $vac['id']);
            }

            $resident_with_vacancies = ResidentVacancy::getResidentWithVacanciesByEdifice($edifice_id);

            $occupied_vacancies = [];
            foreach ($resident_with_vacancies as $oc_vacancy) {
                array_push($occupied_vacancies, $oc_vacancy->id);
            }

            $residents = Resident::getResidentByEdifice($edifice_id);

            if (sizeof($occupied_vacancies) == 0) {

                //embaralha as vagas
                shuffle($vacancyArray);

                $start_day = 1;
                foreach ($residents as $key => $resident) {

                    $resident_vacancy = new ResidentVacancy();
                    $resident_vacancy->resident_id = $resident->id;
                    $resident_vacancy->vacancy_id = $vacancyArray[$key];
                    $resident_vacancy->start_day = $start_day;
                    $resident_vacancy->save();
                }
            } else {
                foreach ($residents as $key => $resident) {
                    $vacancy = ResidentVacancy::getMaxIdResidentVacanciesByEdifice($edifice_id, $resident->id);

                    $number_vacancy = $vacancy[0]->vacancy_id;
                    $new_vacancy = $number_vacancy + $multiplo;
                    if (($edifice_id == 1 && $number_vacancy == 34) ||
                        ($edifice_id == 2 && $number_vacancy == 35) ||
                        ($edifice_id == 3 && $number_vacancy == 36)
                    ) {
                        $new_vacancy = Vacancy::getMinIdVacancies($edifice_id);
                    } else if (($edifice_id == 1 && $new_vacancy > 34) ||
                        ($edifice_id == 2 && $new_vacancy > 35) ||
                        ($edifice_id == 3 && $new_vacancy > 36)
                    ) {
                        $exceeded_value = $new_vacancy;
                        $max_number = null;

                        if ($edifice_id == 1) {
                            $max_number = 34;
                        } else if ($edifice_id == 2) {
                            $max_number = 35;
                        } else if ($edifice_id == 3) {
                            $max_number = 36;
                        }
                        $result = $max_number - $number_vacancy;
                        $new_vacancy = Vacancy::getMinIdVacancies($edifice_id);
                        $result += $new_vacancy;
                        $new_vacancy = $result;
                    }

                    $resident_vacancies = new ResidentVacancy();
                    $resident_vacancies->resident_id = $resident->id;
                    $resident_vacancies->vacancy_id = $new_vacancy;
                    $resident_vacancies->start_day = 0;
                    $resident_vacancies->save();
                }
            }
        }

        echo 'success!';
    }
}
