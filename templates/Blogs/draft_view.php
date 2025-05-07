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
<style>
    
</style>
</head>
<body>
    <?php echo $this->element('administrator_header'); ?>

    <div class="top-image">
        <img src="/img/spiica-logo.png" alt="spica-logo">
    </div>
    <div class="blog-detail">
        <h1><?= h($blog->title) ?></h1>
        <p class="update-date">更新日: <?= $blog->modified->format('Y年m月d日') ?></p>
        <div class="blog-content">
            <?= $blog->content ?>
        </div>
        <a href="<?= $this->Url->build(['action' => 'edit', $blog->id]) ?>">編集</a> |
        <?= $this->Form->postLink(
    '削除',
    ['action' => 'delete', $blog->id],
    ['confirm' => '削除してもよろしいですか？']
) ?>

        <a href="<?= $this->Url->build(['action' => 'blogList']) ?>" class="back-link">← ブログ一覧に戻る</a>
    </div>
</body>
</html>
