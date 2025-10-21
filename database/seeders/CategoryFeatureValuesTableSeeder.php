<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryFeatureValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_feature_values')->delete();
        
        \DB::table('category_feature_values')->insert(array (
            0 => 
            array (
                'id' => 8,
                'name' => '۱۶۳.۳x۷۶.۶x۸.1 میلی‌متر',
                'category_feature_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 19:55:11',
                'updated_at' => '2025-09-30 20:22:54',
            ),
            1 => 
            array (
                'id' => 9,
                'name' => '۱۶۱.۱x۷۵x۸ میلی‌متر',
                'category_feature_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 19:56:55',
                'updated_at' => '2025-09-30 19:56:55',
            ),
            2 => 
            array (
                'id' => 10,
                'name' => '۱۶۲.۵x۷۴.۷x۸.۸ میلی‌متر',
                'category_feature_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 19:57:13',
                'updated_at' => '2025-09-30 19:57:13',
            ),
            3 => 
            array (
                'id' => 15,
                'name' => '1 ساله',
                'category_feature_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:26:33',
                'updated_at' => '2025-09-30 20:26:33',
            ),
            4 => 
            array (
                'id' => 16,
                'name' => '2 ساله',
                'category_feature_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:26:40',
                'updated_at' => '2025-09-30 20:26:40',
            ),
            5 => 
            array (
                'id' => 17,
                'name' => '3 ساله',
                'category_feature_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:26:44',
                'updated_at' => '2025-09-30 20:26:44',
            ),
            6 => 
            array (
                'id' => 18,
                'name' => '4 ساله',
                'category_feature_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:26:49',
                'updated_at' => '2025-09-30 20:26:49',
            ),
            7 => 
            array (
                'id' => 19,
            'name' => '۲۱۰ یا ۲۰۵ (متناسب با نوع قاب پشتی) گرم',
                'category_feature_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:33:38',
                'updated_at' => '2025-09-30 20:33:38',
            ),
            8 => 
            array (
                'id' => 20,
                'name' => ' ۱۷۹ گرم',
                'category_feature_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:33:51',
                'updated_at' => '2025-09-30 20:33:51',
            ),
            9 => 
            array (
                'id' => 21,
                'name' => ' ۱۸۷ گرم',
                'category_feature_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:34:00',
                'updated_at' => '2025-09-30 20:34:00',
            ),
            10 => 
            array (
                'id' => 22,
            'name' => ' Qualcomm SM۷۶۳۵ Snapdragon ۷s Gen ۳ (۴ nm)',
                'category_feature_id' => 37,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:34:39',
                'updated_at' => '2025-09-30 20:34:39',
            ),
            11 => 
            array (
                'id' => 23,
                'name' => ' Mediatek Helio G۹۹ Ultra',
                'category_feature_id' => 37,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:34:51',
                'updated_at' => '2025-09-30 20:34:51',
            ),
            12 => 
            array (
                'id' => 24,
                'name' => ' Qualcomm Snapdragon ۷s Gen ۲ Chipset',
                'category_feature_id' => 37,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:35:02',
                'updated_at' => '2025-09-30 20:35:02',
            ),
            13 => 
            array (
                'id' => 25,
                'name' => '۵۱۲ گیگابایت',
                'category_feature_id' => 42,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:35:54',
                'updated_at' => '2025-09-30 20:35:54',
            ),
            14 => 
            array (
                'id' => 26,
                'name' => ' ۲۵۶ گیگابایت',
                'category_feature_id' => 42,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:36:05',
                'updated_at' => '2025-09-30 20:36:05',
            ),
            15 => 
            array (
                'id' => 30,
            'name' => 'هشت هسته‌ای (دو هسته ۲.۲ گیگاهرتزی از نوع Cortex A۷۶ - شش هسته ۲.۰ گیگاهرتزی از نوع Cortex A۵۵)',
                'category_feature_id' => 38,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:38:57',
                'updated_at' => '2025-09-30 20:38:57',
            ),
            16 => 
            array (
                'id' => 32,
            'name' => 'هشت هسته‌ای (دو هسته ۲.۲ گیگاهرتزی از نوع Cortex A۷۶ - شش هسته ۲.۰ گیگاهرتزی از نوع Cortex A۵۵)',
                'category_feature_id' => 38,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:39:06',
                'updated_at' => '2025-09-30 20:39:06',
            ),
            17 => 
            array (
                'id' => 33,
                'name' => 'یک هسته ۲.۵ گیگاهرتزی از نوع Cortex-A۷۲۰ - سه هسته ۲.۴ گیگاهرتزی از نوع Cortex-A۷۲۰',
                'category_feature_id' => 38,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:39:12',
                'updated_at' => '2025-09-30 20:40:40',
            ),
            18 => 
            array (
                'id' => 34,
                'name' => 'UFS ۲.۲',
                'category_feature_id' => 43,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:41:08',
                'updated_at' => '2025-09-30 20:41:08',
            ),
            19 => 
            array (
                'id' => 35,
                'name' => 'UFS 3.3',
                'category_feature_id' => 43,
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 20:41:42',
                'updated_at' => '2025-09-30 20:41:42',
            ),
            20 => 
            array (
                'id' => 38,
                'name' => '40*50',
                'category_feature_id' => 46,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 10:15:59',
                'updated_at' => '2025-10-21 10:15:59',
            ),
            21 => 
            array (
                'id' => 39,
                'name' => '30*40',
                'category_feature_id' => 46,
                'deleted_at' => NULL,
                'created_at' => '2025-10-21 10:16:05',
                'updated_at' => '2025-10-21 10:16:05',
            ),
        ));
        
        
    }
}