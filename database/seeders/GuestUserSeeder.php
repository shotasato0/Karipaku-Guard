<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class GuestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'ゲストユーザー',
            'email' => 'guest@example.com',
            'password' => Hash::make('XDrzn4BwRHwu'), //適切なパスワードを設定
            'is_guest' => true, // ゲストユーザーとして設定
        ]);
    }
}
