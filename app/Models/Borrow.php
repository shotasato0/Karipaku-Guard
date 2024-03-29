<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'friend_id',
        'item_name',
        'borrowed_at',
        'deadline',
        'trust_score'
    ];

    public function user()
    {
    return $this->belongsTo(User::class, 'user_id');
    }


    protected $casts = [
        'borrowed_at' => 'date',
        'deadline'=>'date'
    ];

    public function friend()
    {
        return $this->belongsTo(Friend::class, 'friend_id');
    }


    public function getDaysUntilDeadlineAttribute()
    {
    if ($this->deadline) {
        // deadlineが設定されている場合、現在日時との差を計算
        //now()は現在日時を示すCarbonインスタンス、diffInDays()はCarbonインスタンスのメソッド
        return now()->diffInDays($this->deadline, false);
    }

    // deadlineが設定されていない場合はnullを返す
    return null;
    }
}
