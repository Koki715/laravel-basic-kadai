<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿作成</title>
</head>
<body>
    <h1>投稿作成ページ</h1>

    <!-- エラーメッセージ表示 -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- 投稿フォーム -->
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label>タイトル：</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label>本文：</label>
            <textarea name="content">{{ old('content') }}</textarea>
        </div>
        <button type="submit">投稿する</button>
    </form>
</body>
</html>
