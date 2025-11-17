<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>浦添市の美容室spica | 似合わせカット×弱酸性薬剤のプライベートサロン</title>
    <meta name="description" content="沖縄県浦添市経塚のHair atelier spicaは、似合わせカットと弱酸性薬剤で髪に優しい施術を提供するプライベートサロン。カフェのような空間でリラックスしながら、理想のヘアスタイルに。">

    <!-- CSS -->
    <?= $this->element('head_css'); ?>
    <!-- フォント -->
    <?= $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?= $this->element('head_scripts'); ?>
</head>

<body>

    <!-- SNS固定ボタン（sectionにする必要なし） -->
    <div class="sns-fixed">
        <a href="https://line.me/R/ti/p/your_line_id" target="_blank"><i class="fab fa-line"></i></a>
        <a href="https://www.instagram.com/your_instagram" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://beauty.hotpepper.jp/slnH000000000/" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>

    <!-- ヘッダー -->
    <header>
        <?= $this->element('spica_header'); ?>
    </header>

    <!-- メインビジュアル（装飾のため section にしない） -->
    <div class="container">
        <div class="slider">
            <video autoplay muted loop playsinline>
                <source src="/video/test.mp4" type="video/mp4">
                お使いのブラウザは動画に対応していません。
            </video>
        </div>
        <div class="spica-logo-main">
            <div class="glass-bg"></div>
            <img src="/img/spica-logo-top.png" alt="Hair atelier spica ロゴ" />
        </div>
    </div>

    <!-- メインコンテンツ -->
    <main class="top-section">
        <div class="top-right-note fade-up">
            やさしい光が差し込むカフェのような空間で、<br>
            ゆったりとお過ごしください
        </div>
        <!-- h1はページの主題として必須（視覚的非表示） -->
        <h1 class="visually-hidden">Hair atelier spica（ヘアアトリエスピカ）</h1>

        <!-- ------------------------------- -->
        <!-- CONCEPT -->
        <!-- ------------------------------- -->
        <section class="top-block fade-up" aria-labelledby="concept-title">
            <div class="top-inner">
                <h2 id="concept-title">concept</h2>

                <div class="top-content">
                    <figure class="top-section-image">
                        <img src="/img/concept_counseling.jpg" alt="カウンセリングの様子">
                    </figure>

                    <div class="top-text">
                        <p>
                            毎日が少しラクになって、<br>                            
                            鏡を見るのが楽しみになるヘアスタイルを。<br>
                            落ち着いた大人女性が安心して過ごせる。<br>
                            プライベートな空間〜
                        </p>

                        <a href="/spica/concept/" class="btnBasic">
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
                </div>
            </div>
        </section>

        <!-- ------------------------------- -->
        <!-- MENU（反転） -->
        <!-- ------------------------------- -->
        <section class="top-block reverse fade-up" aria-labelledby="menu-title">
            <div class="top-inner">
                <h2 id="menu-title">menu</h2>

                <div class="top-content">
                    <figure class="top-section-image">
                        <img src="/img/concept_counseling.jpg" alt="スタイル提案の様子">
                    </figure>

                    <div class="top-text">
                        <p>
                            美しさを最大限に引き出すためのメニューをご用意しています。<br>
                            あなたにぴったりの施術を、カウンセリングで一緒に見つけましょう。
                        </p>

                        <a href="/spica/menu/" class="btnBasic">
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
                </div>
            </div>
        </section>

        <!-- ------------------------------- -->
        <!-- STAFF -->
        <!-- ------------------------------- -->
        <section class="top-block fade-up" aria-labelledby="staff-title">
            <div class="top-inner">
                <h2 id="staff-title">staff</h2>

                <div class="top-content">
                    <figure class="top-section-image">
                        <img src="/img/concept_counseling.jpg" alt="美容師の紹介">
                    </figure>

                    <div class="top-text">
                        <p>カウンセリングを大切に。<br>
                            スタイリストってこんな人
                        </p>

                        <a href="/spica/staff/" class="btnBasic">
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
                </div>
            </div>
        </section>

        <!-- ------------------------------- -->
        <!-- GALLERY（反転） -->
        <!-- ------------------------------- -->
        <section class="top-block reverse fade-up" aria-labelledby="gallery-title">
            <div class="top-inner">
                <h2 id="gallery-title">gallery</h2>

                <div class="top-content">
                    <figure class="top-section-image">
                        <img src="/img/concept_counseling.jpg" alt="ヘアスタイルギャラリー">
                    </figure>

                    <div class="top-text">
                        <p>カットラインの美しさや質感の違いなど、言葉だけでは伝わりにくい部分もわかりやすくまとめています。<br>
                            初めての方にもサロンの雰囲気が伝わるよう、実際のお客様のヘアスタイルを中心に掲載しています。
                        </p>

                        <a href="/spica/gallery/" class="btnBasic">
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
                </div>
            </div>
        </section>

        <!-- ------------------------------- -->
        <!-- BLOG -->
        <!-- ------------------------------- -->
        <section class="top-block fade-up" aria-labelledby="blog-title">
            <div class="top-inner">
                <h2 id="blog-title">blog</h2>

                <div class="top-content">
                    <figure class="top-section-image">
                        <img src="/img/concept_counseling.jpg" alt="ブログ更新">
                    </figure>

                    <div class="top-text">
                        <p>髪の扱い方や季節ごとのケアのポイントなど、日常に役立つ情報もお届けしています。<br>
                            お店の空気感や、施術に対する想いが少しでも伝わるように、丁寧に更新していきます。
                        </p>

                        <a href="/spica/blog_list/" class="btnBasic">
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
                </div>
            </div>
        </section>

        <!-- ------------------------------- -->
        <!-- ACCESS（反転） -->
        <!-- ------------------------------- -->
        <section class="top-block reverse fade-up" aria-labelledby="access-title">
            <div class="top-inner">
                <h2 id="access-title">access</h2>

                <div class="top-content">
                    <figure class="top-section-image">
                        <img src="/img/concept_counseling.jpg" alt="アクセス情報">
                    </figure>

                    <div class="top-text">
                        <p>ゆっくり過ごしていただける空間へ、スムーズにお越しいただけるようご案内しています。</p>

                        <a href="/spica/access/" class="btnBasic">
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
                </div>
            </div>
        </section>

        <!-- ------------------------------- -->
        <!-- RESERVATION -->
        <!-- ------------------------------- -->
        <section class="top-block fade-up" aria-labelledby="reservation-title">
            <div class="top-inner">
                <h2 id="reservation-title">reservation</h2>

                <div class="top-content">
                    <figure class="top-section-image">
                        <img src="/img/concept_counseling.jpg" alt="予約案内">
                    </figure>

                    <div class="top-text">
                        <p>お客様一人ひとりにしっかり向き合うため、事前のご予約をおすすめしています。</p>

                        <a href="/spica/reservation/" class="btnBasic">
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
                </div>
            </div>
        </section>

    </main>

    <!-- フッター -->
    <footer class="footer">
        <?= $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
    <a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
    <?= $this->element('page_top_script'); ?>

    <!-- レスポンシブ用 -->
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/pagetop.png" alt="ページトップへ"></a>
    <?= $this->element('page_top_mobile_script'); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>

</body>
</html>
