<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\Area;
use App\Models\Company;
use App\Models\Graduate;

class GraduateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $country1 = Country::create(['nombre' => 'Pais 1']);
        $country2 = Country::create(['nombre' => 'Pais 2']);

        $state1 = State::create(['nombre' => 'Estado 1', 'country_id' => $country1->id]);
        $state2 = State::create(['nombre' => 'Estado 2', 'country_id' => $country2->id]);

        $area1 = Area::create(['nombrearea' => 'Area 1']);
        $area2 = Area::create(['nombrearea' => 'Area 2']);

        $company1 = Company::create(['nombreempresa' => 'Empresa 1']);
        $company2 = Company::create(['nombreempresa' => 'Empresa 2']);


        $graduate1 = Graduate::create([
            'nombre' => 'Egresado 1',
            'email' => 'egresado1@ejemplo.com',
            'fechanacimiento' => '1990-01-01',
            'telefono' => '1234567890'

        ]); 
        $graduate2 = Graduate::create([
            'nombre' => 'Egresado 2',
            'email' => 'egresado2@ejemplo.com',
            'fechanacimiento' => '1992-02-02',
            'telefono' => '0987654321'
        ]);

    }
}