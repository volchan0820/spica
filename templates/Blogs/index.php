<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>下書き一覧</title>
</head>

<body>
    <h2>下書き一覧</h2>
    <div class="blog-list">
        <?php foreach ($blogs as $blog): ?>
            <!-- 下書きのブログ記事を表示 -->
            <?php if ($blog->status === 'draft'): ?>
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
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
