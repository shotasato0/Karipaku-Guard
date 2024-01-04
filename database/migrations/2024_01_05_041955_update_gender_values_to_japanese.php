<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        // 既存のレコードを更新
        DB::table('friends')->where('gender', 'male')->update(['gender' => '男性']);
        DB::table('friends')->where('gender', 'female')->update(['gender' => '女性']);
        DB::table('friends')->where('gender', 'other')->update(['gender' => '指定なし']);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // ロールバックのために逆の変更を行う
        DB::table('friends')->where('gender', '男性')->update(['gender' => 'male']);
        DB::table('friends')->where('gender', '女性')->update(['gender' => 'female']);
        DB::table('friends')->where('gender', '指定なし')->update(['gender' => 'other']);
    }
};
