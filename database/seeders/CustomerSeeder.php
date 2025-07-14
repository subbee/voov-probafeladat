<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'John Doe',
            'email' => 'john.doe@pelda.hu',
            'phone' => '123-456-7890',
            'avatar' => '/assets/images/avatar_01.png',
        ]);

        Customer::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@pelda.hu',
            'phone' => '555-123-4567',
            'avatar' => '/assets/images/avatar_03.png',
        ]);

        Customer::create([
            'name' => 'Bob Johnson',
            'email' => 'bob.johnson@pelda.hu',
            'phone' => '987-654-3210',
            'avatar' => '/assets/images/avatar_02.png',
        ]);
    }
}
