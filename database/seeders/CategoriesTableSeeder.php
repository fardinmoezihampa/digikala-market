<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'موبایل',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 20:20:57',
                'updated_at' => '2025-09-25 20:20:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'گوشی آیفون 2',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 20:21:09',
                'updated_at' => '2025-09-25 20:21:09',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'لوازم خانگی',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 20:21:22',
                'updated_at' => '2025-09-25 20:21:22',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'یخچال LG',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 20:21:31',
                'updated_at' => '2025-10-21 10:12:30',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'لوازم دیجیتال',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 20:21:44',
                'updated_at' => '2025-09-25 20:21:44',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'هدفون',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 20:22:02',
                'updated_at' => '2025-10-21 10:05:10',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'گوشی اندروید',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 20:22:17',
                'updated_at' => '2025-09-25 20:22:17',
            ),
        ));
        
        
    }
}