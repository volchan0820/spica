<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブログ一覧</title>
</head>
<body>
    <!-- ハンバーガーメニュー -->
    <?php echo $this->element('administrator_header'); ?>

    <!-- ロゴ -->
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
