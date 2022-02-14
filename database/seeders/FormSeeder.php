<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = DB::table('forms')->insert([
            [
                'code' => 'D01P01',
                'dimension_id' => '1',
                'program_id' => '1',
                'status' => 'draft'
            ],
            [
                'code' => 'D01P02',
                'dimension_id' => '1',
                'program_id' => '2',
                'status' => 'draft'
            ],
            [
                'code' => 'D01P03',
                'dimension_id' => '1',
                'program_id' => '3',
                'status' => 'draft'
            ],
            [
                'code' => 'D01P04',
                'dimension_id' => '1',
                'program_id' => '4',
                'status' => 'draft'
            ],
            [
                'code' => 'D01P05',
                'dimension_id' => '1',
                'program_id' => '5',
                'status' => 'draft'
            ],
            [
                'code' => 'D01P06',
                'dimension_id' => '1',
                'program_id' => '6',
                'status' => 'draft'
            ],
            [
                'code' => 'D02P01',
                'dimension_id' => '2',
                'program_id' => '1',
                'status' => 'draft'
            ],
            [
                'code' => 'D02P02',
                'dimension_id' => '2',
                'program_id' => '2',
                'status' => 'draft'
            ],
            [
                'code' => 'D02P03',
                'program_id' => '2',
                'dimension_id' => '3',
                'status' => 'draft'
            ],
            [
                'code' => 'D02P04',
                'program_id' => '2',
                'dimension_id' => '4',
                'status' => 'draft'
            ],
            [
                'code' => 'D02P05',
                'dimension_id' => '2',
                'program_id' => '5',
                'status' => 'draft'
            ],
            [
                'code' => 'D02P06',
                'dimension_id' => '2',
                'program_id' => '6',
                'status' => 'draft'
            ],
            [
                'code' => 'D03P01',
                'dimension_id' => '3',
                'program_id' => '1',
                'status' => 'draft'
            ],
            [
                'code' => 'D03P02',
                'dimension_id' => '3',
                'program_id' => '2',
                'status' => 'draft'
            ],
            [
                'code' => 'D03P03',
                'dimension_id' => '3',
                'program_id' => '3',
                'status' => 'draft'
            ],
            [
                'code' => 'D03P04',
                'dimension_id' => '3',
                'program_id' => '4',
                'status' => 'draft'
            ],
            [
                'code' => 'D03P05',
                'dimension_id' => '3',
                'program_id' => '5',
                'status' => 'draft'
            ],
            [
                'code' => 'D03P06',
                'dimension_id' => '3',
                'program_id' => '6',
                'status' => 'draft'
            ],
            [
                'code' => 'D04P01',
                'dimension_id' => '4',
                'program_id' => '1',
                'status' => 'draft'
            ],
            [
                'code' => 'D04P02',
                'dimension_id' => '4',
                'program_id' => '2',
                'status' => 'draft'
            ],
            [
                'code' => 'D04P03',
                'dimension_id' => '4',
                'program_id' => '3',
                'status' => 'draft'
            ],
            [
                'code' => 'D04P04',
                'dimension_id' => '4',
                'program_id' => '4',
                'status' => 'draft'
            ],
            [
                'code' => 'D04P05',
                'dimension_id' => '4',
                'program_id' => '5',
                'status' => 'draft'
            ],
            [
                'code' => 'D04P06',
                'dimension_id' => '4',
                'program_id' => '6',
                'status' => 'draft'
            ],
            [
                'code' => 'D05P01',
                'dimension_id' => '5',
                'program_id' => '1',
                'status' => 'draft'
            ],
            [
                'code' => 'D05P02',
                'dimension_id' => '5',
                'program_id' => '2',
                'status' => 'draft'
            ],
            [
                'code' => 'D05P03',
                'dimension_id' => '5',
                'program_id' => '3',
                'status' => 'draft'
            ],
            [
                'code' => 'D05P04',
                'dimension_id' => '5',
                'program_id' => '4',
                'status' => 'draft'
            ],
            [
                'code' => 'D05P05',
                'dimension_id' => '5',
                'program_id' => '5',
                'status' => 'draft'
            ],
            [
                'code' => 'D05P06',
                'dimension_id' => '5',
                'program_id' => '6',
                'status' => 'draft'
            ],
            [
                'code' => 'D06P01',
                'dimension_id' => '6',
                'program_id' => '1',
                'status' => 'draft'
            ],
            [
                'code' => 'D06P02',
                'dimension_id' => '6',
                'program_id' => '2',
                'status' => 'draft'
            ],
            [
                'code' => 'D06P03',
                'dimension_id' => '6',
                'program_id' => '3',
                'status' => 'draft'
            ],
            [
                'code' => 'D06P04',
                'dimension_id' => '6',
                'program_id' => '4',
                'status' => 'draft'
            ],
            [
                'code' => 'D06P05',
                'dimension_id' => '6',
                'program_id' => '5',
                'status' => 'draft'
            ],
            [
                'code' => 'D05P06',
                'dimension_id' => '5',
                'program_id' => '6',
                'status' => 'draft'
            ]
        ]);
    }
}
