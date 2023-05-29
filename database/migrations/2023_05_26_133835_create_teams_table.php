<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            //外部キー('coach_id')：coachesテーブルと関連づけるために設定
            $table->foreignId('coach_id') // coach_id というカラムを作成する
            ->nullable() // 外部キーにnull を設定できるようにする
            ->default(null) // 外部キーのデフォルト値をnullに設定する
            ->constrained('coaches');  // 関連づけるテーブル名を指定する(※先にcoaches テーブルを作成しておく必要がある)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
