<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            [
                'sid' => 1,          
                'fname' => 'lสมหมาย ',          
                'lname' => 'นามสกวย',          
                'std_prg_id' => 1.,    //      
            ],
            [
                'sid' => 1,          
                'fname' => 'lสมหมาย ',          
                'lname' => 'นามสกวย',          
                'std_prg_id' => 1.,    //      
            ],
            [
                'sid' => 1,          
                'fname' => 'lสมหมาย ',          
                'lname' => 'นามสกวย',          
                'std_prg_id' => 1.,    //      
            ],
            [
                'sid' => 1,          
                'fname' => 'lสมหมาย ',          
                'lname' => 'นามสกวย',          
                'std_prg_id' => 1.,    //      
            ],
            [
                'sid' => 1,          
                'fname' => 'lสมหมาย ',          
                'lname' => 'นามสกวย',          
                'std_prg_id' => 1.,    //      
            ],
          
           
        ]);
    }
}
