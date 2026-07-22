<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>浦添市経塚のhair atelier spica | 予約</title>
    <meta name="description" content="沖縄県浦添市経塚のhair atelier spicaの予約ページ。オンラインで簡単にご希望の日時を予約できます。">

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
        <img src="/assets/images/reservation/reservation-main.jpeg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">RESERVATION</h1>

    <div class="reservation-info fade-up">
        <div class="contents-wrapper">
            <div class="hair-atelier-spica-title-img">
                <img src="/img/logo/hair_atelier_spica.png" alt="hair atelier spica title" oncontextmenu="return false;" ondragstart="return false;" style="pointer-events: none;">
            </div>
            <section class="store-address">
                <address>
                    <br>
                    <p>〒901-2111 沖縄県浦添市経塚608番地1<br>EST CONPLEX 2nd BLD 6-A</p>
                    <br>
                    <p>OPEN: 10:00〜18:00</p>
                    <p>CLOSE: 土曜日・日曜日</p>
                </address>
            </section>
            <section class="reservation-links">
                <div class="line-buttons">
                    <!-- LINE公式ボタン -->
                    <a href="https://lin.ee/W4Ibxfb" target="_blank" rel="noopener"><img src="/assets/images/reservation/line.png" alt="友だち追加"></a>
                    <!-- ホットペッパービューティーボタン -->
                    <a href="https://beauty.hotpepper.jp/slnH000788665/" target="_blank" rel="noopener"><img src="/img/buttons/Beauty_Logo_270_90.gif" alt="HOT PEPPER Beauty"></a>
                </div>
                <div class="reservation-attention">
                    <span class="reservation-attention-note">※ご予約前に</span>
                    <a href="/pages/cancel_policy/" class="attention-link">こちら</a>
                    <span class="reservation-attention-note">の注意事項をご確認ください。</span>
                </div>
                <div class="contact-info">
                    <p>お問い合わせは、公式LINEまたは下記メールアドレスよりお気軽にご連絡ください。<br>
                    <a href="mailto:info@atelier-spica.jp">info@atelier-spica.jp</a></p><br>
                    一人ひとりのお客様との時間を大切にするため、お電話でのお問い合わせはお受けしておりません。<br>
                    ご不便をおかけいたしますが、ご理解のほどよろしくお願いいたします。                    
                </div>
            </section>
            <!-- BACKボタン -->
            <?= $this->element('back_button', ['url' => '/spica/index/']) ?>
        </div>
    </div>

    <!-- フッター -->
    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
    <?php $pageTopFooterOffsetPc = 100; ?>
    <a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
    <?= $this->element('page_top_script', array('pageTopFooterOffsetPc' => $pageTopFooterOffsetPc)); ?>

    <!-- レスポンシブ　ページトップボタン -->
    <?php $pageTopFooterOffset = 0; ?>
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/buttons/pagetop.png" alt="ページトップへ"></a>
    <?php echo $this->element('page_top_mobile_script',array('pageTopFooterOffset' => $pageTopFooterOffset)); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>
</body>
</html>