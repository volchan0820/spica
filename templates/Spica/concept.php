<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spica | concept</title>
    <meta name="description" content="concept">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-imge">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">CONCEPT</h1>

    <main class="concept-section">
        <!-- 左：テキスト / 右：画像 -->
        <section class="concept-block fade-up">
            <div class="concept-text">
                <h2>Counseling</h2>
                <p>
                    お客様一人ひとりに合わせたスタイルを実現するため、
                    丁寧なカウンセリングを心がけています。<br>
                    髪質や骨格、ライフスタイルに合わせたご提案をいたします。
                </p>
            </div>
            <div class="concept-image">
                <img src="/img/concept_counseling.jpg" alt="カウンセリング">
            </div>
        </section>
        <!-- 左：画像 / 右：テキスト -->
        <section class="concept-block reverse fade-up">
            <div class="concept-text">
                <h2>Cut</h2>
                <p>
                    再現性の高いカットを大切にしています。<br>
                    ご自宅でも扱いやすく、日々のスタイリングが楽になるよう心掛けています。
                </p>
            </div>
            <div class="concept-image">
                <img src="/img/concept_cut.jpg" alt="カット">
            </div>
        </section>
        <!-- 左：テキスト / 右：画像 -->
        <section class="concept-block fade-up">
            <div class="concept-text">
                <h2>Maintenance</h2>
                <p>
                    髪は日々の生活でダメージを受けやすいもの。<br>
                    定期的なメンテナンスを通して、健康で美しい髪を保てるようサポートします。<br>
                    トリートメントやケアのご提案はもちろん、ホームケアのアドバイスも大切にしています。
                </p>
            </div>
            <div class="concept-image">
                <img src="/img/concept_counseling.jpg" alt="カウンセリング">
            </div>
        </section>
        <!-- 左：画像 / 右：テキスト -->
        <section class="concept-block reverse fade-up">
            <div class="concept-text">
                <h2>Design</h2>
                <p>
                    一人ひとりの魅力を引き出すデザインを心がけています。<br>
                    トレンドを取り入れながらも、ライフスタイルや雰囲気に自然に溶け込むスタイルを。<br>
                    「自分らしさ」を大切にしたヘアデザインをご提案いたします。
                </p>
            </div>
            <div class="concept-image">
                <img src="/img/concept_cut.jpg" alt="カット">
            </div>
        </section>
    </main>

    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>
    
	<!-- ページトップボタン -->
	<a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
	<?php echo $this->element('page_top_script'); ?>

    <?= $this->element('fade_up_script') ?>
</body>
</html>
