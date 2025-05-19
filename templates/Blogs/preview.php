<!-- templates/Blogs/preview.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    
    <?php use Cake\I18n\FrozenTime; ?>
    
    <title>プレビュー</title>
<style>
    body {
        background-color: #f5f5f5;
        margin: 0;
        font-family: "Zen Maru Gothic", sans-serif;
    }

    .top-image img {
        display: block;
        margin: 30px auto 10px;
        max-width: 180px;
        height: auto;
    }

    .admin-title {
        text-align: center;
        font-size: 36px;
        font-weight: bold;
        margin-top: 0;
        color: #444;
        font-family: "Tsukimi Rounded", sans-serif;
    }

    .confirm-blog-detail {
        background-color: #ffffff;
        border: 2px solid #ddd;
        padding: 40px;
        margin: 40px auto;
        max-width: 800px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }

    .update-date {
        text-align: right;
        font-size: 16px;
        color: #999;
        margin-bottom: 10px;
    }

    .preview-title {
        text-align: center;
        font-size: 32px;
        font-weight: bold;
        margin: 20px 0;
        font-family: "Tsukimi Rounded", sans-serif;
        color: #333;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    }

    .preview-text {
        text-align: left;
        font-size: 18px;
        line-height: 1.8;
        color: #444;
        margin-top: 30px;
        word-break: break-word;
    }

    .preview-text img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 30px auto;
        border-radius: 12px;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
    }

    .publish-button-wrapper {
        text-align: center;
        margin-top: 20px;
    }

    /* 公開ボタン */
    body .publishButton {
        margin: 100px auto;
        font-size: 16px;
        color: #000000;
        background-color: #ffb836;
        border: none;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 10px 20px;
        transition: background-color 0.3s ease;
        font-family: "Tsukimi Rounded", sans-serif;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        max-width: 160px;
    }
    
    .publishButton:hover {
        background-color: #e68900;
        transform: scale(1.03);
    }
</style>

</head>
<body>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const publishBtn = document.querySelector('.publishButton');
            if (publishBtn) {
                publishBtn.addEventListener('click', function () {
                     // セッションストレージからタイトルと本文を削除
                    sessionStorage.removeItem("blog_title");
                    sessionStorage.removeItem("blog_content");
                });
            }
        });
    </script>

    <?php echo $this->element('administrator_header'); ?>

    <div class="top-image">
        <img src="/img/spiica-logo.png" alt="spica-logo">
    </div>

    <h2 class="admin-title">Preview</h2>

    <div class="confirm-blog-detail">
        <h2 class="update-date"><?= isset($data['created']) ? h(FrozenTime::parse($data['created'])->format('Y/m/d')) : '投稿日なし' ?></h2>
        <h2 class="preview-title"><?= isset($data['title']) ? h($data['title']) : 'タイトルなし' ?></h2>
        <h2 class="preview-text"><?= isset($data['content']) ? $data['content'] : '<p>本文なし</p>' ?></h2>
    </div>
    <div class="publish-button-wrapper">
        <?= $this->Form->create(null, ['url' => ['action' => 'publish']]) ?>
        <?= $this->Form->hidden('id', ['value' => isset($data['id']) ? $data['id'] : '']) ?>
        <?= $this->Form->hidden('title', ['value' => isset($data['title']) ? $data['title'] : '']) ?>
        <?= $this->Form->hidden('content', ['value' => isset($data['content']) ? $data['content'] : '']) ?>
        <?= $this->Form->hidden('status', ['value' => 'published']) ?>
        <?= $this->Form->button('公開する', ['class' => 'publishButton']) ?>
        <?= $this->Form->end() ?>
    </div>
</body>
</html>
