<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Sellers')->delete();
        
        \DB::table('Sellers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'کوروش',
                'shop_name' => 'فروشگاه کوروش',
                'phone' => '0212227434',
                'mobile' => '09192873192',
                'description' => 'فروشگاه بین المللی کوروش',
                'address' => '',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'البرز',
                'shop_name' => 'فروشگاه البرز',
                'phone' => '0212227434',
                'mobile' => '09192873192',
                'description' => 'فروشگاه بین المللی البرز',
                'address' => '',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}