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
            Magnet / CREATEs PAGE ONLY
        ===================================================== */
        .magnet-section {
            max-width: 1000px;
            margin: 0 auto 200px;
            font-family: 'Zen Old Mincho', serif;
        }
        .magnet-header {
            text-align: center;
            margin-bottom: 120px;
        }
        .magnet-header .en {
            display: block;
            font-size: 1.2rem;
            letter-spacing: 4px;
            color: #999;
            margin-bottom: 24px;
        }
        .magnet-header h2 {
            font-size: 3.2rem;
            letter-spacing: 2px;
            font-family: 'Allura', cursive;
        }
        .magnet-image {
            text-align: center;
            margin-bottom: 120px;
        }
        .magnet-image img {
            width: 100%;
            max-width: 460px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.1);
        }
        .magnet-lead {
            max-width: 700px;
            margin: 0 auto 120px;
            text-align: center;
        }
        .magnet-lead p {
            font-size: 1.7rem;
            line-height: 2;
            color: #444;
        }
        .magnet-block {
            max-width: 720px;
            margin: 0 auto 120px;
        }
        .magnet-block h3 {
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 32px;
        }
        .magnet-block p {
            font-size: 1.6rem;
            line-height: 2;
            margin-bottom: 24px;
            text-align: center;
        }
        .magnet-list {
            max-width: 650px;
            margin: 0 auto 140px;
            list-style: none;
            padding: 0;
        }
        .magnet-list li {
            font-size: 1.6rem;
            padding: 14px 0;
            border-bottom: 1px solid #e5e5e5;
            text-align: center;
        }
        .magnet-closing {
            text-align: center;
            font-size: 1.8rem;
            letter-spacing: 2px;
            margin-top: 120px;
        }

        /* =====================================================
            Responsive
        ===================================================== */
        @media (max-width: 768px) {
            .magnet-header h2 {
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

    <h1 class="spica-title fade-up">Magnet / CREATEs</h1>

    <div class="contents-wrapper">
        <main class="aujua-section">
            <section class="magnet-section fade-up">
                <header class="magnet-header">
                    <span class="en">PROFESSIONAL TOOL</span>        
                </header>
                <div class="magnet-image">
                    <img src="/img/product/product_magnet_creates.jpg" alt="Magnet / CREATEs ドライヤー・ヘアアイロン">
                </div>
                <div class="magnet-lead">
                    <p>
                        軽量・速乾・ツヤ。<br>
                        すべてを叶えるプロフェッショナルドライヤー。
                    </p>
                    <p>
                        柔らかい質感、しっとり、サラサラ。<br>
                        髪の仕上がりを、自分好みにカスタマイズできます。
                    </p>
                </div>
                <div class="magnet-block">
                    <h3>乾かすだけで、綺麗になる。</h3>
                    <p>
                        温度と風量を細かく調整でき、<br>
                        髪に余計な負担をかけずに時短ドライ。
                    </p>
                    <p>
                        spicaでも、<br>
                        実際に施術中のアイテムとして使用しています。
                    </p>
                    <p>
                        毎日のドライ時間が短くなり、<br>
                        日々のケアが自然と楽になります。
                    </p>
                </div>
                <div class="magnet-block">
                    <h3>むとう的、使いやすさ No.1。</h3>
                    <p>
                        Magnetのコテは、<br>
                        熱ダメージを抑えながら、カールが長持ち。
                    </p>
                    <p>
                        初心者でも巻きやすいグリップで、<br>
                        艶のあるウェーブが誰でも再現できます。
                    </p>
                </div>
                <h3 style="text-align:center; font-size:2.2rem; margin-bottom:40px;">
                    こんな方におすすめ
                </h3>
                <ul class="magnet-list">
                    <li>毎朝のスタイリングを楽にしたい</li>
                    <li>巻きが取れやすい</li>
                    <li>スタイリング中の腕の疲れを減らしたい</li>
                    <li>美容室の仕上がりを家でもキープしたい</li>
                </ul>
                <p class="magnet-closing">
                    気になる方は、<br>
                    実際に手に取って風量や重さをお試しいただけます。
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
