<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->script('//code.jquery.com/jquery-3.6.0.min.js') ?>
    <?= $this->Html->script('script') ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    
    <title>管理画面</title>



    <style>
    /* ラベルのスタイル */
    .form-label {
        font-size: 14px;
        color: #555;
        display: block;
        margin-bottom: 5px;
        font-family: "Tsukimi Rounded", sans-serif;
        font-style: normal;
        margin-left: 20%;
    }

    body .form-input {
        width: 60%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        font-size: 16px;
        font-weight: 400;
        font-style: normal;
        margin-left: 20%;
    }

    /* ボタンのスタイル */
    body .form-submit {
        margin: 20px auto;
        font-size: 16px;
        color: #000000;
        background-color: #ffb836;
        border: none;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        display: block;
        text-align: center;
        transition: background-color 0.3s ease;
        font-family: "Tsukimi Rounded", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    body .form-submit:hover {
        background-color: #ffb83678 !important;
    }

    /* スマホ用のレスポンシブスタイル */
    @media screen and (max-width: 768px) {
        body .top-image img {
            width: 80%; /* スマホ画面ではロゴを少し小さく */
        }

        body .form-label {
            font-size: 12px; /* ラベルのフォントサイズを小さく */
        }

        body .form-submit {
            font-size: 14px; /* ボタンのフォントサイズを小さく */
            padding: 0px 10px 10px 10px; /* ボタンの内側の余白を調整 */
        }

        body .form-input {
            font-size: 14px; /* 入力フィールドのフォントサイズを調整 */
        }
    }
</style>
</head>

<body>
    <div class="top-image">
        <img src="/img/spiica-logo.png" alt="spica-logo">
    </div>

    <?= $this->Form->create(null, ['url' => ['controller' => 'Managements', 'action' => 'administrator_login'], 'method' => 'post']) ?>

        <!-- ログインID -->
        <?= $this->Form->control('username', ['type' => 'text', 'label' => ['text' => 'Login Id', 'class' => 'form-label'], 'class' => 'form-input']) ?>

        <!-- パスワード -->
        <?= $this->Form->control('passwd', ['type' => 'password', 'label' => ['text' => 'Password', 'class' => 'form-label'], 'class' => 'form-input']) ?>

        <!-- ログインボタン -->
        <?= $this->Form->submit('LOGIN', ['class' => 'form-submit']) ?>

    <?= $this->Form->end() ?>
</body>
</html>
