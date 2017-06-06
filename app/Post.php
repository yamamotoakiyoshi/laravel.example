<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //①テーブルの名前を登録する
    protected static $_table_name = 'friend';
    //②テーブルの主キーを登録する
    protected static $_primary_key = 'id';
}
