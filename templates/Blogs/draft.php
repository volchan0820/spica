<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->script('//code.jquery.com/jquery-3.6.0.min.js') ?>
    <?= $this->Html->script('script.js') ?>

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
    <?php echo $this->element('administrator_header'); ?>

    <div class="top-image">
        <img src="/img/spiica-logo.png" alt="spica-logo">
    </div>

    <h2 class="admin-title">Draft List</h2>
    <div class="blog-list">
        <?php foreach ($blogs as $blog): ?>
            <!-- 下書きのブログ記事を表示 -->
            <?php if ($blog->status === 'draft'): ?>
                <a href="<?= $this->Url->build(['action' => 'draftView', $blog->id]) ?>" class="blog-post-link">
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
                        <?php if ($firstImageUrl): ?>
                            <img src="<?= h($firstImageUrl) ?>" alt="サムネイル" class="thumbnail">
                        <?php endif; ?>
                    </div>

                    <div class="blog-info">
                        <h3>
                            <!-- 記事のタイトル -->
                            <?= h($blog->title) ?> <span style="color: red;">（下書き）</span>
                        </h3>
                        <!-- 日付を表示（西暦-月-日） -->
                        <p><?= $blog->created->format('Y年m月d日') ?></p>
                        <p>
                            <a href="<?= $this->Url->build(['action' => 'edit', $blog->id]) ?>">編集</a> |
                            <a href="<?= $this->Url->build(['action' => 'delete', $blog->id]) ?>" onclick="return confirm('削除してもよろしいですか？');">削除</a>
                        </p>
                    </div>
                </div>
            </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
