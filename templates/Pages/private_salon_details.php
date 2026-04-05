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
        /* .spica-page-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            filter: brightness(0.9);
        } */
        .concept-section section {
            margin-bottom: 100px;
        }
        .divider {
            width: 60px;
            height: 1px;
            background: #ccc;
            margin: 80px auto;
        }
        .text {
            max-width: 480px;
        }
        .text h2 {
            font-size: 24px;
            font-weight: 300;
            letter-spacing: 0.2em;
            margin-bottom: 20px;
            margin-top: 200px;
            color: #939393;
        }
        .text p {
            font-size: 18px;
            color: #555;
            font-family: 'Zen Old Mincho', serif;
        }
        .concept-details-block,
        .concept-details-block-alt,
        .concept-details-block-extended {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }
        .reverse {
            flex-direction: row-reverse;
        }
        .image {
            width: 100%;
            max-width: 500px;
        }
        .image img {
            width: 100%;
            border-radius: 0px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        .image img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }
        .concept-details-block-alt {
            align-items: flex-start;
        }
        .concept-details-block-alt-plus .row {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 80px;
        }
        .concept-details-block-alt-plus .row:nth-child(even) {
            flex-direction: row-reverse;
        }
        .concept-details-block-alt-plus .image {
            width: 45%;
            border-radius: 10px;
        }
        .concept-details-block-alt-plus .text {
            width: 50%;
        }

        /* =========================
        レスポンシブ
        ========================= */
        @media screen and (max-width: 768px) {
            .spica-page-img img {
                height: 260px;
            }
            .concept-details-block,
            .concept-details-block-alt,
            .concept-details-block-extended {
                flex-direction: column;
                gap: 30px;
            }
            .concept-details-block-alt-plus .row {
                flex-direction: column !important;
            }
            .concept-details-block-alt-plus .image,
            .concept-details-block-alt-plus .text {
                width: 100%;
            }
            .text h2 {
                font-size: 18px;
                margin-top: 40px;
            }
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
            <!-- 完全プライベート空間 -->
            <section class="concept-details-block reverse fade-up">
                <div class="text">
                    <h2>- Private Salon -</h2>
                    <p>
                        spicaは【店内1席のみ】の完全プライベートサロンです。<br>
                        ご来店からお帰りまで他のお客様と顔を合わせることがなく、落ち着いた空間でゆったりとお過ごしいただけます。<br><br>

                        美容室で「周囲の視線が気になる」「悩みを相談しづらい」と感じたことはありませんか。<br>
                        spicaではそのようなストレスを感じることなく、安心してお悩みやご希望をお話しいただける環境を大切にしています。<br><br>

                        お客様一人ひとりと丁寧に向き合うための、静かで心地よい空間をご用意しています。
                    </p>
                </div>
                <div class="image">
                    <img src="/img/concept_cut.jpg" alt="完全プライベート空間">
                </div>
            </section>

            <div class="divider"></div>

            <!-- 最新チェア -->
            <section class="concept-details-block fade-up">
                <div class="text">
                    <h2>- Comfortable Chair -</h2>
                    <p>
                        施術には、移動の必要がない最新のスタイリングチェアを採用しています。<br>
                        カットからシャンプー、ヘッドスパまで同じ椅子で行うことができるため、施術中の移動による負担がありません。<br><br>

                        フルフラットになるリクライニング機能を備えており、首や身体への負担を抑えながら、リラックスした状態で施術を受けていただけます。<br><br>

                        長時間の施術でも快適にお過ごしいただけるよう、設備にもこだわっています。
                    </p>
                </div>
                <div class="image">
                    <img src="/img/concept_cut.jpg" alt="最新チェア">
                </div>
            </section>

            <div class="divider"></div>

            <!-- 空間 -->
            <section class="concept-details-block-alt reverse fade-up">
                <div class="text">
                    <h2>- Relaxing Space -</h2>
                    <p>
                        美容室で過ごす時間が、忙しい日常の中でほっと一息つけるひとときになるように。<br>
                        spicaでは空間づくりにもこだわっています。<br><br>

                        店内はカフェのように落ち着いた雰囲気を大切にし、ゆったりとくつろげる空間を整えています。<br>
                        周囲を気にすることなく、自分だけの時間をゆっくりとお楽しみいただけます。<br><br>

                        また、施術中にはこだわりのコーヒーなどのお飲み物もご用意しています。<br>
                        髪を整える時間が、心までリフレッシュできるひとときとなるよう、ゆったりとした時間をお過ごしください。
                    </p>
                </div>
                <div class="image">
                    <img src="/img/concept_cut.jpg" alt="リラックス空間">
                </div>
            </section>
        </main>
        <!-- BACKボタン -->
        <?= $this->element('back_button_concept') ?>
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