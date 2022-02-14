<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dimensions')->insert([
            [
                'code' => 'D01',
                'name' => 'RSC',
                'module' => 'Autenticidad',
                'description' => 'asd'
            ],
            [
                'code' => 'D02',
                'name' => 'Talento',
                'module' => 'Autenticidad',
                'description' => 'asd'
            ],
            [
                'code' => 'D03',
                'name' => 'Corporativa',
                'module' => 'Propósito',
                'description' => 'asd'
            ],
            [
                'code' => 'D04',
                'name' => 'Estratégica',
                'module' => 'Propósito',
                'description' => 'asd'
            ],
            [
                'code' => 'D05',
                'name' => 'Táctica',
                'module' => 'Eficiencia',
                'description' => 'asd'
            ],
            [
                'code' => 'D06',
                'name' => 'Operativa',
                'module' => 'Eficiencia',
                'description' => 'asd'
            ]
        ]);
    }
}
