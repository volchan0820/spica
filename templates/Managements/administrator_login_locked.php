<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>管理画面 | ログインロック画面</title>

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>

    <style>
        .admin-title {
            padding-top: 0px;
        }
    </style>
</head>

<body>
    <div class="top-image">
        <img src="/img/spica-logo.png" alt="spica-logo">
    </div>

    <h1 class="admin-title">Account Locked</h1>
    <h2 class="admin-subtitle">ログインに3回失敗したのでアカウントをロックしました。<br>管理者に連絡してください。</h2>


    <form action="<?= $this->Url->build(['action' => 'administratorLogin']) ?>" method="get">
    <button class="btn-back" type="submit">ログイン画面へ戻る</button>
    <p style="color: red; text-align: center; font-family: 'Zen Old Mincho', serif; margin-bottom: 100px;">※ ロック解除後にログイン画面へ遷移できます。</p>
</form>
</body>
</html>