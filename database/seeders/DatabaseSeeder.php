<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 追加のシーダー呼び出し
        // DatabaseSeederの中でそれぞれのシーダーファイルを呼び出す
        $this->call([

            BSSSeeder::class,
            ContactsSeeder::class,
            UserSeeder::class,
            CafeSeeder::class,
            AudienceSeeder::class,
            GenresSeeder::class,
            TVSeeder::class,
            InitializeCoachesAndTeamsSeeder::class,
            InitializePlayersTableSeeder::class,
            // 各テーブルのデータを入れてから中間のテーブルのダミーを入れる
            InitializePositionsTableSeeder::class, //データテーブルが先
            InitializePlayerPositionTableSeeder::class // 中間テーブルが後

        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
