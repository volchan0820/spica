<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>管理画面｜下書きブログ一覧</title>

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
</head>
<body>
    <!-- ハンバーガーメニュー -->
    <?php echo $this->element('administrator_header'); ?>

    <h2 class="admin-title">Draft List</h2>
    <div class="blog-list">
        <?php foreach ($blogs as $blog): ?>
            <?php if ($blog->status === 'draft'): ?>
                <a href="<?= $this->Url->build(['action' => 'viewDraftAdmin', $blog->id]) ?>" class="blog-post-link">
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
                            <h3><span style="color: blue;">（下書き）</span><?= h($blog->title) ?>&nbsp;</h3>
                            <p><?= $blog->created->format('Y年m月d日') ?></p>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
