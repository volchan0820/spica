<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>hair atelier spica｜メニュー｜浦添市の美容室でカット・カラー・パーマ</title>
    <meta name="description" content="浦添市経塚のhair atelier spicaのメニュー。カット、カラー、パーマ、ストレート、ヘッドスパなど、髪質やスタイルに合わせた施術をご提案。丁寧なカウンセリングで理想のヘアに仕上げます。">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>

    <!-- JSON-LD読み込み -->
    <?= $this->element('menu_jsonld') ?>

    <style>
        /* =====================================================
            MENU PAGE - FLOATING ELEGANT STYLE
        ===================================================== */
        .price-menu-frame {
            max-width: 900px;
            margin: 100px auto;
            padding: 70px 80px;
            background: #ffffff;
            border-radius: 20px;
            position: relative;
            transition: all 0.4s ease;
            border: 1px solid #eee;

            box-shadow:
                0 18px 40px rgba(0,0,0,0.12),
                0 40px 90px rgba(0,0,0,0.08);
        }
        .price-menu-frame:hover {
            transform: translateY(-8px);
            box-shadow:
                0 25px 50px rgba(0,0,0,0.08),
                0 50px 100px rgba(0,0,0,0.06);
        }
        .price-menu-items {
            font-family: 'Zen Kaku Gothic New', sans-serif;
        }
        .price-menu-title {
            display: inline-block;
            font-family: 'Allura', cursive;
            font-size: 3rem;
            letter-spacing: 6px;
            color: #ffffff;
            padding: 14px 50px;
            border-radius: 50px;
            background: #696969;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            margin: 0 auto 40px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }
        .price-menu-note {
            text-align: center;
            font-family: 'Zen Old Mincho', serif;
            font-size: 1.2rem;
            color: #5c554d;
            line-height: 1.7;
            margin-bottom: 50px;
        }
        .menu-category {
            margin: 50px 0;
            padding: 35px 40px;
            border-radius: 16px;
            background: #faf8f6;
            border: 1px solid #eee;

            box-shadow:
                inset 0 1px 0 rgba(255,255,255,0.9),
                0 10px 25px rgba(0,0,0,0.08);
        }
        .menu-category-title {
            font-family: 'Lora', serif;
            font-size: 2.4rem;
            letter-spacing: 2px;
            text-align: center;
            margin-bottom: 30px;
            color: #4b443c;
            position: relative;
        }
        .menu-category-title::after {
            content: "";
            width: 60px;
            height: 1px;
            background: #cfc7bd;
            display: block;
            margin: 15px auto 0;
        }
        .menu-item::after {
            content: "";
            flex: 1;
            border-bottom: 1px dotted #c5bfb5;
            margin: 0 14px;
        }
        .divider {
            display: none;
        }
        .price-menu-note-small {
            margin-top: 40px;
            padding-top: 25px;
            font-family: 'Zen Old Mincho', serif;
            font-size: 1.2rem;
            color: #5c554d;
            line-height: 1.7;
        }
        .menu-item {
            display: block;
            margin: 22px 0;
            padding-bottom: 18px;
            border-bottom: 1px solid #ece7e1;
        }
        .menu-name {
            display: block;
            font-size: 1.8rem;
            font-weight: 500;
            color: #3f3a34;
            line-height: 1.6;
            margin-bottom: 6px;
            font-family: 'Lora', serif;
        }
        .price {
            display: block;
            font-size: 1.4rem;
            font-weight: 400;
            /* color: #8a8178; */
            letter-spacing: 2px;
            text-align: right;
        }
        /* =====================================================
            Responsive
        ===================================================== */
        @media (max-width: 768px) {
            .price-menu-frame {
                margin: 50px auto;
                padding: 40px 22px;
                border-radius: 16px;
            }
            .price-menu-frame:hover {
                transform: none;
            }
            .price-menu-title {
                font-size: 2rem;
                padding: 10px 28px;
                letter-spacing: 3px;
                margin-bottom: 30px;
            }
            .price-menu-note {
                font-size: 1rem;
                margin-bottom: 30px;
                line-height: 1.6;
            }
            .menu-category {
                padding: 22px;
                margin: 30px 0;
                border-radius: 14px;
            }
            .menu-category-title {
                font-size: 1.7rem;
                margin-bottom: 22px;
            }
            .menu-item {
                margin: 18px 0;
                padding-bottom: 16px;
                border-bottom: 1px solid #ece7e1;
            }
            .menu-name {
                font-size: 1.35rem;
                line-height: 1.6;
                margin-bottom: 6px;
            }
            .price {
                font-size: 1.2rem;
                letter-spacing: 1px;
                text-align: right;
            }
            .price-menu-note-small {
                font-size: 0.95rem;
                margin-top: 30px;
                padding-top: 20px;
                line-height: 1.6;
            }
        }
    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/assets/images/menu/menu-1.JPG" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">MENU</h1>

    <div class="contents-wrapper">
        <div class="menu-wrapper">
            <!-- シングルメニュー -->
            <div class="price-menu-frame fade-up">
                <div class="price-menu-items">
                    <h2 class="price-menu-title">&nbsp;Single　Menu</h2>
                    <p class="price-menu-note">
                        カット以外は全てにベースケアトリートメント、<br>
                        aujuaトリートメント付きとなっております。<br>
                    </p>
                    <div class="divider"></div>
                    <div class="menu-category">
                        <h3 class="menu-category-title">Cut</h3>
                        <div class="menu-item">
                            <span class="name menu-name">カット</span>
                            <span class="price">¥7,700</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">前髪カット</span>
                            <span class="price">¥1,700</span>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="menu-category">
                        <h3 class="menu-category-title">Color</h3>
                        <div class="menu-item">
                            <span class="name menu-name">カラー・トリートメント</span>
                            <span class="price">¥13,500</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">カラー・スパ</span>
                            <span class="price">¥14,000</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">カラーリタッチ・トリートメント</span>
                            <span class="price">¥10,800</span>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="menu-category">
                        <h3 class="menu-category-title">Perm</h3>
                        <div class="menu-item">
                            <span class="name menu-name">パーマ・トリートメント</span>
                            <span class="price">¥14,500~¥19,000</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">前髪パーマ・トリートメント</span>
                            <span class="price">¥7,700</span>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="menu-category">
                        <h3 class="menu-category-title">Straight</h3>
                        <div class="menu-item">
                            <span class="name menu-name">ストレート・トリートメント</span>
                            <span class="price">¥24,000</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">前髪ストレート・トリートメント</span>
                            <span class="price">¥7,700</span>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="menu-category">
                        <h3 class="menu-category-title">Treatment</h3>
                        <div class="menu-item">
                            <span class="name menu-name">トリートメント</span>
                            <span class="price">¥6,600~¥7,700</span>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="menu-category">
                        <h3 class="menu-category-title">Head Spa</h3>
                        <div class="menu-item">
                            <span class="name menu-name">スパ</span>
                            <span class="price">¥6,600~¥7,700</span>
                        </div>
                    </div>
                    <p class="price-menu-note-small">
                        ▷薬剤によるダメージや、残留成分を取り除き髪質を改善するベースケアトリートメント(予防)<br>
                        ▷さらにお悩み解決し質感を理想に近づけるオージュアトリートメント(補修)
                    </p>
                </div>
            </div>

            <!-- セットメニュー -->
            <div class="price-menu-frame fade-up">
                <div class="price-menu-items">
                    <h2 class="price-menu-title">&nbsp;Set　Menu</h2>
                    <p class="price-menu-note">
                        カット以外は全てにベースケアトリートメント、<br>
                        aujuaトリートメント付きとなっております。<br><br>
                        セットメニューにないメニューをご希望の際は、ご相談ください。
                    </p>
                    <div class="divider"></div>
                    <!-- カット & カラー -->
                    <div class="menu-category">
                        <h3 class="menu-category-title">Cut & Color</h3>
                        <div class="menu-item">
                            <span class="name menu-name">カット+カラー+トリートメント</span>
                            <span class="price">¥19,000</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">カット+カラーリタッチ+トリートメント</span>
                            <span class="price">¥17,000</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">前髪カット+カラー+トリートメント</span>
                            <span class="price">¥15,500</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">前髪カット+カラーリタッチ+トリートメント</span>
                            <span class="price">¥12,800</span>
                        </div>
                    </div>
                    <!-- パーマ & ストレート -->
                    <div class="divider"></div>
                    <div class="menu-category">
                        <h3 class="menu-category-title">Parm & Straight</h3>
                        <div class="menu-item">
                            <span class="name menu-name">カット+ストレート+トリートメント</span>
                            <span class="price">¥28,500</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">カット+パーマ+トリートメント</span>
                            <span class="price">¥19,500~¥24,000</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">前髪カット+ストレート+トリートメント</span>
                            <span class="price">¥26,000</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">カラー+ストレート+トリートメント</span>
                            <span class="price">¥29,500</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">カラー+パーマ+トリートメント</span>
                            <span class="price">¥22,500~¥27,000</span>
                        </div>                        
                        <div class="menu-item">
                            <span class="name menu-name">カット+前髪ストレート+トリートメント</span>
                            <span class="price">¥16,500</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">カラー+前髪ストレート+トリートメント</span>
                            <span class="price">¥18,200</span>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <!-- スペシャルセット -->
                    <div class="menu-category">
                        <h3 class="menu-category-title">Special Set</h3>
                        <div class="menu-item">
                            <span class="name menu-name">カット+カラー+ストレート+トリートメント</span>
                            <span class="price">¥35,000</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">カット+カラー+パーマ+トリートメント</span>
                            <span class="price">¥28,000~¥32,500</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">カット+カラー+リタッチ+ストレート+トリートメント</span>
                            <span class="price">¥32,200</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">カット+カラーリタッチ+パーマ+トリートメント</span>
                            <span class="price">¥26,200~¥30,700</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">カット+カラー+前髪ストレート+トリートメント</span>
                            <span class="price">¥24,500</span>
                        </div>
                    </div>
                    <p class="price-menu-note-small">
                        ▷薬剤によるダメージや、残留成分を取り除き髪質を改善するベースケアトリートメント(予防)<br>
                        ▷さらにお悩み解決し質感を理想に近づけるオージュアトリートメント(補修)
                    </p>
                </div>  
            </div>

            <!-- メンテナンスメニュー -->
            <div class="price-menu-frame fade-up">
                <div class="price-menu-items">
                    <h2 class="price-menu-title">&nbsp;Maintenance　Menu</h2>
                    <div class="divider"></div>
                    <div class="menu-category">
                        <h3 class="menu-category-title">Maintenance Cut</h3>
                        <div class="menu-item">
                            <span class="name menu-name">前髪カット</span>
                            <span class="price">¥550</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">もみあげ刈り上げ</span>
                            <span class="price">¥550</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">襟足刈り上げ</span>
                            <span class="price">¥1,100</span>
                        </div>
                        <div class="menu-item">
                            <span class="name menu-name">もみあげ・襟足刈り上げ</span>
                            <span class="price">¥1,500</span>
                        </div>
                    </div>
                    <p class="price-menu-note-small">
                        ※メンテナンスカットは、前回のご来店日から5週間以内の方を対象とした特別メニューです。<br>
                        ※初めてご来店の方は、通常のカットメニューをご利用ください。
                    </p>
                </div>
            </div>
        </div>
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
