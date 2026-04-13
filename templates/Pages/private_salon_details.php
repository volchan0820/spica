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
                    <img src="/assets/images/concept/private-salon/private-salon-1.jpeg" alt="完全プライベート空間">
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
                    <img src="/assets/images/concept/private-salon/private-salon-2.jpeg" alt="最新チェア">
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
                    <img src="/assets/images/concept/private-salon/private-salon-3.jpeg" alt="リラックス空間">
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
	<?php echo $this->element('page_top_script_detail_2'); ?>

    <!-- レスポンシブ　ページトップボタン -->
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/pagetop.png" alt="ページトップへ"></a>
    <?php echo $this->element('page_top_mobile_script'); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>
</body>
</html>