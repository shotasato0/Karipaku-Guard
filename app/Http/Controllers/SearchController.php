<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Friend;

class SearchController extends Controller
{
    public function index(Request $request)
{
    $keyword = $request->input('keyword');

    $friends = Friend::where('name', 'like', '%'.$keyword.'%')->get();
    $borrow = Borrow::where('name', 'like', '%'.$keyword.'%')->get();
    

    // 検索結果をビューに渡す
    return view('search.results', compact('friends'));
}

}
