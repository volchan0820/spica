<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>hair atelier spica｜<?= h($blog->title) ?>｜浦添市の美容室ブログ</title>
    <meta name="description" content="<?= h(mb_strimwidth(strip_tags($blog->content), 0, 120, '…')) ?>">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
    
    <!-- JSON-LD読み込み -->
    <?= $this->element('blog_jsonld', ['blog' => $blog]) ?>
    <style>
        h2 {
            font-family: 'Zen Maru Gothic', sans-serif;
            border-bottom: 1px solid #d3d3d3;
        }
    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <h1 class="spica-title">BLOG</h1>

    <div class="contents-wrapper">
        <div class="blog-detail">
            <p class="update-date"><?= $blog->modified->format('Y/m/d') ?></p>
            <h2><?= h($blog->title) ?></h2>
            <div class="blog-content">
                <?= $blog->content ?>
            </div>
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
    </div>

    <!-- フッター -->
    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
	<a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
	<?php echo $this->element('page_top_script'); ?>

    <!-- レスポンシブ　ページトップボタン -->
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/pagetop.png" alt="ページトップへ"></a>
    <?php echo $this->element('page_top_mobile_script'); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>
</body>
</html>