<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;
use App\Models\Borrow;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // $keyword = $request->input('keyword');
        // $friends = collect();
        // $borrows = collect();

        // if (!empty($keyword)) {
        //     $friends = Friend::where('name', 'like', '%'.$keyword.'%')->paginate(5);
        //     $borrows = Borrow::where('item_name', 'like', '%'.$keyword.'%')->paginate(5);
        // }

        // // 検索結果をビューに渡す
        // return view('search.results', compact('friends', 'borrows'));

        //テーブルからすべてのレコードを取得
        $borrows = Borrow::query();

        $keyword = $request->input('keyword'); //nameキーワードを取得
        $upper = $request->input('upper');
        $upper = $request->input('lower');

        //キーワードから検索処理
        if(!empty($keyword)) {

            $borrows->where('item_name', 'LIKE', "%{$keyword}%")
            ->orwhereHas('friend', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%");
            })->get();
            }

            //最大値から検索処理
            if(!empty($upper)) {

                $borrows->whereHas('friend', function ($q)use($upper) {
                    $q->where('id', '<=', $upper);
                })->get();
            }

            //最小値から検索
            if(!empty($lower)) {

                $borrows->whereHas('friend', function ($q)use($lower) {
                    $q->where('id', '<=', $lower);
                })->get();
            }

            //ページネーション
            //5レコードずつ表示する
            $posts = $borrows->paginate(5);
            // dd($posts);
            return view('search.results', ['posts' => $posts]);
    }
}