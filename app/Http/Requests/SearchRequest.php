<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
    public function rules()
    {
        return [
            'keyword' => 'required_without_all:upper,lower',
            'upper' => 'required_without_all:keyword,lower',
            'lower' => 'required_without_all:keyword,upper',
        ];
    }

    public function messages()
    {
        return [
            'keyword.required_without_all' => 'キーワードは必須です。',
            'upper.required_without_all' => 'キーワード、上限値、下限値のうち少なくとも1つは必須です。',
            'lower.required_without_all' => 'キーワード、上限値、下限値のうち少なくとも1つは必須です。',
        ];
    }
}

