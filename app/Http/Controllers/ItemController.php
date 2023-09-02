<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        //itemsテーブルのデータを全て取得
        $items = Item::get();
        return view('item.index', compact('items'));
    }

    public function detail($id){
        //itemsテーブルのデータを全て取得
        $items = Item::find($id);
        return view('item.detail', compact('items'));
    }

    public function create(Request $request){
        return view('item.create');
    }

    public function store(Request $request){
        //画像フォームでリクエストした画像を取得
        $img = $request->file('img_path');
        //storage > public > img配下に画像が保存される
        $path = $img->store('img','public');
            
        Item::create([
                'date' => $request->date,
                'img_path' => $path,
                'english' => $request->english,
                'good_point' => $request->good_point,
                'bad_point' => $request->bad_point,
            ]);
            
            //リダイレクト
            return redirect()->route('item.index');
    }
}

