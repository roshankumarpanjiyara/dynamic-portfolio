<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'id' => '1',
            'name' => 'Roshan Kumar Panjiyara',
            'email' => 'roshanpanziarya055@gmail.com',
            'email_verified_at'=> NOW(),
            'password'=>bcrypt('password'),
        ]);

        Banner::create([
            'id' => '1',
            'name' => 'Roshan Kumar Panjiyara',
            'work' => '',
            'image' => '',
        ]);
    }
}
