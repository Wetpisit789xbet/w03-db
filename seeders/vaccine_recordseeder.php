<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class vaccine_recordseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vaccine_record')->insert([
            [
                'std_id' => 1,          
                'vac_id' => 1,          
                'vaccined_date' => '2023-15-6',             
            ],
            [
                'std_id' => 1,          
                'vac_id' => 1,          
                'vaccined_date' => '2023-15-6',             
            ],
            [
                'std_id' => 1,          
                'vac_id' => 1,          
                'vaccined_date' => '2023-15-6',             
            ],
            [
                'std_id' => 1,          
                'vac_id' => 1,          
                'vaccined_date' => '2023-15-6',             
            ],
            [
                'std_id' => 1,          
                'vac_id' => 1,          
                'vaccined_date' => '2023-15-6',             
            ],
           
           
        ]);
    }
}
