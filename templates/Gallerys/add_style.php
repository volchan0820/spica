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

    <title>美容室spica BLOG | 浦添市の似合わせカットと弱酸性薬剤の施術事例・ヘアケア情報</title>
    <meta name="description" content="Hair atelier spicaのブログでは、似合わせカットの施術例や弱酸性薬剤による髪にやさしい施術、美容室の日常、ヘアケアのコツなどを発信しています。">
</head>
<body>
    <?php echo $this->element('administrator_header'); ?>

    <div class="top-image">
        <img src="/img/spica-logo.png" alt="spica-logo">
    </div>

    <h2 class="admin-title">Add Style</h2>

    <?= $this->Form->create(null, ['type' => 'file']) ?>

    <div>
        <?= $this->Form->control('image_file', [
            'type' => 'file',
            'label' => '画像ファイル',
            'required' => true
        ]) ?>
    </div>

    <div>
        <?= $this->Form->control('style', [
            'label' => 'スタイル',
            'type' => 'select',
            'options' => $styleOptions,
            'empty' => '選択してください',
            'required' => true
        ]) ?>
    </div>

    <div>
        <?= $this->Form->button('投稿する') ?>
    </div>

    <?= $this->Form->end() ?>
</body>
</html>
