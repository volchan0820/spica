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

    <div class="spica-page-img">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">CONCEPT</h1>

    <div class="contents-wrapper">
        <main class="concept-section">
            <!-- 左：テキスト / 右：画像 -->
            <section class="concept-block fade-up">
                <div class="concept-text">
                    <h2>Counseling</h2>
                    <p>
                        カウンセリングでは、お客様の髪質・クセ・骨格を丁寧にチェックし、生活スタイルや好みに合ったデザインを導き出します。<br>
                        一度きりの仕上がりではなく、「次の日からも扱いやすい髪」であることを最も大切にしています。
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
                        髪質や骨格、毛流れを正確に見極め、乾かし方や日々の扱いまで計算した“再現性の高いカット”に徹しています。<br>
                        細部までコントロールしたカットで、どこから見ても【美しいシルエット】をつくることにこだわっています。
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
                        全メニューにトリートメント工程を組み込み、施術による負担を最小限に抑えています。<br>
                        積み重ねるほどに髪の土台が整い、通うたびに扱いやすい美しいコンディションへ導きます。<br>
                        お客様の髪が、次の来店まで心地よく過ごせるように。<br>
                        そのための“続く美しさ”をつくることにこだわっています。
                    </p>
                </div>
                <div class="concept-image">
                    <img src="/img/concept_counseling.jpg" alt="カウンセリング">
                </div>
            </section>
        </main>
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
