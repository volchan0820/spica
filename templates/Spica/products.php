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
            PRODUCTS PAGE ONLY
        ===================================================== */
        .product-btn {
            margin-left: 20px;
        }
        .product-btn-reverse {
            margin-left: 950px;
        }
        /* コンセプト内ページ全て共通 */
        .product-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0px 20px;
            margin-bottom: 100px;
        }
        .product-block {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            margin-top: 200px;
            gap: 40px;
            flex: 1;
        }
        .product-block:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .product-text {
            padding-left: 20px;
            flex: 1;
        }
        .product-text h2 {
            font-size: 4.8rem;
            letter-spacing: 8px;
            margin-bottom: 40px;
            text-align: left;
            font-family: 'Lora', serif;
            border-bottom: 4px solid #b9b9b9;
        }
        .product-text p {
            line-height: 1.8;
            font-size: 2rem;
            font-family: 'Zen Old Mincho', serif;
        }
        .product-block.reverse {
            flex-direction: row-reverse;
        }
        .product-image {
            position: relative;
            display: inline-block;
            flex: 1;
            text-align: center;
        }
        .product-image img {
            max-width: 100%;
            height: auto;
            display: block;
            position: relative;
            z-index: 2;
        }
        .product-image::before {
            content: "";
            position: absolute;
            top: -20px;
            right: -20px;
            width: 100%;
            height: 100%;
            z-index: 1;
            background: #b9b9b9;
        }
        /* =====================================================
            Responsive
        ===================================================== */
        @media (max-width: 768px) {
            /* ボタン */
            .product-btn {
                margin-left: 0px;
                margin-bottom: 160px;
            }
            .product-btn-reverse {
                margin-left: 0px;
                margin-bottom: 160px;
            }
            /* product */
            .product-block {
                margin-top: 60px;
                flex-direction: column;
                letter-spacing: 4px;
                text-align: left;
            }
            .product-block.reverse {
                flex-direction: column;
            }
            .product-image {
                text-align: center;
            }
            .product-text {
                text-align: center;
                margin-top: 0px;
            }
            .product-text h2 {
                font-size: 3rem;
                margin-bottom: 15px;
                letter-spacing: 4px;
                border-bottom: 2px solid #b9b9b9;
            }
            .product-text p {
                font-size: 1.4rem;
                line-height: 1.4;
                text-align: left;
            }
            .product-image::before {
                content: "";
                position: absolute;
                top: -10px;
                right: -10px;
                width: 100%;
                height: 100%;
                z-index: 1;
                background: #b9b9b9;
            }
        }
    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/assets/images/product/main/product-main.jpeg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">RRODUCTS</h1>

    <div class="contents-wrapper">
        <main class="product-section">
            <!-- Aujua -->
            <section class="product-block fade-up">
                <div class="product-text">
                    <h2>Aujua</h2>
                    <p>
                        aujuaとは「一人ひとりの髪と頭皮に“合わせて作る”オーダーメイドケア」<br>
                        Aujuaは日本人の髪を研究して生まれた、オーダーメイドケア。<br>
                        髪質やダメージ、季節の変化に合わせて最適な組み合わせをご提案。<br>
                        紫外線や湿度の影響を受けやすい沖縄の髪にも、本当に必要なケアを行います。
                    </p>
                </div>
                <div class="product-image">
                    <img src="/assets/images/product/main/product-aujua.jpeg" alt="取扱商品 Aujua">
                </div>
            </section>
            <div class="product-btn">
                <a href="/pages/products_aujua/" class="btnBasic">
                    <div class="btnBasic__label">
                        <span class="typo">V</span><span class="typo">I</span><span class="typo">E</span><span class="typo">W</span>&ensp;
                        <span class="typo">M</span><span class="typo">O</span><span class="typo">R</span><span class="typo">E</span>
                        <div class="btnBasic__bg"></div>
                    </div>
                    <div class="arrow more__arrow">
                        <div class="arrow__line arrow__line--01"></div>
                        <div class="arrow__line arrow__line--02"></div>
                    </div>
                </a>
            </div>
            <!-- MILBON -->
            <section class="product-block reverse fade-up">
                <div class="product-text">
                    <h2>MILBON</h2>
                    <p>
                        市販のスタイリング剤と違うところは、髪の毛を守りながらスタイリングできるところ。<br>
                        プロの美容師も愛用する方が多く、付けやすい、セットしやすいのが特徴です。
                    </p>
                </div>
                <div class="product-image">
                    <img src="/assets/images/product/main/product-milbon.jpeg" alt="取扱商品 MILBON">
                </div>
            </section>
            <div class="product-btn-reverse">
                <a href="/pages/products_milbon/" class="btnBasic">
                    <div class="btnBasic__label">
                        <span class="typo">V</span><span class="typo">I</span><span class="typo">E</span><span class="typo">W</span>&ensp;
                        <span class="typo">M</span><span class="typo">O</span><span class="typo">R</span><span class="typo">E</span>
                        <div class="btnBasic__bg"></div>
                    </div>
                    <div class="arrow more__arrow">
                        <div class="arrow__line arrow__line--01"></div>
                        <div class="arrow__line arrow__line--02"></div>
                    </div>
                </a>
            </div>
            <!-- LOA THE OIL -->
            <section class="product-block fade-up">
                <div class="product-text">
                    <h2>LOA THE OIL</h2>
                    <p>
                        ボディー、ヘアー、ハンド、フレグランスとして使用できる、香りが持続する香水のようなヘアオイルです。<br>
                        香水ほど強くなく、ほんのり香るのがお気に入りです。
                    </p>
                </div>
                <div class="product-image">
                    <img src="/assets/images/product/main/product-loa-the-oil.jpeg" alt="取扱商品 LOA THE OIL">
                </div>
            </section>
            <div class="product-btn">
                <a href="/pages/products_loa_the_oil/" class="btnBasic">
                    <div class="btnBasic__label">
                        <span class="typo">V</span><span class="typo">I</span><span class="typo">E</span><span class="typo">W</span>&ensp;
                        <span class="typo">M</span><span class="typo">O</span><span class="typo">R</span><span class="typo">E</span>
                        <div class="btnBasic__bg"></div>
                    </div>
                    <div class="arrow more__arrow">
                        <div class="arrow__line arrow__line--01"></div>
                        <div class="arrow__line arrow__line--02"></div>
                    </div>
                </a>
            </div>
            <!-- ReKERA -->
            <section class="product-block reverse fade-up">
                <div class="product-text">
                    <h2>ReKERA</h2>
                    <p>
                        カラーやパーマ、紫外線によるダメージ、加齢によって毛髪の栄養分が減少するエイジングダメージなど、
                        髪の毛のタンパク質そのものを補修してくれるので使うほどキレイに！
                    </p>
                </div>
                <div class="product-image">
                    <img src="/assets/images/product/main/product-rekera.jpeg" alt="取扱商品 ReKERA">
                </div>
            </section>
            <div class="product-btn-reverse">
                <a href="/pages/products_rekera/" class="btnBasic">
                    <div class="btnBasic__label">
                        <span class="typo">V</span><span class="typo">I</span><span class="typo">E</span><span class="typo">W</span>&ensp;
                        <span class="typo">M</span><span class="typo">O</span><span class="typo">R</span><span class="typo">E</span>
                        <div class="btnBasic__bg"></div>
                    </div>
                    <div class="arrow more__arrow">
                        <div class="arrow__line arrow__line--01"></div>
                        <div class="arrow__line arrow__line--02"></div>
                    </div>
                </a>
            </div>
            <!-- ＋ hunt -->
            <section class="product-block fade-up">
                <div class="product-text">
                    <h2>+ hunt</h2>
                    <p>
                        メンズのスタイリングは＋hunt。<br>
                        メンズに使って欲しいスタイリング剤No.1です。<br>
                        香りも良し、使い心地も良し、セット力もバッチリあります◎
                    </p>
                </div>
                <div class="product-image">
                    <img src="/assets/images/product/main/product-hunt.jpeg" alt="取扱商品 ＋ hunt">
                </div>
            </section>
            <div class="product-btn">
                <a href="/pages/products_hunt/" class="btnBasic">
                    <div class="btnBasic__label">
                        <span class="typo">V</span><span class="typo">I</span><span class="typo">E</span><span class="typo">W</span>&ensp;
                        <span class="typo">M</span><span class="typo">O</span><span class="typo">R</span><span class="typo">E</span>
                        <div class="btnBasic__bg"></div>
                    </div>
                    <div class="arrow more__arrow">
                        <div class="arrow__line arrow__line--01"></div>
                        <div class="arrow__line arrow__line--02"></div>
                    </div>
                </a>
            </div>
            <!-- Magnet -->
            <section class="product-block reverse fade-up">
                <div class="product-text">
                    <h2>Magnet</h2>
                    <p>
                        軽量、速乾、美髪、を兼ね備えた髪の仕上がりを自分好みにカスタマイズするならMagnetドライヤー。<br>
                        コテやヘアアイロンも、プロも選ぶ使いやすさやプロクオリティを自宅でも再現しやすいアイテムです！
                    </p>
                </div>
                <div class="product-image">
                    <img src="/assets/images/product/main/product-magnet.jpeg" alt="取扱商品 Magnet">
                </div>
            </section>
            <div class="product-btn-reverse">
                <a href="/pages/products_magnet/" class="btnBasic">
                    <div class="btnBasic__label">
                        <span class="typo">V</span><span class="typo">I</span><span class="typo">E</span><span class="typo">W</span>&ensp;
                        <span class="typo">M</span><span class="typo">O</span><span class="typo">R</span><span class="typo">E</span>
                        <div class="btnBasic__bg"></div>
                    </div>
                    <div class="arrow more__arrow">
                        <div class="arrow__line arrow__line--01"></div>
                        <div class="arrow__line arrow__line--02"></div>
                    </div>
                </a>
            </div>
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
