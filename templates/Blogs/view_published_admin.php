<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>管理画面 | 公開済みブログ</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="/css/responsive/responsive_sm.css">
    <link rel="stylesheet" href="/css/responsive/responsive_xs.css">
    <link rel="stylesheet" href="/css/responsive/responsive_md.css">
    <link rel="stylesheet" href="/css/responsive/responsive_lg.css">

    <!-- フォントの高速化 -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- 使用フォント Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php echo $this->element('administrator_header'); ?>

    <h2 class="admin-title">Published View</h2>

    <div class="blog-action-links">
        <a href="<?= $this->Url->build(['action' => 'editAdmin', $blog->id]) ?>">編集</a>
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
