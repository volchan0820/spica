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

    <title>美容室spica BLOG | 浦添市の似合わせカットと弱酸性薬剤の施術事例・ヘアケア情報</title>
    <meta name="description" content="Hair atelier spicaのブログでは、似合わせカットの施術例や弱酸性薬剤による髪にやさしい施術、美容室の日常、ヘアケアのコツなどを発信しています。">


</head>
<body>    
    <?php echo $this->element('spica_header'); ?>
    <div class="spica-page-imge">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>
    <h1 class="spica-title">BLOG</h1>
    <div class="blog-list">
        <?php foreach ($blogs as $blog): ?>
            <?php if ($blog->status === 'published'): ?>
                <a href="<?= $this->Url->build(['action' => 'view', $blog->id]) ?>" class="blog-post-link">
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
                            src="<?= h($firstImageUrl ?: '/img/spiica-logo-top.png') ?>" 
                            alt="サムネイル" 
                            class="thumbnail"
                        >
                    </div>
                    <div class="blog-info">
                        <h3><?= h($blog->title) ?></h3>
                        <p><?= $blog->modified->format('Y年m月d日') ?></p>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
