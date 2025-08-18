<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>管理画面｜ブログ投稿成功画面</title>

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>

    <style>
        body {
            padding-left: 200px !important;
            padding-right: 200px !important;
        }
    </style>
</head>

<body>
    <?php echo $this->element('administrator_header'); ?>

    <h1 class="admin-title">Blog Published</h1>
    <h2 class="admin-subtitle">ブログを公開しました。</h2>
</body>
</html>