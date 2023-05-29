<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // お問合せフォーム
        // 名前、メール、性別、年齢、お問合せ内容

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // name という文字列
            $table->string('email');
            $table->tinyInteger('gender');
            $table->integer('age');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
