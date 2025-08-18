<!-- FrozenTime -->
<?php use Cake\I18n\FrozenTime; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>管理画面｜ブログ投稿前の確認画面</title>

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
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
