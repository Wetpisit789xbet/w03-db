<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Programseefer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('program')->insert([
            [
                'program_th' => 'หลักสูตรวิทยาศาสตร์บัณฑิต สาขาวิชาคณิตศาสตร์',          
                'program_en' => 'Bachelor of Science Program in Mathematics ',          
                'grad_year' => '2024',          
                'prg_fac_id' => 1.,          
            ],
          
            [
                'program_th' => 'หลักสูตรวิทยาศาสตร์บัณฑิต สาขาวิชาคณิตศาสตร์',          
                'program_en' => 'Bachelor of Science Program in Mathematics ',          
                'grad_year' => '2024',          
                'prg_fac_id' => 1.,          
            ],
            [
                'program_th' => 'หลักสูตรวิทยาศาสตร์บัณฑิต สาขาวิชาคณิตศาสตร์',          
                'program_en' => 'Bachelor of Science Program in Mathematics ',          
                'grad_year' => '2024',          
                'prg_fac_id' => 1.,          
            ],
            [
                'program_th' => 'หลักสูตรวิทยาศาสตร์บัณฑิต สาขาวิชาคณิตศาสตร์',          
                'program_en' => 'Bachelor of Science Program in Mathematics ',          
                'grad_year' => '2024',          
                'prg_fac_id' => 1.,          
            ],
            [
                'program_th' => 'หลักสูตรวิทยาศาสตร์บัณฑิต สาขาวิชาคณิตศาสตร์',          
                'program_en' => 'Bachelor of Science Program in Mathematics ',          
                'grad_year' => '2024',          
                'prg_fac_id' => 1.,          
            ],
          
        
        ]);
    }
}
