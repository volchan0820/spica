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
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">RESERVATION</h1>

  
    <div class="reservation-info fade-up">
        <div class="contents-wrapper">
            <div class="hair-atelier-spica-title-img">
                <img src="/img/hair_atelier_spica.png" alt="hair atelier spica title" oncontextmenu="return false;" ondragstart="return false;" style="pointer-events: none;">
            </div>

            <!-- <p style="font-size: 30px;">Hair atelier spica</p> -->
            <section class="store-address">
                <address>
                    <br>
                    <p>〒901-2111 沖縄県浦添市経塚608番地1 EST CONPLEX 2nd BLD 6-A</p>
                    <br>
                    <p>OPEN: 10:00〜19:00</p>
                    <p>CLOSE: 土曜日・日曜日</p>
                </address>
            </section>
            <section class="reservation-links">
                <div class="line-buttons">
                    <!-- LINE公式ボタン -->
                    <a href="https://lin.ee/xxxxxxx" target="_blank" rel="noopener"><img src="/img/line.png" alt="友だち追加"></a>
                    <!-- ホットペッパービューティーボタン -->
                    <a href="https://beauty.hotpepper.jp/slnH000000000/" target="_blank" rel="noopener"><img src="/img/Beauty_Logo_270_90.gif" alt="HOT PEPPER Beauty"></a>
                </div>
                <div class="reservation-attention">
                    <span class="reservation-attention-note">※ご予約前に</span>
                    <a href="/pages/cancel_policy/" class="attention-link">こちら</a>
                    <span class="reservation-attention-note">の注意事項をご確認ください。</span>
                </div>
                <div class="contact-info">
                    <p>お問い合わせは公式LINEまたは下記のメールアドレスまでお願いいたします。<br>
                    ※お電話での対応は行っておりません。<br>
                    <a href="mailto:xxxxxx@xx.co.jp">xxxxxx@xx.co.jp</a></p>
                </div>
            </section>
        </div>
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