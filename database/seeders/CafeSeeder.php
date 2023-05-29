<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // モデルの名前は単数、テーブルの名前は複数形にする
        // Laravel側で判断してモデルとマイグレーションを紐付ける

        DB::table('cafes')->insert(
            [
                [
                    'name' =>'BLUE BOTTLE COFFEE',
                    'pref' =>'東京都',
                    'address' => '豊島区',
                    'review' => 4.5,
                    'is_visible' => 1
                ]
            ] );
    }
}
