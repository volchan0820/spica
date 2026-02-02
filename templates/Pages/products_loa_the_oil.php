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
            LOA THE OIL – PAGE ONLY
        ===================================================== */
        .loa-section {
            max-width: 1000px;
            margin: 0 auto 180px;
            font-family: 'Zen Old Mincho', serif;
        }
        .loa-page-en {
            display: block;
            text-align: center;
            font-size: 1.4rem;
            letter-spacing: 4px;
            color: #aaa;
            margin-bottom: 100px;
        }
        .loa-intro {
            text-align: center;
            margin-bottom: 120px;
        }
        .loa-intro p {
            font-size: 1.8rem;
            line-height: 2;
            color: #444;
        }
        .loa-block {
            display: flex;
            align-items: center;
            gap: 80px;
            margin-bottom: 140px;
        }
        .loa-block.reverse {
            flex-direction: row-reverse;
        }
        .loa-text h3 {
            font-size: 2.4rem;
            margin-bottom: 24px;
        }
        .loa-text p {
            font-size: 1.6rem;
            line-height: 2;
            color: #555;
        }
        .loa-image {
            text-align: center;
        }
        .loa-image img {
            width: 100%;
            max-width: 420px;
            height: auto;
        }
        .loa-closing {
            text-align: center;
            font-size: 1.8rem;
            letter-spacing: 2px;
            margin-top: 120px;
        }
        .loa-lifestyle {
            max-width: 720px;
            margin: 0 auto 140px;
            text-align: center;
        }
        .loa-lifestyle p {
            font-size: 1.6rem;
            line-height: 2.2;
            color: #555;
            margin-bottom: 32px;
        }
        .loa-lifestyle-lead {
            font-size: 2.2rem;
            letter-spacing: 2px;
            margin-bottom: 48px;
            color: #333;
        }
        .loa-lifestyle-note {
            margin-top: 56px;
            font-size: 1.5rem;
            color: #777;
        }
        .loa-ritual {
            margin: 160px auto;
            text-align: center;
        }
        .loa-ritual-title {
            font-size: 2.2rem;
            letter-spacing: 2px;
            margin-bottom: 80px;
            line-height: 1.6;
        }
        .loa-ritual-title span {
            display: block;
            margin-top: 12px;
            font-size: 1.3rem;
            letter-spacing: 4px;
            color: #aaa;
        }
        .loa-ritual-flow {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
        }
        .loa-ritual-step {
            text-align: center;
            min-width: 200px;
        }
        .loa-ritual-step .num {
            display: block;
            font-size: 1.3rem;
            letter-spacing: 2px;
            color: #aaa;
            margin-bottom: 16px;
        }
        .loa-ritual-step h4 {
            font-size: 1.6rem;
            letter-spacing: 1px;
            margin-bottom: 12px;
        }
        .loa-ritual-step p {
            font-size: 1.4rem;
            line-height: 1.9;
            color: #666;
        }
        .loa-ritual-line {
            width: 60px;
            height: 1px;
            background: #ddd;
        }

        /* =====================================================
            Responsive
        ===================================================== */
        @media (max-width: 768px) {
            .loa-ritual-flow {
                flex-direction: column;
                gap: 30px;
            }

            .loa-ritual-line {
                width: 1px;
                height: 40px;
            }
            .loa-block,
            .loa-block.reverse {
                flex-direction: column;
                gap: 40px;
                text-align: center;
            }

            .loa-intro p {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <?= $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">LOA THE OIL</h1>

    <div class="contents-wrapper">
        <main class="loa-section fade-up">
            <span class="en loa-page-en">PERFUME OIL</span>
            <div class="loa-intro">
                <p>
                    ヘア・ボディ・ハンド・フレグランス。<br>
                    全身に使える、天然由来のパフュームオイル。
                </p>
                <p>
                    香水よりもやさしく、柔らかく香り、<br>
                    動くたびにふわっと香りが続く、<br>
                    <strong>ひとつは持っておきたい大人のオイルアイテム</strong>です。
                </p>
            </div>
            <div class="loa-block">
                <div class="loa-text">
                    <h3>香りも、質感も、ちょうどいい。</h3>
                    <p>
                        オイルは重すぎず、毛先にしっとり感と上品なツヤを。<br>
                        髪につけると、ふとした動きで香りが広がり、<br>
                        「なんかいい香り」と思わず振り返ってしまうような印象に。
                    </p>
                    <p>
                        髪につけたあと、そのままお肌にも使えるので、<br>
                        フレグランスオイルとしても活躍します。
                    </p>
                </div>
                <div class="loa-image">
                    <img src="/img/concept/concept_counseling.jpg" alt="LOA THE OIL 商品イメージ">
                </div>
            </div>
            <div class="loa-block reverse">
                <div class="loa-text">
                    <h3>オイルだけじゃない、LOAシリーズ。</h3>
                    <p>
                        種類はオイルだけでなく、ミルクやハンドソープも。<br>
                        香りを楽しみながら、毎日のケアに自然に取り入れられます。
                    </p>
                </div>
                <div class="loa-image">
                    <img src="/img/concept/concept_counseling.jpg" alt="LOA THE OIL ラインナップ">
                </div>
            </div>
            <section class="loa-ritual">
                <h3 class="loa-ritual-title">
                    おすすめの使い方
                    <span>- Daily Ritual -</span>
                </h3>
                <div class="loa-ritual-flow">
                    <div class="loa-ritual-step">
                        <span class="num">01</span>
                        <div class="text">
                            <h4>After Towel Dry</h4>
                            <p>
                                タオルドライ後、<br>
                                仕上げに毛先へ。
                            </p>
                        </div>
                    </div>
                    <span class="loa-ritual-line"></span>
                    <div class="loa-ritual-step">
                        <span class="num">02</span>
                        <div class="text">
                            <h4>As a Fragrance</h4>
                            <p>
                                手首や首元に、<br>
                                香水代わりとして。
                            </p>
                        </div>
                    </div>
                    <span class="loa-ritual-line"></span>
                    <div class="loa-ritual-step">
                        <span class="num">03</span>
                        <div class="text">
                            <h4>Hand Care</h4>
                            <p>
                                指先の乾燥を防ぐ、<br>
                                日常のケアに。
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="loa-lifestyle">
                <p class="loa-lifestyle-lead">
                    香りを、<br>
                    さりげなく纏うという選択。
                </p>

                <p>
                    強く主張しないのに、ふとした瞬間に印象に残る。<br>
                    近づいたときだけ、やさしく感じる香り。
                </p>

                <p>
                    忙しい日常の中でも、<br>
                    髪に触れるたび、手を洗うたび、<br>
                    自分の感覚が整っていくような時間を。
                </p>

                <p class="loa-lifestyle-note">
                    LOA THE OIL は、<br>
                    香りも質感も「ちょうどいい」を大切にした、<br>
                    大人のためのフレグランスケアです。
                </p>
            </section>
            <p class="loa-closing">
                ギフトとしても人気の、贅沢で大人なオイルアイテム。<br>
                spicaのお手洗いのハンドソープも、このLOAシリーズを使用しています。<br><br>
                ぜひ、香りや使用感をお試しください。
            </p>
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
