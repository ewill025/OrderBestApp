<?php

use App\Brands;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brands::create([
            'brand'=>'Apple',

        ]);
        Brands::create([
            'brand' => 'Samsung',

        ]);
    }
}
