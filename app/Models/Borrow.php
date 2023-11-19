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

    public function friend()
{
    return $this->belongsTo(Friend::class, 'friend_id');
}

}
