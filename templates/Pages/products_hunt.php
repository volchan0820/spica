<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spica | Concept | 浦添市経塚のカット技術と薬剤へのこだわり</title>
    <meta name="description" content="浦添市経塚のhair atelier spicaのコンセプトページ。再現性の高いカット技術や髪と頭皮に優しい弱酸性薬剤へのこだわりで、美しさと扱いやすさを両立。細部まで丁寧に施術することを大切にしています。">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
    <style>
 /* =========================
   +hunt styling
========================= */

.hunt-section {
    max-width: 900px;
    margin: 0 auto 200px;
    font-family: 'Zen Old Mincho', serif;
}

.hunt-header {
    text-align: center;
    margin-bottom: 120px;
}

.hunt-header .en {
    display: block;
    font-size: 1.2rem;
    letter-spacing: 5px;
    color: #999;
    margin-bottom: 20px;
}

.hunt-header h2 {
    font-size: 3.6rem;
    letter-spacing: 2px;
    font-family: 'Allura', cursive;
}

/* image */
.hunt-image {
    text-align: center;
    margin-bottom: 120px;
}

.hunt-image img {
    width: 100%;
    max-width: 420px;
    box-shadow: 0 25px 50px rgba(0,0,0,0.12);
}

/* text */
.hunt-lead {
    text-align: center;
    margin-bottom: 120px;
}

.hunt-lead p {
    font-size: 1.8rem;
    line-height: 2;
    color: #444;
}

/* feature */
.hunt-feature {
    max-width: 600px;
    margin: 0 auto 120px;
}

.hunt-feature p {
    font-size: 1.6rem;
    line-height: 2;
    margin-bottom: 32px;
    text-align: center;
}

/* recommend */
.hunt-recommend {
    max-width: 600px;
    margin: 0 auto 140px;
    list-style: none;
    padding: 0;
}

.hunt-recommend li {
    font-size: 1.6rem;
    padding: 14px 0;
    border-bottom: 1px solid #e5e5e5;
    text-align: center;
}

/* closing */
.hunt-closing {
    text-align: center;
    font-size: 1.9rem;
    letter-spacing: 2px;
    margin-top: 120px;
}

/* smartphone */
@media (max-width: 768px) {
    .hunt-header h2 {
        font-size: 2.8rem;
    }
}


    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">+ hunt</h1>

    <div class="contents-wrapper">
        <main class="aujua-section">
<!-- AUJUA INTRO 01 -->
<section class="hunt-section fade-up">

    <header class="hunt-header">
        <span class="en">MEN'S STYLING</span>
        
    </header>

    <!-- image -->
    <div class="hunt-image">
        <img src="/img/product/product_hunt.jpg" alt="＋hunt メンズスタイリング剤">
    </div>

    <!-- lead -->
    <div class="hunt-lead">
        <p>
            香水のような香りと、<br>
            作り込みすぎないラフな質感。
        </p>
        <p>
            ドライな束感、ウェットなタイト、<br>
            無造作な動きまで、<br>
            ONでもOFFでも自然にハマるスタイリング。
        </p>
    </div>

    <!-- feature -->
    <div class="hunt-feature">
        <p>
            湿気や汗で崩れやすい日でも使いやすく、<br>
            再セットも簡単。
        </p>
        <p>
            手直ししてもベタつかず、<br>
            ラフさを残したままキープできます。
        </p>
    </div>

    <!-- recommend -->
    <h3 style="text-align:center; font-size:2.2rem; margin-bottom:40px;">
        こんな方におすすめ
    </h3>

    <ul class="hunt-recommend">
        <li>ビジネスも休日も両方使えるスタイリングを探している</li>
        <li>自然な束感・メリハリのあるシルエットが好き</li>
        <li>香りにもこだわりたい</li>
    </ul>

    <p class="hunt-closing">
        “雰囲気のある髪”を求める男性に。<br>
        spicaおすすめのスタイリングアイテム。
    </p>

</section>


        </main>
        <!-- BACKボタン -->
        <?= $this->element('back_button_index') ?>
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
