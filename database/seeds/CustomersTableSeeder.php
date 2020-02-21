<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Customer::class, 50)->create();

        Customer::create([
            'name' => 'John Doe',
            'email' => 'john.doe@sales.com',
            'phone' => '404-555-9847',
            'address' => '123 Mockery Lane',
            'city' => 'Los Angeles',
            'state' => 'CA',
            'zipcode' => '90001',
        ]);
    }
}
