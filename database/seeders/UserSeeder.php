<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Xusan',
            'email' => 'Xusan@gmail.com',
            'password' => Hash::make("19_Xusan.99"),
        ]);

        // \App\Models\User::factory(10)->create();

    }
}
