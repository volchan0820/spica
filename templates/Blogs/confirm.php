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

    <title>Hair atelier spicaのこだわり | 浦添市のカフェのようなプライベート美容室</title>
    <meta name="description" content="Hair atelier spicaは、似合わせカットと弱酸性薬剤で髪に優しく、心も整う美容室を目指しています。カフェのような空間で、ゆったりとした時間をお過ごしください。">
</head>
<body>
    <!-- ハンバーガーメニュー -->
    <?php echo $this->element('administrator_header'); ?>

    <div class="top-image">
        <img src="/img/spiica-logo.png" alt="spica-logo">
    </div>

    <h2>ブログ投稿の確認</h2>

    <div>
        <h3>タイトル: <?= h($blog->title) ?></h3>
        <div>コンテンツ: <?= $blog->content ?></div>
        <div>ステータス: <?= $blog->status === 'published' ? '公開' : '下書き' ?></div>
    </div>

    <!-- 公開ボタンを表示 -->
    <?= $this->Form->create($blog, ['url' => ['action' => 'publish']]) ?>
        <?= $this->Form->hidden('title', ['value' => $blog->title]) ?>
        <?= $this->Form->hidden('content', ['value' => $blog->content]) ?>
        <?= $this->Form->hidden('status', ['value' => $blog->status]) ?>
        <?= $this->Form->button('公開する') ?>
    <?= $this->Form->end() ?>

    <!-- キャンセルボタン -->
    <?= $this->Html->link('キャンセル', ['action' => 'add'], ['class' => 'button']) ?>
</body>
</html>
