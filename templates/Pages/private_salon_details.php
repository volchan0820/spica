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
        .viewmore-btn {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <div class="contents-wrapper">
        <main class="concept-section">
            <section class="concept-details-block reverse fade-up">
                <div class="text">
                    <h2>- Private Salon -</h2>
                    <p>
                        ダミー<br>
                    </p>
                </div>
                <div class="image">
                    <img src="/img/concept_cut.jpg" alt="テクノロジー">
                </div>
            </section>
            <section class="concept-details-block reverse fade-up">
                <div class="text">
                    <h2>- ダミー -</h2>
                    <p>
                        ダミー<br>
                    </p>
                </div>
            </section>
            <div class="divider"></div>
            <section class="concept-details-block-alt reverse fade-up">
                <div class="text">
                    <p>
                        ダミー<br>
                    </p>
                </div>
                <div class="image">
                    <img src="/img/concept_cut.jpg" alt="ヘアケア">
                </div>
            </section>
            <div class="divider"></div>
            <section class="concept-details-block-alt-plus">
                <div class="row">
                    <div class="text">
                        <p>
                            ダミー<br><br>
                            ダミー<br>
                        </p>
                    </div>
                    <img src="/img/concept_cut.jpg" class="image img1">
                </div>
                <div class="row">
                    <div class="text">
                        <p>
                            ダミー<br><br>
                            ダミー<br>
                        </p>
                    </div>
                    <img src="/img/concept_cut.jpg" class="image img2">
                </div>
                <div class="row">
                    <div class="text">
                        <p>
                            ダミー<br><br>
                            ダミー<br>
                        </p>
                    </div>
                    <img src="/img/concept_cut.jpg" class="image img3">
                </div>
            </section>
            <div class="divider"></div>
            <section class="concept-details-block-extended reverse fade-up">
                <div class="text">
                    <h2>ダミー</h2>
                        <p>
                            ダミー<br><br>
                            ダミー<br>
                        </p>
                </div>
            </section>
        </main>
        <!-- BACKボタン -->
        <?= $this->element('back_button_concept') ?>
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