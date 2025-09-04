<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spica | スタッフ</title>
    <meta name="description" content="スタッフ">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>

    <!-- <style>
    .spica-title {
        letter-spacing: 8px;
        position: relative;
        display: inline-block;
        background: rgb(90, 90, 90);      /* 背景を黒に */
        color: #fff;             /* 文字色を白に */
        font-size: 40px;
        font-family: "Tsukimi Rounded", sans-serif;
        font-style: normal;
        padding: 20px 60px;      /* 四角に見える余白 */
        margin: -60px 0 40px;    /* 画像と少し重なるように上方向にずらす */
        margin-left: 20px;
        z-index: 2;              /* 背景画像より前に出す */
    }
    </style> -->
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-imge">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">STAFF</h1>

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
