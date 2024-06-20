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
        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            $table->string('name');                // 名前
            $table->integer('age')->nullable();    // 年齢
            $table->string('gender')->nullable();  // 性別
            $table->string('phone')->nullable();   // 電話番号
            $table->string('email')->nullable();   // メールアドレス
            $table->text('address')->nullable();   // 住所
            $table->string('relationship_type')->nullable();  // 関係の種類
            $table->text('personal_notes')->nullable();      // 個人的なメモやコメント
            $table->timestamps(); //エンコード問題を仮クリア
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friends');
    }
};
