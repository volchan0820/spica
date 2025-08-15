<!-- FrozenTime -->
<?php use Cake\I18n\FrozenTime; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spicaのこだわり | 浦添市のカフェのようなプライベート美容室</title>
    <meta name="description" content="Hair atelier spicaは、似合わせカットと弱酸性薬剤で髪に優しく、心も整う美容室を目指しています。カフェのような空間で、ゆったりとした時間をお過ごしください。">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="/css/responsive/responsive_sm.css">
    <link rel="stylesheet" href="/css/responsive/responsive_xs.css">

    <!-- フォントの高速化 -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- 使用フォント Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
