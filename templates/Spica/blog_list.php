<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>hair atelier spica｜ブログ一覧｜浦添市の美容室</title>
    <meta name="description" content="浦添市経塚のhair atelier spicaのブログ一覧ページ。サロンの日常やスタイル紹介、ヘアケア情報などを随時更新しています。">

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

    <div class="spica-page-img">
        <img src="/assets/images/blog/blog-main.jpeg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">BLOG</h1>

    <div class="contents-wrapper">
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
        <!-- BACKボタン -->
        <?= $this->element('back_button_index') ?>
    </div>

    <!-- フッター -->
    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
    <?php $pageTopFooterOffsetPc = 100; ?> <!-- ここの数値を調整してボタンの位置を合わせる(数値を大きくすると下へ、小さくすると上へ移動) -->
    <a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
    <?= $this->element('page_top_script', array('pageTopFooterOffsetPc' => $pageTopFooterOffsetPc)); ?>

    <!-- レスポンシブ　ページトップボタン -->
    <?php $pageTopFooterOffset = 0; ?> <!-- ここの数値を調整してボタンの位置を合わせる(大きくなるほど上、小さくなるほど下) -->
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/pagetop.png" alt="ページトップへ"></a>
    <?php echo $this->element('page_top_mobile_script',array('pageTopFooterOffset' => $pageTopFooterOffset)); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>
</body>
</html>
