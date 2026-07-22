<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>管理画面 | 公開中ブログ一覧</title>

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
</head>

<body>
    <?php echo $this->element('administrator_header'); ?>

    <h2 class="admin-title">Published List</h2>

    <?= $this->Flash->render() ?>

    <div class="contents-wrapper">
        <div class="blog-list">
            <?php foreach ($blogs as $blog): ?>
                <?php if ($blog->status === 'published'): ?>
                    <a href="<?= $this->Url->build(['action' => 'viewPublishedAdmin', $blog->id]) ?>" class="blog-post-link">
                        <div class="blog-post">
                            <?php
                                preg_match('/<img[^>]+src="([^">]+)"/', $blog->content, $matches);
                                if (!empty($matches[1])) {
                                    $firstImageUrl = $matches[1];
                                } else {
                                    $firstImageUrl = null;
                                }
                            ?>
                            <div class="thumbnail-container">
                                <img src="<?= h($firstImageUrl ?: '/img/spica-logo-top.png') ?>" alt="サムネイル" class="thumbnail">
                            </div>
                            <div class="blog-info">
                                <!-- 末尾が綺麗に表示されないため半角スペースを追加 -->
                                <h3><span style="color: red;">（公開中）</span><?= h($blog->title) ?>&nbsp;</h3>
                                <p><?= $blog->modified->format('Y年m月d日') ?></p>
                            </div>
                        </div>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ページトップボタン -->
    <?php $pageTopFooterOffsetPc = 100; ?> <!-- ここの数値を調整してボタンの位置を合わせる(数値を大きくすると下へ、小さくすると上へ移動) -->
    <a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
    <?= $this->element('page_top_script', array('pageTopFooterOffsetPc' => $pageTopFooterOffsetPc)); ?>

    <!-- レスポンシブ　ページトップボタン -->
    <?php $pageTopFooterOffset = 0; ?> <!-- ここの数値を調整してボタンの位置を合わせる(数値を大きくすると下へ、小さくすると上へ移動) -->
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/pagetop.png" alt="ページトップへ"></a>
    <?php echo $this->element('page_top_mobile_script',array('pageTopFooterOffset' => $pageTopFooterOffset)); ?>
</body>
</html>
