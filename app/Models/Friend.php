<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'age', 
        'gender', 
        'phone', 
        'email', 
        'address', 
        'relationship_type', 
        'personal_notes'
    ];
}
