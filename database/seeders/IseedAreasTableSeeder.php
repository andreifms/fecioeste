<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IseedAreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('areas')->delete();
        
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Ciências Biológicas e da Saúde',
                'created_at' => '2024-09-24 00:42:43',
                'updated_at' => '2024-09-24 00:42:43',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Ciências Exatas e da Terra',
                'created_at' => '2024-09-24 00:42:58',
                'updated_at' => '2024-09-24 00:42:58',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Ciências Humanas, Sociais Aplicadas e Linguística',
                'created_at' => '2024-09-24 00:43:10',
                'updated_at' => '2024-09-24 00:43:10',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Ciências Agrárias e Engenharias',
                'created_at' => '2024-09-24 00:43:19',
                'updated_at' => '2024-09-24 00:43:19',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Multidisciplinar',
                'created_at' => '2024-09-24 00:43:24',
                'updated_at' => '2024-09-24 00:43:24',
            ),
        ));
        
        
    }
}