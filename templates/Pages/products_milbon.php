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
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <h1 class="spica-title">MILBON</h1>

    <div class="contents-wrapper">
        <main class="milbon-container">
            <section class="milbon-section fade-up">
                <header class="milbon-header">
                    <span class="milbon-en">STYLING SERIES</span>
                    <h2>スタイリングを楽しむ、プロクオリティケア</h2>
                    <p class="milbon-lead">
                        髪を守りながら、<br>
                        仕上がりの美しさを楽しむ。
                    </p>
                </header>
                <div class="milbon-products">
                    <figure class="product-item">
                        <img src="/assets/images/product/milbon/milbon-1.jpeg" alt="MILBON スタイリング剤">
                    </figure>
                    <figure class="product-item">
                        <img src="/assets/images/product/milbon/milbon-2.jpeg" alt="MILBON スタイリング剤">
                    </figure>
                </div>
                <div class="milbon-content">
                    <p class="milbon-text">
                        市販のスタイリング剤と違い、<br>
                        髪の毛を守りながらスタイリングできるのが<br>
                        MILBONスタイリング剤の大きな特徴。
                    </p>

                    <p class="milbon-text">
                        プロの美容師にも愛用者が多く、<br>
                        付けやすさ・セットのしやすさ、<br>
                        そして<strong>仕上がりの軽さと柔らかさ</strong>が長く続きます。
                    </p>
                </div>
                <div class="milbon-features">
                    <div class="feature">
                        <h3>POINT 01</h3>
                        <p>
                            髪の栄養成分を含み、<br>
                            スタイリングしてもダメージしにくい処方。<br>
                            毎日の使用でも安心です。
                        </p>
                    </div>

                    <div class="feature">
                        <h3>POINT 02</h3>
                        <p>
                            ジェル・ワックス・クリーム・ムースなど、<br>
                            仕上がりに合わせて選べるラインナップ。<br>
                            固めず、束感・動き・ツヤを自然にキープ。
                        </p>
                    </div>

                    <div class="feature">
                        <h3>POINT 03</h3>
                        <p>
                            湿気で崩れやすい沖縄の環境でも、<br>
                            綺麗なシルエットが長持ちします。
                        </p>
                    </div>
                </div>
                <div class="milbon-target">
                    <h3>こんな方におすすめ</h3>
                    <ul>
                        <li>美容室帰りの仕上がりを自宅でも再現したい</li>
                        <li>きめすぎ感・バリバリ感が苦手</li>
                        <li>朝セットしてもすぐ崩れてしまう</li>
                        <li>束感・濡れ髪・ニュアンス巻きが好き</li>
                    </ul>
                </div>
                <div class="milbon-spica">
                    <h3>spicaでのご提案</h3>
                    <ul>
                        <li>スタイリング方法のレクチャー</li>
                        <li>カットデザインに合わせた剤の選定</li>
                        <li>メンズ・レディース・年代問わず対応</li>
                    </ul>
                </div>
                <p class="milbon-closing">
                    「ナチュラルなのに、おしゃれ。」<br>
                    毎日のスタイリングが楽しくなるアイテムです。
                </p>
            </section>
        </main>
        <!-- BACKボタン -->
        <?= $this->element('back_button_products') ?>
    </div>

    <!-- フッター -->
    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
	<a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
	<?php echo $this->element('page_top_script_detail'); ?>

    <!-- レスポンシブ　ページトップボタン -->
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/pagetop.png" alt="ページトップへ"></a>
    <?php echo $this->element('page_top_mobile_script'); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>
</body>
</html>
