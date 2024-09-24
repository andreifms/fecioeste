<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IseedPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_areas',
                'table_name' => 'areas',
                'created_at' => '2024-09-22 04:14:01',
                'updated_at' => '2024-09-22 04:14:01',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_areas',
                'table_name' => 'areas',
                'created_at' => '2024-09-22 04:14:01',
                'updated_at' => '2024-09-22 04:14:01',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_areas',
                'table_name' => 'areas',
                'created_at' => '2024-09-22 04:14:01',
                'updated_at' => '2024-09-22 04:14:01',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_areas',
                'table_name' => 'areas',
                'created_at' => '2024-09-22 04:14:01',
                'updated_at' => '2024-09-22 04:14:01',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_areas',
                'table_name' => 'areas',
                'created_at' => '2024-09-22 04:14:01',
                'updated_at' => '2024-09-22 04:14:01',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_projetos',
                'table_name' => 'projetos',
                'created_at' => '2024-09-22 05:14:54',
                'updated_at' => '2024-09-22 05:14:54',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_projetos',
                'table_name' => 'projetos',
                'created_at' => '2024-09-22 05:14:54',
                'updated_at' => '2024-09-22 05:14:54',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_projetos',
                'table_name' => 'projetos',
                'created_at' => '2024-09-22 05:14:54',
                'updated_at' => '2024-09-22 05:14:54',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_projetos',
                'table_name' => 'projetos',
                'created_at' => '2024-09-22 05:14:54',
                'updated_at' => '2024-09-22 05:14:54',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_projetos',
                'table_name' => 'projetos',
                'created_at' => '2024-09-22 05:14:54',
                'updated_at' => '2024-09-22 05:14:54',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_escolas',
                'table_name' => 'escolas',
                'created_at' => '2024-09-22 05:18:10',
                'updated_at' => '2024-09-22 05:18:10',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_escolas',
                'table_name' => 'escolas',
                'created_at' => '2024-09-22 05:18:10',
                'updated_at' => '2024-09-22 05:18:10',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_escolas',
                'table_name' => 'escolas',
                'created_at' => '2024-09-22 05:18:10',
                'updated_at' => '2024-09-22 05:18:10',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_escolas',
                'table_name' => 'escolas',
                'created_at' => '2024-09-22 05:18:10',
                'updated_at' => '2024-09-22 05:18:10',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_escolas',
                'table_name' => 'escolas',
                'created_at' => '2024-09-22 05:18:10',
                'updated_at' => '2024-09-22 05:18:10',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_quesitos_avaliativos',
                'table_name' => 'quesitos_avaliativos',
                'created_at' => '2024-09-22 05:25:04',
                'updated_at' => '2024-09-22 05:25:04',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_quesitos_avaliativos',
                'table_name' => 'quesitos_avaliativos',
                'created_at' => '2024-09-22 05:25:04',
                'updated_at' => '2024-09-22 05:25:04',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_quesitos_avaliativos',
                'table_name' => 'quesitos_avaliativos',
                'created_at' => '2024-09-22 05:25:04',
                'updated_at' => '2024-09-22 05:25:04',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_quesitos_avaliativos',
                'table_name' => 'quesitos_avaliativos',
                'created_at' => '2024-09-22 05:25:04',
                'updated_at' => '2024-09-22 05:25:04',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_quesitos_avaliativos',
                'table_name' => 'quesitos_avaliativos',
                'created_at' => '2024-09-22 05:25:04',
                'updated_at' => '2024-09-22 05:25:04',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_avaliadores',
                'table_name' => 'avaliadores',
                'created_at' => '2024-09-23 23:45:58',
                'updated_at' => '2024-09-23 23:45:58',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_avaliadores',
                'table_name' => 'avaliadores',
                'created_at' => '2024-09-23 23:45:58',
                'updated_at' => '2024-09-23 23:45:58',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_avaliadores',
                'table_name' => 'avaliadores',
                'created_at' => '2024-09-23 23:45:58',
                'updated_at' => '2024-09-23 23:45:58',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_avaliadores',
                'table_name' => 'avaliadores',
                'created_at' => '2024-09-23 23:45:58',
                'updated_at' => '2024-09-23 23:45:58',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_avaliadores',
                'table_name' => 'avaliadores',
                'created_at' => '2024-09-23 23:45:58',
                'updated_at' => '2024-09-23 23:45:58',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_editais',
                'table_name' => 'editais',
                'created_at' => '2024-09-24 00:26:29',
                'updated_at' => '2024-09-24 00:26:29',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_editais',
                'table_name' => 'editais',
                'created_at' => '2024-09-24 00:26:29',
                'updated_at' => '2024-09-24 00:26:29',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_editais',
                'table_name' => 'editais',
                'created_at' => '2024-09-24 00:26:29',
                'updated_at' => '2024-09-24 00:26:29',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_editais',
                'table_name' => 'editais',
                'created_at' => '2024-09-24 00:26:29',
                'updated_at' => '2024-09-24 00:26:29',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_editais',
                'table_name' => 'editais',
                'created_at' => '2024-09-24 00:26:29',
                'updated_at' => '2024-09-24 00:26:29',
            ),
        ));
        
        
    }
}