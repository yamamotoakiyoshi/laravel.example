{{-- 子テンプレート --}}
{{-- resources/greeting.blade.php --}}
@extends('layouts.master')
@section('title', '入力した内容を表示するサンプルページ')
@section('content')


{{$message}}



<form class="form-signin" role="form" method="post" action="greeting">
{{-- CSRF対策 --}}
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="text" name="onamae" class="form-control" placeholder="名前を文字を入力してください" required autofocus>
<button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
</form>


@endsection
