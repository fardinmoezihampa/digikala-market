<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryFeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_features')->delete();
        
        \DB::table('category_features')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'ابعاد',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-28 20:03:04',
                'updated_at' => '2025-09-28 20:03:04',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'وزن',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-28 20:06:43',
                'updated_at' => '2025-09-28 20:06:43',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'گارانتی',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-28 20:08:16',
                'updated_at' => '2025-09-28 20:08:16',
            ),
            3 => 
            array (
                'id' => 37,
                'name' => 'تراشه',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-28 22:43:17',
                'updated_at' => '2025-09-28 22:43:17',
            ),
            4 => 
            array (
                'id' => 38,
                'name' => 'پردازنده‌',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-28 22:43:25',
                'updated_at' => '2025-09-28 23:07:25',
            ),
            5 => 
            array (
                'id' => 42,
                'name' => 'حافظه داخلی',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-28 23:01:19',
                'updated_at' => '2025-09-28 23:01:19',
            ),
            6 => 
            array (
                'id' => 43,
                'name' => 'استاندارد کارت حافظه',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-28 23:01:34',
                'updated_at' => '2025-09-28 23:01:34',
            ),
            7 => 
            array (
                'id' => 46,
                'name' => 'سایز',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 10:15:51',
                'updated_at' => '2025-10-21 10:15:51',
            ),
        ));
        
        
    }
}