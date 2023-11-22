<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;

class BorrowController extends Controller
{
    public function index() {
        $borrows = Borrow::latest()->get();

        return view('index')
            ->with(['borrows' => $borrows]);
    }

    public function friend($id) {
        $borrow = Borrow::find($id); 
        // $borrows = Borrow::latest()->get();

        return view('friends.show')
            ->with(['borrow' => $borrow]);
    }

    public function item($id) {
        // $id を使って特定のアイテムに関するデータを取得
        $item = Item::find($id); // 仮にItemモデルがあると仮定

        // データが見つからない場合のエラーハンドリング
        if (!$item) {
            return redirect()->route('borrows.index')->withErrors('Item not found.');
        }

        // アイテムに関連するビューを返す
        return view('items.show', compact('item'));
    }

}
