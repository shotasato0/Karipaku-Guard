<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // 'borrows'テーブルに新しいカラムと外部キーを追加
        Schema::table('borrows', function (Blueprint $table) {
            // 'user_id'カラムがまだ存在しないかチェック
            if (!Schema::hasColumn('borrows', 'user_id')) {
                // 'id'カラムの後に'user_id'カラムを追加
                $table->unsignedBigInteger('user_id')->after('id');
                // 'user_id'を外部キーとして定義し、'users'テーブルの'id'カラムを参照。削除時はカスケード
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        // up()で行った操作を逆に行う
        Schema::table('borrows', function (Blueprint $table) {
            // 'user_id'に関する外部キー制約を削除
            $table->dropForeign(['user_id']);
            // 'user_id'カラムを削除
            $table->dropColumn('user_id');
        });
    }

};
