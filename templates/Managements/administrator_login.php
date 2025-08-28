<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>管理画面 | ログイン</title>

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
</head>

<body>
    <div class="top-image">
        <img src="/img/spica-logo.png" alt="spica-logo">
    </div>

    <?= $this->Form->create(null, ['url' => '/managements/administrator-login-ZmhT3nWEjld02kFcqEm5', 'method' => 'post']) ?>
        <!-- ログインID -->
        <?= $this->Form->control('username', ['type' => 'text', 'label' => ['text' => 'Login Id', 'class' => 'form-label'], 'class' => 'form-input']) ?>
        <!-- パスワード -->
        <?= $this->Form->control('passwd', ['type' => 'password', 'label' => ['text' => 'Password', 'class' => 'form-label'], 'class' => 'form-input']) ?>
        <!-- ログインボタン -->
        <?= $this->Form->submit('LOGIN', ['class' => 'form-submit']) ?>
    <?= $this->Form->end() ?>
</body>
</html>
