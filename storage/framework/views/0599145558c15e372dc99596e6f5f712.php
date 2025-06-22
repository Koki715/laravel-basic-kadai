<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel_Basic_Kadai</title>
</head>
<body>
   <table>
       <tr>
           <th>ID</th>
           <td><?php echo e($post->id); ?></td>
       </tr>
       <tr>
           <th>タイトル</th>
           <td><?php echo e($post->title); ?></td>
       </tr>
       <tr>
           <th>本文</th>
           <td><?php echo e($post->content); ?></td>
       </tr>    
       <tr>
           <th>作成日時</th>
           <td><?php echo e($post->created_at); ?></td>            
       </tr>
       <tr>
           <th>更新日時</th>
           <td><?php echo e($post->updated_at); ?></td>
       </tr>      
   </table>
</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/laravel-basic-kadai/resources/views/posts/show.blade.php ENDPATH**/ ?>