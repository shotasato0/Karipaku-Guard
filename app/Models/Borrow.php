<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'friend_id',
        'item_name',
        'borrowed_at',
        'trust_score',
    ];

    protected $casts = [
        'borrowed_at' => 'date',
    ];

    public function friend() 
    {
        return $this->belongsTo(Friend::class, 'friend_id');
    }

   // getDaysPassedAttributeメソッドはアクセサであり、
// $borrow->days_passedとしてアクセスされたときに実行されるカスタム属性の値を提供します。
    public function getDaysPassedAttribute()
    {
        // now()は現在の日時のCarbonインスタンスを返します。
        // diffInDaysメソッドは、指定された日付（この場合は$this->borrowed_at）と
        // 現在日時との差を日数で計算します。
        // $this->borrowed_atはBorrowモデルのborrowed_atカラムの値を参照します。
        // この結果、借りた日から現在までの経過日数が計算され、返されます。
        return now()->diffInDays($this->borrowed_at);
    }
}
