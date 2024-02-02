<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- ユーザーが登録した名前 --}}
    {{ $name }} さん

    こんにちは。
    メール送信テストです。

    よろしくお願い申し上げます。

    {{-- 設定したアプリの名前 --}}
    {{ env('APP_NAME') }}

</body>

</html>
