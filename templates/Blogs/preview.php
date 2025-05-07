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
    .preview-content {
        text-align: center;
        color: #363637;
        padding-top: 6%;
        padding-bottom: 2%;
        font-size: 40px;
        font-family: "Tsukimi Rounded", sans-serif;
        font-style: normal;
    }

    .preview-date {
        color: #363637;
        padding-top: 6%;
        padding-bottom: 2%;
        font-size: 20px;
        margin-left: 20%;
    }

    .preview-title {
        color: #363637;
        padding-bottom: 2%;
        font-size: 40px;
        margin-left: 20%;
    }
    
    .preview-text {
        color: #363637;
        padding-top: 2%;
        padding-bottom: 2%;
        font-size: 20px;
        margin-left: 20%;
    }


</style>
</head>
<body>
    <!-- ハンバーガーメニュー -->
    <?php echo $this->element('administrator_header'); ?>

    <!-- ロゴ -->
    <div class="top-image">
        <img src="/img/spiica-logo.png" alt="spica-logo">
    </div>

    <h1 class="preview-content">preview</h1>

    <h2 class="preview-date"><?= isset($data['created']) ? h(FrozenTime::parse($data['created'])->format('Y/m/d')) : '投稿日なし' ?></h2>
    <h2 class="preview-title"><?= isset($data['title']) ? h($data['title']) : 'タイトルなし' ?></h2>
    <h2 class="preview-text"><?= isset($data['content']) ? $data['content'] : '<p>本文なし</p>' ?></h2>

    <?= $this->Form->create(null, ['url' => ['action' => 'publish']]) ?>
    <?= $this->Form->hidden('id', ['value' => isset($data['id']) ? $data['id'] : '']) ?> <!-- ここを追加 -->
    <?= $this->Form->hidden('title', ['value' => isset($data['title']) ? $data['title'] : '']) ?>
    <?= $this->Form->hidden('content', ['value' => isset($data['content']) ? $data['content'] : '']) ?>
    <?= $this->Form->hidden('status', ['value' => 'published']) ?>
    <?= $this->Form->button('公開する') ?>
    <?= $this->Form->end() ?>

    <a href="<?= $this->Url->build(['action' => 'add']) ?>">編集に戻る</a>
</body>
</html>
