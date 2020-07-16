<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Eric Williams',
            'email' => 'ericwilliamsjr@live.com',
            'role' => 'admin',
            'isActive'=> 1,
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Sales Rep',
            'email' => 'sales.rep@te-br.com',
            'role' => 'salesrep',
            'isActive' => 1,
            'password' => Hash::make('password'),

        ]);
        User::create([
            'name' => 'Order Manager',
            'email' => 'order.manager@te-br.com',
            'role' => 'manager',
            'isActive' => 1,
            'password' => Hash::make('password'),

        ]);

        User::create([
            'name' => 'Chris Mal',
            'email' => 'chris.mal@te-br.com',
            'role' => 'admin',
            'isActive' => 1,
            'password' => Hash::make('password'),
        ]);
    }
}
