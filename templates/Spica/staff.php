<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spica | スタッフ</title>
    <meta name="description" content="スタッフ">

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

    <h1 class="spica-title fade-up">STAFF</h1>

    <div class="staff-section fade-up">
        <div class="staff-item">
            <div class="staff-image">
                <img src="/img/staff.png" alt="スタッフ名">
                <h2 class="staff-name">氏　名<a href="https://www.instagram.com/youraccount" target="_blank" class="instagram-link"><i class="fab fa-instagram"></i></a></h2>
            </div>
            <div class="staff-info">
                <h3 class="staff-section-title">経歴</h3>
                    <p class="staff-text">
                        兵庫県芦屋市のハイエンドサロンにて、上質を求めるお客様に向き合いながら、繊細な技術と洗練された提案力を磨きました。<br>
                        その後、地元・沖縄へと拠点を移し、フリーランススタイリスト経験を積み重ね、一人ひとりの髪質やライフスタイルに合わせた“似合わせ”スタイルを追求しながら、お客様との信頼関係を何より大切にしてきました。<br>
                        そして2025年、沖縄県浦添市にて「Hair atelier spica（ヘアアトリエスピカ）」をオープン。これまでの経験を活かし、丁寧なカウンセリングと確かな技術で、その人らしい美しさを引き出すヘアデザインを提供しています。
                    </p>
                <h3 class="staff-section-title">資格・実績</h3>
                    <ul class="staff-text">
                        <li>・aujuaソムリエ知識カリキュラム</li>
                        <li>・ヘアケアソムリエ(aujua)カリキュラム</li>
                    </ul>
                <h3 class="staff-section-title">得意な技術</h3>
                    <p class="staff-text">
                        カット、ショート
                    </p>
                <h3 class="staff-section-title">趣味</h3>
                    <p class="staff-text">
                        魚釣り
                    </p>
            </div>
        </div>
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