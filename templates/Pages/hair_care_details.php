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
            <section class="hair-care-block reverse fade-up">
                <div class="text">
                    <h2>- Technology -</h2>
                    <p>
                        spicaでは、髪や頭皮に負担をかけずに深いクレンジングができる“マイクロバブル”を取り入れています。<br>
                        <br>
                        極小の泡が毛穴の奥や頭皮のキメまでしっかり届き、<br>
                        日常のシャンプーでは落ちにくい酸化皮脂や汚れをやさしく除去します。<br>
                        <br>
                        施術前にマイクロバブルで“素髪”の状態へ整えることで、カラーやパーマの薬剤が均一に作用しやすくなり、仕上がりの美しさや持ちが向上します。<br>
                        <br>
                        さらに、施術後の薬剤残留も軽減できるため、頭皮トラブルやダメージにつながるストレスも抑えられます。
                    </p>
                </div>
                <div class="image">
                    <img src="/img/concept_cut.jpg" alt="テクノロジー">
                </div>
            </section>
            <section class="hair-care-block reverse fade-up">
                <div class="text">
                    <h2>- Hair Care -</h2>
                    <p>
                        ◎髪と頭皮を守るために、大切にしていること<br>
                        全メニューにトリートメント工程を組み込み、施術による負担を最小限に抑えています。<br>
                        ヘアカラーやパーマ、縮毛矯正に使われる「2剤（過酸化水素）」は、<br>
                        色を発色させたり、薬剤を定着させるのに欠かせない成分です。<br>
                        このとき、髪の内部では【活性酸素】と呼ばれるものが発生します。<br>
                        活性酸素そのものは悪いものではなく、<br>
                        カラーをするために“必要な反応”なのですが——<br>
                        余分な活性酸素が髪や頭皮に残ってしまうと、ダメージや老化の原因になります。
                    </p>
                </div>
            </section>
            <div class="divider"></div>
            <section class="hair-care-block-alt-plus">
                <div class="row">
                    <div class="text">
                        <p>
                            ① 前処理：薬剤が浸透しやすい髪へ<br><br>
                            専用トリートメントで髪をやさしく膨潤させ、<br>
                            薬剤が均一に入りやすい状態に整えます。<br>
                            これにより、ムラを防ぎつつダメージも軽減。
                        </p>
                    </div>
                    <img src="/img/concept_cut.jpg" class="image img1">
                </div>
                <div class="row">
                    <div class="text">
                        <p>
                            ② 中間処理：栄養補給しながら<br><br>
                            薬剤が反応している最中に、<br>
                            髪の内部へ必要な栄養（タンパク質・保湿成分）を補給。<br>
                            負担をかけずに、ハリ・コシ・まとまりのある仕上がりへ導きます。
                        </p>
                    </div>
                    <img src="/img/concept_cut.jpg" class="image img2">
                </div>
                <div class="row">
                    <div class="text">
                        <p>
                            ③ アフターケア：弱酸性へリセット<br><br>
                            カラー後に残りやすい過酸化水素を分解し、<br>
                            活性酸素のダメージを抑えます。<br>
                            さらに酸リンスで弱酸性に戻す処理を行い、<br>
                            キューティクルを整え、ツヤと手触りをアップ。
                        </p>
                    </div>
                    <img src="/img/concept_cut.jpg" class="image img3">
                </div>
            </section>
            <div class="divider"></div>
            <section class="hair-care-block-extended reverse fade-up">
                <div class="text">
                    <h2>◎髪と頭皮を守るために、<br>大切にしていること</h2>
                    <p>
                        「その日キレイ」だけでなく、<br>
                        これからの髪や頭皮を守るためのケアをすべての工程に取り入れています。<br>
                        安心してカラーやパーマ、縮毛矯正を続けたい方にこそ、ぜひ体験していただきたい施術です。
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