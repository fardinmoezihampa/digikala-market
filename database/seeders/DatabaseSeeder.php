<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        $this->call(CountryTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(CityTableSeeder::class);

        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryFeaturesTableSeeder::class);
        $this->call(CategoryFeatureValuesTableSeeder::class);
        $this->call(SellersTableSeeder::class);
    }
}
