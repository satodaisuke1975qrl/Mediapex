<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'mediaplex',
                'email' => 'mediaplex@test.com',
                'password' => Hash::make('mediaplex'),
                'role_id' => 10
            ],
            [
                'name' => 'tanaka',
                'email' => 'tanaka@test.com',
                'password' => Hash::make('tanaka'),
                'role_id' => 1
            ]
        ];

        DB::table('users')->insert($user);

        event(new Registered($user));
    }
}
