<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿作成</title>
</head>
<body>
    <h1>投稿作成ページ</h1>

    <!-- エラーメッセージ表示 -->
    <?php if($errors->any()): ?>
        <div>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="color:red;"><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- 投稿フォーム -->
    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label>タイトル：</label>
            <input type="text" name="title" value="<?php echo e(old('title')); ?>">
        </div>
        <div>
            <label>本文：</label>
            <textarea name="content"><?php echo e(old('content')); ?></textarea>
        </div>
        <button type="submit">投稿する</button>
    </form>
</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/laravel-basic-kadai/resources/views/posts/create.blade.php ENDPATH**/ ?>