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
        'u_name' => '牧瀬',
        'message_title' => 'テスト',
        'message' => 'おもろい'
        ]
        );
    }
}
