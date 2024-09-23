<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IseedMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
        ));
        
        
    }
}