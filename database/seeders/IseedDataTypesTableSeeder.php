<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IseedDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-09-22 02:40:31',
                'updated_at' => '2024-09-22 02:40:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-09-22 02:40:31',
                'updated_at' => '2024-09-22 02:40:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-09-22 02:40:31',
                'updated_at' => '2024-09-22 02:40:31',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'areas',
                'slug' => 'areas',
                'display_name_singular' => 'Area',
                'display_name_plural' => 'Areas',
                'icon' => 'voyager-study',
                'model_name' => 'App\\Models\\Area',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\VoyagerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2024-09-22 04:14:00',
                'updated_at' => '2024-09-22 04:14:00',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'projetos',
                'slug' => 'projetos',
                'display_name_singular' => 'Projeto',
                'display_name_plural' => 'Projetos',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Models\\Projeto',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2024-09-22 05:14:54',
                'updated_at' => '2024-09-22 05:14:54',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'escolas',
                'slug' => 'escolas',
                'display_name_singular' => 'Escola',
                'display_name_plural' => 'Escolas',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Models\\Escola',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2024-09-22 05:18:10',
                'updated_at' => '2024-09-22 05:18:10',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'quesitos_avaliativos',
                'slug' => 'quesitos-avaliativos',
                'display_name_singular' => 'Quesito Avaliativo',
                'display_name_plural' => 'Quesitos Avaliativos',
                'icon' => 'voyager-diamond',
                'model_name' => 'App\\Models\\QuesitoAvaliativo',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2024-09-22 05:25:04',
                'updated_at' => '2024-09-22 05:25:04',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'avaliadores',
                'slug' => 'avaliadores',
                'display_name_singular' => 'Avaliador',
                'display_name_plural' => 'Avaliadores',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Models\\Avaliador',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\VoyagerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-09-23 23:45:58',
                'updated_at' => '2024-09-24 00:45:39',
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'editais',
                'slug' => 'editais',
                'display_name_singular' => 'Edital',
                'display_name_plural' => 'Editais',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\Edital',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\VoyagerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-09-24 00:26:29',
                'updated_at' => '2024-09-24 00:27:17',
            ),
        ));
        
        
    }
}