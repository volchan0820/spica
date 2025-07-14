<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spicaのこだわり | 浦添市のカフェのようなプライベート美容室</title>
    <meta name="description" content="Hair atelier spicaは、似合わせカットと弱酸性薬剤で髪に優しく、心も整う美容室を目指しています。カフェのような空間で、ゆったりとした時間をお過ごしください。">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="/css/responsive/responsive_sm.css">
    <link rel="stylesheet" href="/css/responsive/responsive_xs.css">

    <!-- フォントの高速化 -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- 使用フォント Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- ハンバーガーメニュー -->
    <?php echo $this->element('administrator_header'); ?>

    <div class="top-image">
        <img src="/img/spica-logo.png" alt="spica-logo">
    </div>

    <h2 class="admin-title">Draft List</h2>
    <div class="blog-list">
        <?php foreach ($blogs as $blog): ?>
            <?php if ($blog->status === 'draft'): ?>
                <a href="<?= $this->Url->build(['action' => 'draftView', $blog->id]) ?>" class="blog-post-link">
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
