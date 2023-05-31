<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BSSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('threaads')->insert(
        [
        'time' => '2023/05/31 06:43:33',
        'u_name' => '牧瀬',
        'message' => '今日の番組おもろい'
        ]
        );
    }
}
