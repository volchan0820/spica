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
</style>
</head>
<body>
    <?php echo $this->element('administrator_header'); ?>

    <div class="top-image">
        <img src="/img/spiica-logo.png" alt="spica-logo">
    </div>
    <h2 class="admin-title">Published View</h2>

    <div class="blog-action-links">
        <a href="<?= $this->Url->build(['action' => 'edit', $blog->id]) ?>">編集</a>
        <?= $this->Form->postLink('削除',['action' => 'publisheDelete', $blog->id],['confirm' => '削除してもよろしいですか？']) ?>
    </div>

    <div class="blog-detail">
        <p class="update-date">更新日: <?= $blog->modified->format('Y年m月d日') ?></p>
        <h1><?= h($blog->title) ?></h1>
        <div class="blog-content"><?= $blog->content ?></div>
    </div>

    <div class="blog-navigation">
        <?php if (!empty($prevBlog)): ?>
            <a href="<?= $this->Url->build(['action' => 'blogView', $prevBlog->id]) ?>" class="nav-arrow prev">
                <span class="arrow-left"></span> BACK
            </a>
        <?php endif; ?>
        <a href="<?= $this->Url->build(['action' => 'blogList']) ?>" class="nav-center">Back to Blog List</a>
        <?php if (!empty($nextBlog)): ?>
            <a href="<?= $this->Url->build(['action' => 'blogView', $nextBlog->id]) ?>" class="nav-arrow next">
                NEXT <span class="arrow-right"></span>
            </a>
        <?php endif; ?>
    </div>
</body>
</html>
