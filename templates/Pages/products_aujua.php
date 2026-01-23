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
    /* =====================================================
    AUJUA PAGE ONLY
    ===================================================== */
    .aujua-section {
        max-width: 1200px;
        margin: 0 auto 100px;
        padding: 0 20px;
    }
    .aujua-block {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        margin-top: 200px;
    }
    .aujua-block.reverse {
        flex-direction: row-reverse;
    }
    .aujua-text {
        flex: 1;
        padding-left: 20px;
        margin-top: -120px;
        font-family: 'Zen Old Mincho', serif;
    }
    .aujua-text h2 {
        font-size: 4.8rem;
        letter-spacing: 8px;
        margin-bottom: 60px;
        font-family: 'Allura', cursive;
    }
    .aujua-text p {
        font-size: 2rem;
    }
    .aujua-image {
        flex: 1;
        text-align: center;
    }
    .aujua-image img {
        max-width: 100%;
        height: auto;
        display: block;
    }
    .aujua-intro {
        margin-top: -80px;
    }
    .intro-en {
        display: block;
        font-size: 1.2rem;
        letter-spacing: 4px;
        color: #aaa;
        margin-bottom: 24px;
    }
    .intro-main {
        font-size: 2.2rem;
        line-height: 1.9;
        margin-bottom: 32px;
    }
    .intro-sub {
        font-size: 1.6rem;
        line-height: 2;
        color: #555;
    }
    .aujua-order {
        max-width: 900px;
        margin: 160px auto;
        font-family: 'Zen Old Mincho', serif;
    }
    .aujua-order-header {
        text-align: center;
        margin-bottom: 80px;
    }
    .aujua-order-header .en {
        font-size: 1.4rem;
        letter-spacing: 4px;
        color: #999;
        margin-bottom: 20px;
    }
    .aujua-order-header h2 {
        font-size: 3.2rem;
        font-family: 'Allura', cursive;
    }
    .aujua-order-lead {
        text-align: center;
        margin-bottom: 100px;
    }
    .aujua-order-lead p {
        font-size: 1.8rem;
        line-height: 2;
    }
    .aujua-spica-point {
        margin-top: 160px;
    }
    .aujua-order-problems h3,
    .aujua-lineup h3,
    .aujua-spica-point h3 {
        text-align: center;
        font-size: 2.2rem;
        margin-bottom: 40px;
    }
    .aujua-order-problems ul,
    .aujua-spica-point ul {
        max-width: 600px;
        margin: 0 auto 120px;
        list-style: none;
        padding: 0;
    }
    .aujua-order-problems li,
    .aujua-spica-point li {
        padding: 12px 0;
        border-bottom: 1px solid #e5e5e5;
        font-size: 1.6rem;
    }
    .lineup-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
    }
    .lineup-card {
        padding: 40px 30px;
        border: 1px solid #ddd;
        text-align: center;
    }
    .lineup-card .category {
        font-size: 1.2rem;
        letter-spacing: 3px;
        color: #aaa;
    }
    .lineup-card h4 {
        font-size: 1.8rem;
        margin: 20px 0;
    }
    .lineup-card p {
        font-size: 1.5rem;
        line-height: 1.8;
    }
    .lineup-card .example {
        display: block;
        margin-top: 24px;
        font-size: 1.3rem;
        color: #999;
    }
    .aujua-closing {
        text-align: center;
        font-size: 1.8rem;
        margin-top: 120px;
        letter-spacing: 2px;
    }

    /* =====================================================
    Responsive
    ===================================================== */
    @media (max-width: 768px) {

        .aujua-block {
            flex-direction: column;
            margin-top: 120px;
        }

        .aujua-text {
            margin-top: 0;
            padding-left: 0;
            text-align: center;
        }

        .intro-main {
            font-size: 2rem;
        }

        .lineup-grid {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">AUJUA</h1>

    <div class="contents-wrapper">
        <main class="aujua-section">
            <!-- AUJUA INTRO 01 -->
            <section class="aujua-block fade-up">
                <div class="aujua-text aujua-intro">
                    <span class="intro-en">CUSTOMIZED FOR YOUR LIFE</span>
                    <p class="intro-main">
                        季節、年齢、ライフスタイル。<br>
                        髪は、毎日少しずつ変化しています。
                    </p>
                    <p class="intro-sub">
                        花粉や湿気、紫外線、乾燥、<br>
                        ドライヤーやアイロンの使い方まで。<br>
                        <strong>沖縄の気候に合わせたオージュア正規取扱サロンとして</strong><br>
                        今のあなたに必要なケアを選びます。
                    </p>
                </div>
                <div class="aujua-image">
                    <img src="/img/concept/concept_privatesalon.jpg" alt="hair atelier spica の店内">
                </div>
            </section>
            <!-- AUJUA INTRO 02 -->
            <section class="aujua-block reverse fade-up" style="margin-bottom: 160px;">
                <div class="aujua-text aujua-intro">
                    <span class="intro-en">MADE FOR JAPANESE HAIR</span>
                    <p class="intro-main">
                        日本の気候と、<br>
                        地域ごとの環境を見つめて。
                    </p>
                    <p class="intro-sub">
                        「同じ日本でも、髪の悩みは違う」。<br>
                        湿度が高く、紫外線量も多い沖縄の環境にこそ、<br>
                        オージュアは心地よくフィットします。
                    </p>
                </div>
                <div class="aujua-image">
                    <img src="/img/concept/concept_counseling.jpg" alt="丁寧なカウンセリングの様子 hair atelier spica">
                </div>
            </section>
            <!-- AUJUA ORDER MADE CARE -->
            <section class="aujua-order fade-up">
                <header class="aujua-order-header">
                    <span class="en">ORDER MADE CARE</span>
                    <h2>オージュア最大の特徴は“オーダーメイドケア”。</h2>
                </header>
                <div class="aujua-order-lead">
                    <p>
                        髪は、季節・年齢・生活習慣・施術履歴によって状態が変わります。<br>
                        オージュアは、その<strong>「今の髪」</strong>に必要な成分だけを選び、<br>
                        あなただけのケアを組み立てるヘアケアプログラムです。
                    </p>
                </div>
                <div class="aujua-order-problems">
                    <h3>こんなお悩みに</h3>
                    <ul>
                        <li>ブリーチ・カラー・パーマによるごわつき、パサつき</li>
                        <li>年齢とともに細くなり、まとまりにくくなった髪</li>
                        <li>湿気で広がる / 乾燥で硬くなる</li>
                        <li>自分に合うシャンプーが分からない</li>
                    </ul>
                </div>
                <div class="aujua-lineup">
                    <h3>悩み別ラインナップ</h3>
                    <div class="lineup-grid">
                        <div class="lineup-card">
                            <span class="category">HAIR TYPE</span>
                            <h4>髪質そのものの悩み</h4>
                            <p>
                                クセ・うねり・ボリューム低下など<br>
                                年齢変化による髪質の変化に。
                            </p>
                            <span class="example">EQUIAL / TIME SURGE</span>
                        </div>
                        <div class="lineup-card">
                            <span class="category">DAMAGE</span>
                            <h4>ダメージによる悩み</h4>
                            <p>
                                カラーやパーマ、熱ダメージで<br>
                                乾燥・パサつきが気になる方へ。
                            </p>
                            <span class="example">INMMETRY / QUENCH</span>
                        </div>
                        <div class="lineup-card">
                            <span class="category">SEASON</span>
                            <h4>季節による悩み</h4>
                            <p>
                                梅雨の広がりや紫外線による<br>
                                カラー退色を防ぎたい方へ。
                            </p>
                            <span class="example">AQUAVEER / DAYLIGHT</span>
                        </div>
                        <div class="lineup-card">
                            <span class="category">SCALP</span>
                            <h4>頭皮の悩み</h4>
                            <p>
                                乾燥・かゆみ・皮脂バランスの乱れ、<br>
                                将来の髪のための頭皮ケア。
                            </p>
                            <span class="example">AGING SPA / MOIST CALM</span>
                        </div>
                    </div>
                </div>
                <div class="aujua-spica-point">
                    <h3>spicaのこだわり</h3>
                    <ul>
                        <li>丁寧なカウンセリングで理想の質感を共有</li>
                        <li>髪の内部状態を見極め、必要なラインを選定</li>
                        <li>ホームケアも無理なく続けられる提案</li>
                        <li>商品の購入のみのご来店も可能</li>
                    </ul>
                </div>
                <p class="aujua-closing">
                    あなたの髪に、今いちばん必要なケアを。
                </p>
            </section>
        </main>
        <!-- BACKボタン -->
        <?= $this->element('back_button_index') ?>
    </div><!-- contents-wrapper -->

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