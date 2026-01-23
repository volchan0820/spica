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
.aujua-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0px 20px;
    margin-bottom: 100px;
}
.aujua-block {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
    margin-top: 200px;
    gap: 40px;
    flex: 1;
}
.aujua-block:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}
.aujua-block.reverse {
    flex-direction: row-reverse;
}
.aujua-text {
    padding-left: 20px;
    flex: 1;
    margin-top: -120px;
}
.aujua-text h2 {
    font-size: 4.8rem;
    letter-spacing: 8px;
    margin-bottom: 60px;
    text-align: left;
    font-family: 'Allura', cursive;
}
.aujua-text p {
    /* line-height: 1.8; */
    font-size: 2rem;
    font-family: 'Zen Old Mincho', serif;
}
.aujua-image {
    position: relative;
    display: inline-block;
    flex: 1;
    text-align: center;
}
.aujua-image img {
    max-width: 100%;
    height: auto;
    display: block;
    position: relative;
    z-index: 2;
}
/* .aujua-image::before {
    content: "";
    position: absolute;
    top: -20px;
    right: -20px;
    width: 100%;
    height: 100%;
    z-index: 1;
    background: #d2b48c6b;
} */
.aujua-block-alt {
    display: flex;
    flex-direction: column-reverse;
    align-items: center;
    /* text-align: center; */
    margin-bottom: 120px;
    gap: 40px;
    font-family: 'Allura', cursive;
}
.aujua-block-alt:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}
.aujua-block-alt .text {
    order: 2;
    flex: 1;
    padding-left: 20px;
    text-align: center;
}
.aujua-block-alt .text h2 {
    font-size: 2.8rem;
    letter-spacing: 8px;
    margin-bottom: 80px;
    /* font-family: 'Allura', cursive; */
    font-family: 'Allura', cursive;
}
.aujua-block-alt .text p {
    line-height: 1.8;
    /* font-size: 2rem; */
    /* font-family: 'Zen Old Mincho', serif; */
    /* text-align: center; */
}
.aujua-block-alt .image {
    order: 1;
    flex: 1;
    text-align: center;
}
.aujua-block-alt .image img {
    max-width: 70%;
    height: auto;
    display: block;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}
/* スマホ対応 */
@media (max-width: 768px) {
    .aujua-block-alt {
        flex-direction: column;
    }
}
.menu-note-1 {
    text-align: left;
    margin-bottom: 80px;
    margin-left: -200px;
    font-size: 1.6rem;
}
.menu-note-2 {
    text-align: left;
    margin-bottom: 40px;
}
.menu-note-3 {
    text-align: center;
    margin-bottom: 40px;
}
.menu-note-4 {
    text-align: left;
    margin-bottom: 40px;
}
.menu-note-5 {
    text-align: right;
}









/* ここから */
/* MILBON section */
.milbon-section {
    max-width: 1000px;
    margin: 0 auto 180px;
    font-family: 'Zen Old Mincho', serif;
}

/* header */
.milbon-header {
    text-align: center;
    margin-bottom: 80px;
}

.milbon-en {
    display: block;
    font-size: 1.2rem;
    letter-spacing: 4px;
    color: #aaa;
    margin-bottom: 20px;
}

.milbon-header h2 {
    font-size: 3.2rem;
    line-height: 1.5;
    font-family: 'Allura', cursive;
    margin-bottom: 24px;
}

.milbon-lead {
    font-size: 1.8rem;
    line-height: 2;
}


/* product images */
/* product images */
.milbon-products {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 60px;
    max-width: 1000px; /* 横に広げすぎないのがポイント */
    margin: 0 auto 120px;
}

.product-item {
    background: #fafafa;
    padding: 60px 40px; /* 余白で“高級感”を出す */
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-item img {
    width: 100%;
    max-width: 320px; /* ←ここで画像サイズをしっかり確保 */
    height: auto;
    transition: transform 0.4s ease;
}

.product-item:hover img {
    transform: translateY(-6px);
}

/* mobile */
@media (max-width: 768px) {
    .milbon-products {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .product-item {
        padding: 50px 30px;
    }

    .product-item img {
        max-width: 280px;
    }
}


/* images */
.milbon-images {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    gap: 20px;
    margin-bottom: 100px;
}

.milbon-images img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* text */
.milbon-content {
    max-width: 700px;
    margin: 0 auto 120px;
    text-align: center;
}

.milbon-text {
    font-size: 1.7rem;
    line-height: 2;
    margin-bottom: 40px;
}

/* features */
.milbon-features {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-bottom: 120px;
}

.feature h3 {
    font-size: 1.4rem;
    letter-spacing: 2px;
    color: #999;
    margin-bottom: 16px;
}

.feature p {
    font-size: 1.5rem;
    line-height: 1.9;
}

/* target / spica */
.milbon-target,
.milbon-spica {
    max-width: 600px;
    margin: 0 auto 100px;
}

.milbon-target h3,
.milbon-spica h3 {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 32px;
}

.milbon-target ul,
.milbon-spica ul {
    list-style: none;
    padding: 0;
}

.milbon-target li,
.milbon-spica li {
    padding: 12px 0;
    border-bottom: 1px solid #e5e5e5;
    font-size: 1.6rem;
}

/* closing */
.milbon-closing {
    text-align: center;
    font-size: 1.8rem;
    letter-spacing: 2px;
    margin-top: 120px;
}

/* mobile */
@media (max-width: 768px) {
    .milbon-images {
        grid-template-columns: 1fr;
    }

    .milbon-features {
        grid-template-columns: 1fr;
    }

    .milbon-section {
        margin-bottom: 140px;
    }
}

    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">MILBON</h1>

    <div class="contents-wrapper">
        <main class="aujua-section">
<section class="milbon-section fade-up">
    <header class="milbon-header">
        <span class="milbon-en">STYLING SERIES</span>
        <h2>スタイリング剤</h2>
        <p class="milbon-lead">
            髪を守りながら、<br>
            仕上がりの美しさを楽しむ。
        </p>
    </header>

    <!-- 画像エリア -->
<!-- 画像エリア -->
<div class="milbon-products">
    <figure class="product-item">
        <img src="/img/concept/concept_privatesalon.jpg" alt="MILBON スタイリング剤">
    </figure>
    <figure class="product-item">
        <img src="/img/concept/concept_privatesalon.jpg" alt="MILBON スタイリング剤">
    </figure>
</div>


    <!-- 説明 -->
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

    <!-- 特徴 -->
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

    <!-- こんな方に -->
    <div class="milbon-target">
        <h3>こんな方におすすめ</h3>
        <ul>
            <li>美容室帰りの仕上がりを自宅でも再現したい</li>
            <li>きめすぎ感・バリバリ感が苦手</li>
            <li>朝セットしてもすぐ崩れてしまう</li>
            <li>束感・濡れ髪・ニュアンス巻きが好き</li>
        </ul>
    </div>

    <!-- spicaの提案 -->
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
