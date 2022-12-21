<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $adminsekolah = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make ('admin'),
                'role' => 'admin',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($adminsekolah);
    }
}
