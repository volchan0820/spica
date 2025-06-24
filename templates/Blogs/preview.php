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
    <!-- 検索結果に表示しない、リンクも辿らせない -->
    <meta name="robots" content="noindex, nofollow">
    <!-- FrozenTime -->
    <?php use Cake\I18n\FrozenTime; ?>
    <title>確認画面｜ブログ編集｜spica管理画面</title>

    <style>
        h2 {
            font-family: 'Zen Maru Gothic', sans-serif;
            border-bottom: 1px solid #d3d3d3;
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

    <h1 class="admin-title">Preview</h1>

    <div class="confirm-blog-detail">
        <p class="update-date"><?= isset($data['created']) ? h(FrozenTime::parse($data['created'])->format('Y/m/d')) : '投稿日なし' ?></p>
        <h2 class="preview-title"><?= isset($data['title']) ? h($data['title']) : 'タイトルなし' ?></h2>
        <p class="preview-text"><?= isset($data['content']) ? $data['content'] : '<p>本文なし</p>' ?></p>
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
