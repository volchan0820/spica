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
	<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

    <div class="blog-detail">
        <p class="update-date"><?= $blog->modified->format('Y/m/d') ?></p>
        <h2><?= h($blog->title) ?></h2>
        <div class="blog-content">
            <?= $blog->content ?>
        </div>
    </div>
    
    <div class="blog-navigation">
        <?php if (!empty($prevBlog)): ?>
            <a href="<?= $this->Url->build(['action' => 'view', $prevBlog->id]) ?>" class="nav-arrow prev">
                <span class="arrow-left"></span> BACK
            </a>
        <?php endif; ?>
        <a href="<?= $this->Url->build(['action' => 'blog']) ?>" class="nav-center">Back to Blog List</a>
        <?php if (!empty($nextBlog)): ?>
            <a href="<?= $this->Url->build(['action' => 'view', $nextBlog->id]) ?>" class="nav-arrow next">
                NEXT <span class="arrow-right"></span>
            </a>
        <?php endif; ?>
    </div>

    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>    
</body>
</html>