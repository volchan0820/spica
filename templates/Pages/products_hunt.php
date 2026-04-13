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
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <h1 class="spica-title">+ hunt</h1>

    <div class="contents-wrapper">
        <main class="hunt-section fade-up">
            <section class="hunt-section fade-up">
                <header class="hunt-header">
                    <span class="en">MEN'S STYLING</span>        
                </header>
                <div class="hunt-image">
                    <img src="/assets/images/product/hunt/hunt-1.jpeg" alt="＋hunt メンズスタイリング剤">
                </div>
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
        <?= $this->element('back_button_products') ?>
    </div>

    <!-- フッター -->
    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
	<a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
	<?php echo $this->element('page_top_script_detail'); ?>

    <!-- レスポンシブ　ページトップボタン -->
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/pagetop.png" alt="ページトップへ"></a>
    <?php echo $this->element('page_top_mobile_script'); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>
</body>
</html>
