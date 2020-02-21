<?php

use App\Devices;
use Illuminate\Database\Seeder;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Devices::create([
            'brand_id' => '1',
            'model' => 'iPhone 8 ',
            'color_1'=> 'Space Gray',
            'color_2' => 'Silver',
            'color_3' => 'Gold',
            'color_4' => '',
            'color_5' => '',
            'size_1' => '64GB',
            'size_2' => '256GB',
            'size_3' => '',

        ]);
        Devices::create([
            'brand_id' => '1',
            'model' => 'iPhone 8 Plus ',
            'color_1' => 'Space Gray',
            'color_2' => 'Silver',
            'color_3' => 'Gold',
            'color_4' => '',
            'color_5' => '',
            'size_1' => '64GB',
            'size_2' => '256GB',
            'size_3' => '',

        ]);
        Devices::create([
            'brand_id' => '1',
            'model' => 'iPhone XR ',
            'color_1' => 'Black',
            'color_2' => 'White',
            'color_3' => '(PRODUCT) RED',
            'color_4' => 'Yellow',
            'color_5' => 'Coral Blue',
            'size_1' => '64GB',
            'size_2' => '128GB',
            'size_3' => '256GB',

        ]);
        Devices::create([
            'brand_id' => '1',
            'model' => 'iPhone XS ',
            'color_1' => 'Space Gray',
            'color_2' => 'Silver',
            'color_3' => 'Gold',
            'color_4' => '',
            'color_5' => '',
            'size_1' => '64GB',
            'size_2' => '128GB',
            'size_3' => '256GB',
        ]);
        Devices::create([
            'brand_id' => '1',
            'model' => 'iPhone XS MAX ',
            'color_1' => 'Space Gray',
            'color_2' => 'Silver',
            'color_3' => 'Gold',
            'color_4' => '',
            'color_5' => '',
            'size_1' => '64GB',
            'size_2' => '128GB',
            'size_3' => '256GB',
        ]);
        Devices::create([
            'brand_id' => '2',
            'model' => 'Galaxy S10 5G ',
            'color_1' => 'Majestic Black',
            'color_2' => 'Crown Silver',
            'color_3' => '',
            'color_4' => '',
            'color_5' => '',
            'size_1' => '256GB',
            'size_2' => '512GB',
            'size_3' => '',

        ]);
        Devices::create([
            'brand_id' => '2',
            'model' => 'Galaxy S10 ',
            'color_1' => 'Prism White',
            'color_2' => 'Prism Black',
            'color_3' => 'Prism Blue',
            'color_4' => 'Prism Pink',
            'color_5' => '',
            'size_1' => '128GB',
            'size_2' => '512GB',
            'size_3' => '',

        ]);
        Devices::create([
            'brand_id' => '2',
            'model' => 'Galaxy S9 ',
            'color_1' => 'Lilac Purple',
            'color_2' => 'Coral Blue',
            'color_3' => 'Midnight Black',
            'color_4' => '',
            'color_5' => '',
            'size_1' => '64GB',
            'size_2' => '',
            'size_3' => '',


        ]);
        Devices::create([
            'brand_id' => '2',
            'model' => 'Galaxy Note 9 ',
            'color_1' => 'Ocean Blue',
            'color_2' => 'Midnight Black',
            'color_3' => 'Lavender Purple',
            'color_4' => '',
            'color_5' => '',
            'size_1' => '128GB',
            'size_2' => '512GB',
            'size_3' => '',

        ]);
    }
}
