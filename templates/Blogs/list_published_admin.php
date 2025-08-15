<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>管理画面 | ブログ一覧</title>

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

    <h2 class="admin-title">Published List</h2>

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
</body>
</html>
