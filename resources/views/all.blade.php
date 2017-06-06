<!doctype html>

{{-- 子テンプレート --}}
{{-- resources/views/all.blade.php --}}
@extends('layouts.master')
@section('title', 'DBのTABLE内容を表示するサンプルページ')
@section('content')



<form class="form-signin" role="form" method="post" action="FriendController">
{{-- CSRF対策 --}}
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="text" name="name" class="form-control" placeholder="名前を入力してください" required autofocus>
<button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
</form>




@endsection
