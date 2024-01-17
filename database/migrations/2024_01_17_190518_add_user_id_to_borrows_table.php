<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('borrows', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->after('id'); // idカラムの後に追加
        $table->foreign('user_id')->references('id')->on('users'); // usersテーブルのidカラムを参照
    });
}


    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('borrows', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
    });
}

};
