<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AudienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('audiences')->insert(
            [
                [
                    'name' =>'牧瀬',
                    'email' =>'makise@makise.com',
                    'password' => 'password',
                ]
            ]);
    }
}
