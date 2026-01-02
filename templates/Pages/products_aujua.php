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
    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">AUJUA</h1>

    <div class="contents-wrapper">
        <main class="aujua-section">
            <!-- プライベートサロン -->
            <section class="aujua-block fade-up">
                <div class="aujua-text">
                    <p>
                        花粉や梅雨の湿気、夏の紫外線や冬の乾燥、<br>
                        ドライヤーの使い方やアイロンの使用頻度など、<br>
                        一人ひとり全く違うダメージを解決するためにカスタムするヘアケアブランド。
                    </p>
                </div>
                <div class="aujua-image">
                    <img src="/img/concept/concept_privatesalon.jpg" alt="完全プライベートサロン hair atelier spica の店内">
                </div>
            </section>
            <!-- カウンセリング -->
            <section class="aujua-block reverse fade-up" style="margin-bottom: 160px;">
                <div class="aujua-text">
                    <p>
                        「同じ日本でも、地域で髪の悩みは変わる」という考えと、<br>
                        湿気が多く紫外線量も高い沖縄の環境とも相性が良いシリーズが揃っています。
                    </p>
                </div>
                <div class="aujua-image">
                    <img src="/img/concept/concept_counseling.jpg" alt="初めての方も安心できる丁寧なカウンセリング hair atelier spica">
                </div>
            </section>
            <section class="aujua-block-alt reverse fade-up">
                <div class="text">
                    <h2>オージュア最大の特徴は“オーダーメイドケア”。</h2>
                    <p class="menu-note-1">
                        カウンセリングで髪の状態を見極め、数十種類の中から必要な栄養成分を組み合わせて使用。<br>
                        蓄積ダメージを内部から補修し、回数を重ねるほど扱いやすい髪質へ導いていきます。<br>
                    </p>
                    <p class="menu-note-2">
                        こんなお悩みに特におすすめ<br>
                        　・ブリーチ / カラー / パーマによるごわつきやパサつき<br>
                        　・年齢と共に髪が痩せてきた、まとまりにくい<br>
                        　・湿気で広がる / 乾燥で硬くなる<br>
                        　・自分に合うシャンプーが見つからない<br>
                    </p>
                    <p class="menu-note-3">
                        お悩み別に大きく分けて4種類あります<br>
                        <br>
                        ◎髪質そのもののお悩み<br>
                        ▶︎ジリジリまとまらない、クセが昔に比べて増えた、年齢ともにボリュームが減った。<br>
                        →エクイアル、タイムサージなど。<br>
                        <br>
                        ◎ダメージによるお悩み<br>
                        ▶︎カラーやパーマ、アイロンなどのダメージでパサパサする。<br>
                        →インメトリー、クエンチなど。<br>
                        <br>
                        ◎季節によるお悩み<br>
                        ▶︎梅雨で髪の毛が膨らむ、紫外線でカラーの色抜けが早いなど。<br>
                        →アクアヴィア、デイライトなど。<br>
                        <br>
                        ◎頭皮のお悩み<br>
                        ▶︎乾燥して地肌がかゆい、油分が多くベタつく、毛が細くなってきた。<br>
                        →エイジングスパ、モイストカームなど。<br>
                    </p>
                    <p class="menu-note-4">
                        当店のこだわりポイント<br>
                        <br>
                        ✔︎ カウンセリングで理想の仕上がりをヒアリング<br>
                        ✔︎ 髪の栄養状態を見てラインを選定<br>
                        ✔︎ ホームケアの選び方も提案（無理な押し売りなし）<br>
                        ✔︎ aujua商品のご購入だけでもご来店OK(合った商品を見つけるためのカウンセリングも行えます)<br>
                    </p>
                    <p class="menu-note-5">
                        “あなたの髪に寄り添うヘアケア”を体感ください。
                    </p>
                </div>
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
