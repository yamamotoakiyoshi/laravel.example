<html>
<meta charset="UTF-8">
<body>
    //送信した値の受け渡し先をaction属性で指定。この場合コントローラpostのアクションsaveへ渡る
    <form action="" method="post">
        <input name="_token" type="hidden" value="{{csrf_token()}}">
        <input type="text" name="id" value="" />
        <input type="text" name="name" value="" />
        <input type="text" name="age" value="" />
        <input type="text" name="gender" value="" />

        <input type="submit" name="submit" value="送信" />
    </form>
</body>
</html>
