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
            ReKERA TREATMENT PAGE ONLY
        ===================================================== */
        .rekera-section {
            max-width: 1000px;
            margin: 0 auto 200px;
            font-family: 'Zen Old Mincho', serif;
        }
        .rekera-header {
            text-align: center;
            margin-bottom: 100px;
        }
        .rekera-header .en {
            display: block;
            font-size: 1.4rem;
            letter-spacing: 4px;
            color: #aaa;
            margin-bottom: 24px;
        }
        .rekera-header h2 {
            font-size: 3.2rem;
            line-height: 1.6;
            font-family: 'Allura', cursive;
        }
        .rekera-lead {
            text-align: center;
            margin-bottom: 120px;
        }
        .rekera-lead p {
            font-size: 1.8rem;
            line-height: 2;
            color: #444;
        }
        .rekera-block {
            display: flex;
            align-items: center;
            gap: 80px;
            margin-bottom: 140px;
        }
        .rekera-text h3 {
            font-size: 2.4rem;
            margin-bottom: 24px;
        }
        .rekera-text p {
            font-size: 1.6rem;
            line-height: 2;
            color: #555;
        }
        .rekera-image img {
            width: 100%;
            max-width: 420px;
            height: auto;
            object-fit: cover;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }
        .rekera-list {
            max-width: 700px;
            margin: 0 auto 120px;
            list-style: none;
            padding: 0;
        }
        .rekera-list li {
            padding: 14px 0;
            border-bottom: 1px solid #e5e5e5;
            font-size: 1.6rem;
        }
        .rekera-point {
            max-width: 700px;
            margin: 0 auto 140px;
        }
        .rekera-point li {
            font-size: 1.6rem;
            line-height: 2;
            margin-bottom: 16px;
        }
        .rekera-closing {
            text-align: center;
            font-size: 1.8rem;
            letter-spacing: 2px;
            margin-top: 120px;
        }

        /* =====================================================
            Responsive
        ===================================================== */
        @media (max-width: 768px) {
            .rekera-block {
                flex-direction: column;
                gap: 40px;
                text-align: center;
            }

            .rekera-header h2 {
                font-size: 2.6rem;
            }
        }
    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">ReKERA TREATMENT</h1>

    <div class="contents-wrapper">
        <main class="rekera-section">
            <section class="rekera-section fade-up">
                <header class="rekera-header">
                    <span class="en">KERATIN REPAIR</span>
                </header>
                <div class="rekera-lead">
                    <p>
                        「髪を治す」ことを目的に作られた、<br>
                        ケラチン補修トリートメント。
                    </p>
                    <p>
                        ダメージを一時的に隠すのではなく、<br>
                        <strong>髪の芯そのものを整える</strong>という考え方から生まれました。
                    </p>
                </div>
                <div class="rekera-block">
                    <div class="rekera-text">
                        <h3>熱ダメージを受けた髪へ。</h3>
                        <p>
                            縮毛矯正、デジタルパーマ、<br>
                            毎日のコテやアイロンによる熱ダメージ。
                        </p>
                        <p>
                            ReKERAは、失われたケラチンを補いながら、<br>
                            使うほどに髪の芯がしっかりしていく感覚を実感できます。
                        </p>
                        <p>
                            ブリーチ毛やエイジング毛とも相性が良く、<br>
                            継続することで、扱いやすさが大きく変わります。
                        </p>
                    </div>
                    <div class="rekera-image">
                        <img src="/img/concept/concept_counseling.jpg" alt="ReKERA トリートメント">
                    </div>
                </div>
                <h3 style="text-align:center; font-size:2.2rem; margin-bottom:40px;">
                    こんな方におすすめ
                </h3>
                <ul class="rekera-list">
                    <li>ブリーチや縮毛矯正で髪がボロボロ</li>
                    <li>髪が細くなってきた / ハリがなくなってきた</li>
                    <li>ダメージで広がる / 切れ毛が気になる</li>
                    <li>綺麗に髪を伸ばしていきたい</li>
                </ul>
                <h3 style="text-align:center; font-size:2.2rem; margin-bottom:40px;">
                    spicaでのReKERA
                </h3>
                <ul class="rekera-point">
                    <li>✔︎ 髪の状態を見ながら、配合バランスを細かく調整</li>
                    <li>✔︎ ドライヤーやアイロン前にも使用可能</li>
                </ul>
                <p class="rekera-closing">
                    “美容室帰りだけ綺麗”から、<br>
                    “綺麗が積み重なる髪”へ。
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
