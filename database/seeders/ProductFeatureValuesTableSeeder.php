<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductFeatureValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_feature_values')->delete();
        
        \DB::table('product_feature_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 12,
                'category_feature_id' => 4,
                'category_feature_value_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 08:59:06',
                'updated_at' => '2025-10-21 09:48:33',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 12,
                'category_feature_id' => 5,
                'category_feature_value_id' => 20,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 08:59:06',
                'updated_at' => '2025-10-21 09:48:39',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 12,
                'category_feature_id' => 6,
                'category_feature_value_id' => 18,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 08:59:06',
                'updated_at' => '2025-10-21 09:48:45',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 12,
                'category_feature_id' => 37,
                'category_feature_value_id' => 22,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 08:59:06',
                'updated_at' => '2025-10-21 08:59:06',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 12,
                'category_feature_id' => 38,
                'category_feature_value_id' => 30,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 08:59:06',
                'updated_at' => '2025-10-21 08:59:06',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 12,
                'category_feature_id' => 42,
                'category_feature_value_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 08:59:06',
                'updated_at' => '2025-10-21 09:49:03',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 12,
                'category_feature_id' => 43,
                'category_feature_value_id' => 35,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 08:59:06',
                'updated_at' => '2025-10-21 09:48:52',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 7,
                'category_feature_id' => 4,
                'category_feature_value_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:49:51',
                'updated_at' => '2025-10-21 10:00:17',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 7,
                'category_feature_id' => 5,
                'category_feature_value_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:49:51',
                'updated_at' => '2025-10-21 10:00:24',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 7,
                'category_feature_id' => 6,
                'category_feature_value_id' => 16,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:49:51',
                'updated_at' => '2025-10-21 09:49:51',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 7,
                'category_feature_id' => 37,
                'category_feature_value_id' => 22,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:49:51',
                'updated_at' => '2025-10-21 09:49:51',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 7,
                'category_feature_id' => 38,
                'category_feature_value_id' => 33,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:49:51',
                'updated_at' => '2025-10-21 09:50:01',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 7,
                'category_feature_id' => 42,
                'category_feature_value_id' => 25,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:49:52',
                'updated_at' => '2025-10-21 09:49:52',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 7,
                'category_feature_id' => 43,
                'category_feature_value_id' => 34,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:49:52',
                'updated_at' => '2025-10-21 09:49:52',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 1,
                'category_feature_id' => 4,
                'category_feature_value_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:59:41',
                'updated_at' => '2025-10-21 09:59:41',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 1,
                'category_feature_id' => 5,
                'category_feature_value_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:59:41',
                'updated_at' => '2025-10-21 09:59:41',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 1,
                'category_feature_id' => 6,
                'category_feature_value_id' => 18,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:59:41',
                'updated_at' => '2025-10-21 09:59:41',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 1,
                'category_feature_id' => 37,
                'category_feature_value_id' => 24,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:59:41',
                'updated_at' => '2025-10-21 09:59:41',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 1,
                'category_feature_id' => 38,
                'category_feature_value_id' => 33,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:59:41',
                'updated_at' => '2025-10-21 09:59:41',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 1,
                'category_feature_id' => 42,
                'category_feature_value_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:59:41',
                'updated_at' => '2025-10-21 09:59:41',
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 1,
                'category_feature_id' => 43,
                'category_feature_value_id' => 35,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 09:59:41',
                'updated_at' => '2025-10-21 09:59:41',
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 11,
                'category_feature_id' => 46,
                'category_feature_value_id' => 38,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 10:17:10',
                'updated_at' => '2025-10-21 10:17:10',
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 10,
                'category_feature_id' => 46,
                'category_feature_value_id' => 39,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 10:17:18',
                'updated_at' => '2025-10-21 10:17:18',
            ),
        ));
        
        
    }
}