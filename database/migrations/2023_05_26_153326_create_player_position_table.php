<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // 中間テーブル pivot table
    // 第１引数（モデル名）のLaravel推奨はアルファベット順
    // 第１引数（モデル名）は単数形

    public function up(): void
    {
        Schema::create('player_position', function (Blueprint $table) {
            $table->id();

            // 中間テーブルのidは２つ登録する（中間だから）
            // idの型（今回はbigInteger）は合わせる必要がある（エラー出る）
            $table->bigInteger('player_id'); /* players テーブルのidを指定するカラム */
            $table->bigInteger('position_id'); /* positions テーブルのidを指定するカラム */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_position');
    }
};
