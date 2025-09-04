<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spica | ブログ一覧</title>
    <meta name="description" content="ブログ一覧">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>

    <style>
        h3 {
            font-family: 'Zen Maru Gothic', sans-serif;
        }
    </style>
</head>
<body>    
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-imge">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">BLOG</h1>

    <div class="blog-list fade-up">
        <?php foreach ($blogs as $blog): ?>
            <?php if ($blog->status === 'published'): ?>
                <a href="<?= $this->Url->build(['action' => 'blogView', $blog->id]) ?>" class="blog-post-link">
                    <div class="blog-post">
                        <!-- サムネイル画像がある場合 -->
                        <?php
                            // contentから最初の画像を取得
                            preg_match('/<img[^>]+src="([^">]+)"/', $blog->content, $matches);
                            if (!empty($matches[1])) {
                                $firstImageUrl = $matches[1];
                            } else {
                                $firstImageUrl = null;
                            }
                        ?>                    
                        <div class="thumbnail-container">
                            <img 
                                src="<?= h($firstImageUrl ?: '/img/spica-logo-top.png') ?>" 
                                alt="サムネイル" 
                                class="thumbnail"
                            >
                        </div>
                        <div class="blog-info">
                            <h3><?= h($blog->title) ?></h3>
                            <p><?= $blog->modified->format('Y年m月d日') ?></p>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <!-- フッター -->
    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
	<a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
	<?php echo $this->element('page_top_script'); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>
</body>
</html>
