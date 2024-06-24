<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class facultyseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculty')->insert([
            [
                'faculty_th' => 'คณะแพทยศาสตร์',          
                'faculty_th' => 'Faculty of madiccine',          
            ],
            [
                'faculty_th' => 'คณะทันตแพทยศาสตร์',          
                'faculty_th' => ' Faculty of Dentistry',          
            ],
            [
                'faculty_th' => 'คณะเทคโนโลยีสารสนเทศ',          
                'faculty_th' => 'Faculty of Information Technology',          
            ],
            [
                'faculty_th' => 'คณะโลจิสติกส์ร์',          
                'faculty_th' => '  Faculty of Logistics',          
            ],
            [
                'faculty_th' => 'คณะวิศวกรรมศาสตร์',          
                'faculty_th' => ' Faculty of Engineering',          
            ],
        
        ]);
    }
}
