<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            [
                'code' => 'P01',
                'name' => 'TEAM TRAINING - HIGH MANAGEMENT',
                'module' => 'CAPACIDAD ORGANIZATIVA',
                'description' => 'asd'
            ],
            [
                'code' => 'P02',
                'name' => 'STRATEGIG DEVELOPMENT',
                'module' => 'CAPACIDAD ORGANIZATIVA',
                'description' => 'asd'
            ],
            [
                'code' => 'P03',
                'name' => 'BUSINESS PROCESS MANAGEMENT',
                'module' => 'EXCELENCIA OPERATIVA',
                'description' => 'asd'
            ],
            [
                'code' => 'P04',
                'name' => 'INNOVATION, T. DIGITAL, TIC´s - I4.0',
                'module' => 'EXCELENCIA OPERATIVA',
                'description' => 'asd'
            ],
            [
                'code' => 'P05',
                'name' => 'OPEN INNOVATION [Products, Services]',
                'module' => 'DESARROLLO DE MERCADO',
                'description' => 'asd'
            ],
            [
                'code' => 'P06',
                'name' => 'GROWTH - INTERNATIONALIZATION',
                'module' => 'DESARROLLO DE MERCADO',
                'description' => 'asd'
            ]
        ]);
    }
}
