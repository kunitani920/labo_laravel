<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    //Indexページの表示
    public function index() {
        return view('bbs.index');
    }

    //投稿された内容を表示するページ
    public function create(Request $request) {


        //バリデーションチェック
        $request->validate([
            'name' => 'required|max:10',
            'comment' => 'required|min:5|max:140',
        ]);
        //投稿内容を受け取って変数にいれる
        $name = $request->input('name');
        $comment = $request->input('comment');

        //変数をビューに渡す
        return view('bbs.index')->with([
            "name" => $name,
            "comment" => $comment,
        ]);
    }
}

?>