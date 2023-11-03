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
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //借りたユーザー(borrowsをusersのidに結びつけるためのもの)
            $table->string('item_name'); //借りたアイテムの名称
            $table->date('borrowed_at'); //借りた日
            $table->integer('trust_score')->default(100); //信頼度スコア
            $table->timestamps();
            $table
                ->foreign('user_id') //上で定義したuser_idを
                ->references('id') //idに結びつける
                ->on('posts') //postsテーブルの
                ->onDelete('cascade'); //borrowsテーブルでレコードが削除されたら関連するユーザーも削除される
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
