<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, user-scalable=no,
                maximum-scale=1, minimum-scale=1"
        >
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>つぶやきアプリ</title>
    </head>
    <body>
        <h1>つぶやきアプリ</h1>
        <div>
            <p>投稿フォーム</p>
            <form action="{{ route('tweet.create') }}" method="post">
                @csrf
                <label for="tweet-content">つぶやき</label>
                <span>140文字まで</span>
                <textarea name="tweet" id="tweet-content" type="text" placeholder="つぶやきを入力"></textarea>
                <button type="submit">投稿</button>
            </form>
        </div>
        <div>
            @foreach ($tweets as $tweet)
                <p>{{ $tweet->content }}</p>
            @endforeach
        </div>
    </body>
</html>