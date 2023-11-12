<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
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
