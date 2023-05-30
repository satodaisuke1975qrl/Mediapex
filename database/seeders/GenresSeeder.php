<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert(
            [
                [
                    'genrename'=>'ドラマ/映画',
                ],
                [
                    'genrename'=>'バラエティ',
                ],
                [
                    'genrename'=>'音楽',
                ],
                [
                    'genrename'=>'アニメ/ヒーロー',
                ],
                [
                    'genrename'=>'報道/情報/ドキュメント',
                ],
                [
                    'genrename'=>'スポーツ',
                ],
                [
                    'genrename'=>'料理/旅/暮らし',
                ],
            ]);
    }
}
