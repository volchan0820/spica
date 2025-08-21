<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>管理画面 | 公開中ブログ記事</title>

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
</head>

<body>
    <?php echo $this->element('administrator_header'); ?>

    <h2 class="admin-title">Published View</h2>

    <div class="blog-action-links">
        <a href="<?= $this->Url->build(['action' => 'editAdmin', $blog->id]) ?>">編集</a> |
        <?= $this->Form->postLink('削除',['action' => 'deletePublished', $blog->id],['confirm' => '削除してもよろしいですか？']) ?>
    </div>

    <div class="blog-detail">
        <p class="update-date"><?= $blog->modified->format('Y/m/d') ?></p>
        <h1><?= h($blog->title) ?></h1>
        <div class="blog-content"><?= $blog->content ?></div>
    </div>

    <div class="blog-navigation">
        <?php if (!empty($prevBlog)): ?>
            <a href="<?= $this->Url->build(['action' => 'viewPublishedAdmin', $prevBlog->id]) ?>" class="nav-arrow prev">
                <span class="arrow-left"></span> BACK
            </a>
        <?php endif; ?>
        <a href="<?= $this->Url->build(['action' => 'listPublishedAdmin']) ?>" class="nav-center">Back to Blog List</a>
        <?php if (!empty($nextBlog)): ?>
            <a href="<?= $this->Url->build(['action' => 'viewPublishedAdmin', $nextBlog->id]) ?>" class="nav-arrow next">
                NEXT <span class="arrow-right"></span>
            </a>
        <?php endif; ?>
    </div>
</body>
</html>
