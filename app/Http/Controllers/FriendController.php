<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Friend;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;


class FriendController extends Controller
{
    public function index()
    {
      return view('all');
    }
    //

    public function store(Request $request)
    {


       #Friendモデルクラスのオブジェクトを作成
      $friend = new \App\Friend();
      #Friendモデルクラスのプロパティに値を代入

      $friend->name = $request->input('name');


       #Friendモデルクラスのsaveメソッドを実行
      $friend->save();

      #return view('index',compact('friend'));


      #$res変数に代入
       $res = 'こんにちは！' . $request->input('name').'さん！！';
       #all.blade.phpの$messageに$resを代入
      return view('index',['message'=>$res]);



    }
}
