<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('audiences')->insert(
            [
                [
                    'title' =>'牧瀬',
                    'time' =>'00:00',
                    'content' => '番組概要はこちら'
                ]
            ]);
    }
}
