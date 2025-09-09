<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spica | ACCESS</title>
    <meta name="description" content="ACCESS">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
</head>

<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-imge">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">ACCESS</h1>

    <div class="access-info fade-up">
        <p>Hair atelier spica</p>
        <br>
        <p>〒901-2111 沖縄県浦添市経塚608番地1 EST CONPLEX 2nd BLD 6-A</p>
        <p>6-A, EST COMPLEX 2nd BLD, 608-1 Kyozuka, Urasoe-shi, Okinawa 901-2111, Japan</p>
        <br>
        <p>OPEN: 10:00〜19:00</p>
        <p>CLOSE: 土曜日・日曜日</p>
    </div>

    <div class="access-map fade-up">
        <iframe
        src="https://maps.google.com/maps?q=26.234143,127.722426&z=18&output=embed"
        width="100%" height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <!-- フッター -->
    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

	<!-- ページトップボタン -->
	<a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
	<?php echo $this->element('page_top_script'); ?>

    <!-- レスポンシブ　ページトップボタン -->
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/pagetop.png" alt="ページトップへ"></a>
    <?php echo $this->element('page_top_mobile_script'); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>
</body>
</html>