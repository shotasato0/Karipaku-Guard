<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('borrows');

        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('friend_id'); // 借りたユーザーをfriendsのidに結びつける
            $table->string('item_name'); // 借りたアイテムの名称
            $table->date('borrowed_at'); // 借りた日
            $table->integer('trust_score')->default(100); // 信頼度スコア(初期値は100)
            $table->timestamps();

            $table
                ->foreign('friend_id') // 上で定義したfriend_idを
                ->references('id') // idに結びつける
                ->on('friends') // friendsテーブルの
                ->onDelete('cascade'); // borrowsテーブルでレコードが削除されたら関連するフレンドも削除される
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};

