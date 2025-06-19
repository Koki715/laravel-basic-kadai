<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel基礎</title>
</head>

<body>
   <h1>投稿一覧</h1>
   <a href="{{ route('create') }}">新規登録</a>

   <table border="0" cellpadding="10">
       <thead>
           <tr>
               <th>タイトル</th>
               <th>本文</th>
           </tr>
       </thead>
       <tbody>
           @if ($posts->isEmpty())
               <tr>
                   <td colspan="2">投稿がありません。</td>
               </tr>
           @else
               @foreach ($posts as $post)
                   <tr>
                       <td>{{ $post->title }}</td>
                       <td>{{ $post->content }}</td>
                   </tr>
               @endforeach
           @endif
       </tbody>
   </table>

</body>

</html>
