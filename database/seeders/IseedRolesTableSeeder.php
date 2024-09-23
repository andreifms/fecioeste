<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IseedRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Usuário Autenticado',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 04:20:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'avaliador',
                'display_name' => 'Avaliador',
                'created_at' => '2024-09-22 03:39:06',
                'updated_at' => '2024-09-22 03:39:06',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'membro-comissao-organizadora',
                'display_name' => 'Membro da comissão organizadora',
                'created_at' => '2024-09-22 04:19:21',
                'updated_at' => '2024-09-22 04:19:21',
            ),
        ));
        
        
    }
}