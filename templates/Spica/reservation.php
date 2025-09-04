<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spica | 予約</title>
    <meta name="description" content="予約">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>

    <style>
    .reservation-info {
        text-align: center;
        font-size: 1.8rem;
        color: #555;
        margin-top: 20px;
        font-family: 'Noto Sans JP', sans-serif;
    }
    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-imge">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title">RESERVATION</h1>

    <div class="reservation-info fade-up">
        <p>Hair atelier spica</p>
        <br>
        <p>〒901-2111 沖縄県浦添市経塚608番地1 EST CONPLEX 2nd BLD 6-A</p>
        <br>
        <p>OPEN: 10:00〜18:00</p>
        <p>CLOSE: 土曜日・日曜日</p>
    </div>

    <div class="line-imge">
        <img src="/img/line.png" alt="友だち追加">
    </div>

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
