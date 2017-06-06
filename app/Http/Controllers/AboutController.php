<?php

namespace App\Http\Controllers;

use Request;


/*class AboutController extends Controller
{
    //
  / public function index(){
      return view('welcome');
    }
}*/
class AboutController extends Controller{

    //フォームを表示させるためのアクション（http://localhost/post/formで表示される）
    public function action_form(){
        return  view('form'); //View::forege()メソッドでビューを読み込む
    }

    public function action_save(){

        $form = array();
        $form['id'] = Request::input('id');//フォームの内容を配列へ格納
        $form['name'] = Request::input('name');
        $form['age'] = Request::input('age');
        $form['gender'] = Request::input('gender');

        $post = Post::forge(); //Model_Postクラスのオブジェクトを作成
        $post->set($form); //setメソッドで、配列をpostオブジェクトに設定
        $post->save(); //saveメソッドで、テーブルにレコードを書き込む

          Response::redirect('post'); //投稿一覧ページへリダイレクト
    }
    public function action_index(){

        $data = array();
        $data['rows'] = Post::find_all(); //Model_Postクラスにあるfind_allメソッドでDBを検索し、結果を配列へ格納

        return view('list',$data); //配列をViewのlistへ渡す

    }

}
