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
            MENU PAGE ONLY
        ===================================================== */
        .price-menu-frame {
            max-width: 800px;
            margin: 60px auto;
            margin-bottom: 100px;
            padding: 20px 70px;
            border: 10px solid #a9a9a9;
            position: relative;
            text-align: center;
        }
        .price-menu-frame::before {
            content: "";
            position: absolute;
            top: 15px;
            left: 15px;
            right: -35px;
            bottom: -35px;
            border: 10px solid #333;
        }
        .price-menu-items {
            font-family: 'Zen Kaku Gothic New', sans-serif;
            text-align: left;
            padding-left: 10px;
        }
        .price-menu-title {
            display: inline-block; 
            background: #5a5a5a;
            color: #fff;
            font-size: 2.6rem;
            text-align: center;
            padding: 12px 40px;
            margin: 40px auto 30px;
            letter-spacing: 6px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            font-family: 'Allura', cursive;
        }
        .price-menu-note {
            text-align: center;
            font-family: 'Zen Old Mincho', serif;
            font-size: 1.2rem;
            color: #333;
            line-height: 1.6;
            margin-bottom: 40px;
        }
        .price-menu-row {
            display: grid;
            grid-template-columns: 120px 1fr 120px;
            gap: 20px;
            align-items: center;
            padding: 6px 0;
            font-family: 'Noto Sans JP', sans-serif;
        }
        .price-menu-row p:first-child {
            font-weight: bold;
        }
        .price-menu-row p:first-child:empty::before {
            content: "\00a0";
            display: inline-block;
        }
        .price-menu-row p:last-child {
            text-align: right;
            white-space: nowrap;
        }
        .menu-item {
            display: flex;
            justify-content: space-between;
            padding: 2px 0;
            font-size: 1.8rem;
        }
        .menu-category h3 {
            margin-bottom: 25px;
            font-family: 'Allura', cursive;
            font-size: 3.8rem;
        }
        .divider {
            border-bottom: 1px solid #ccc;
            margin: 10px 0;
        }
        .price-menu-section {
            border-top: 1px solid #333;
            margin: 20px 0;
            padding: 10px 0;
        }
        .price-menu-note-small {
            border-top: 1px solid #333;
            text-align: left;
            font-family: 'Zen Old Mincho', serif;
            font-size: 1.2rem;
            color: #333;
            line-height: 1.6;
        }
        .name.menu-name {
            margin-bottom: 16px;
        }

        /* =====================================================
            Responsive
        ===================================================== */
        @media (max-width: 768px) {
            .price-menu-frame {
                max-width: 95%;
                margin: 30px auto 60px;
                padding: 15px 20px;
                border-width: 6px;
            }
            .price-menu-frame::before {
                top: 10px;
                left: 10px;
                right: -20px;
                bottom: -20px;
                border-width: 6px;
            }
            .price-menu-title {
                font-size: 1.6rem;
                padding: 8px 20px;
                margin: 30px auto 20px;
                letter-spacing: 4px;
                left: 50%;
                transform: translateX(-50%);
            }
            .price-menu-note {
                font-size: 1rem;
                line-height: 1.4;
                margin-bottom: 25px;
            }
            .price-menu-row {
                display: grid;
                grid-template-columns: 1fr 2fr auto;
                gap: 10px;
                align-items: center;
                padding: 4px 0;
            }
            .price-menu-row p:last-child {
                text-align: right;
                white-space: nowrap;
            }
            .price-menu-section {
                margin: 15px 0;
                padding: 5px 0;
            }
            .menu-wrapper {
                padding: 0px 10px 0px 0px;
            }
            .price-menu-items p {
                font-size: 1.2rem;
            }
            .concept-image::before {
                top: -10px;
                right: -10px;
            }
            .name.menu-name {
                font-size: 1.2rem;
                margin-right: 20px;
                margin-bottom: 16px;
            }
        }
    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
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
                        <br>▷薬剤によるダメージや、残留成分を取り除き髪質を改善するベースケアトリートメント(予防)
                        <br>▷さらにお悩み解決し質感を理想に近づけるオージュアトリートメント(補修)
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
                        <br>▷薬剤によるダメージや、残留成分を取り除き髪質を改善するベースケアトリートメント(予防)
                        <br>▷さらにお悩み解決し質感を理想に近づけるオージュアトリートメント(補修)
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
                        <p class="price-menu-note-small">
                            <br>※メンテナンスカットは、前回のご来店日から5週間以内の方を対象とした特別メニューです。
                            <br>※初めてご来店の方は、通常のカットメニューをご利用ください。
                        </p>
                    </div>  
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
