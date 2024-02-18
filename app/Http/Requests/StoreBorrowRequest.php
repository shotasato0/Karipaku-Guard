<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBorrowRequest extends FormRequest
{
    public function rules()
    {
        return [
            'friend_name' => 'required|string|max:20',
            'item_name' => 'required|string|max:20',
            'borrowed_at' => 'required|date',
            'deadline' => 'required|date',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'friend_name.required' => '借りた人の名前は必須です。',
    //         'item_name.required' => '借りた物の名前は必須です。',
    //         'borrowed_at.required' => '借りた日は必須です。',
    //         'deadline.required' => '返却期限は必須です。',
    //     ];
    // }
}

