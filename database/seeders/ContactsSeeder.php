<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // DBファサード

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // モデルの名前は単数、テーブルの名前は複数形にする
        // Laravel側で判断してモデルとマイグレーションを紐付ける
        DB::table('contacts')->insert(
            [
                [
                    'name' =>'佐藤',
                    'email' =>'sato@test.com',
                    'gender' => 0,
                    'age' => 20,
                    'message' => 'テスト1'
                ],
                [
                    'name' => '三笘',
                    'email' => 'mitoma@test.com',
                    'gender' => 0,
                    'age' => 25,
                    'message' => 'がんばってね'
                ],
                [
                    'name' => 'Aimer',
                    'email' => 'aimer@test.com',
                    'gender' => 1,
                    'age' => 28,
                    'message' => '歌上手ですね'
                ]
            ]
        );
    }
}
