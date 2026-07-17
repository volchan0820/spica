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

<body class="no-page-image">
    <?php echo $this->element('spica_header'); ?>

    <h1 class="spica-title fade-up">Magnet</h1>

    <div class="contents-wrapper">
        <main class="aujua-section">
            <section class="magnet-section fade-up">
                <span class="product-subtitle fade-up">PROFESSIONAL TOOL</span>
                <div class="magnet-image">
                    <img src="/assets/images/product/magnet/magnet-1.jpeg" alt="Magnet ドライヤー・ヘアアイロン">
                </div>
                <div class="magnet-lead fade-up">
                    <p>
                        軽量・速乾・ツヤ。<br>
                        すべてを叶えるプロフェッショナルドライヤー。
                    </p>
                    <p>
                        柔らかい質感、しっとり、サラサラ。<br>
                        髪の仕上がりを、自分好みにカスタマイズできます。
                    </p>
                </div>
                <div class="magnet-block fade-up">
                    <h3>乾かすだけで、綺麗になる。</h3>
                    <p>
                        温度と風量を細かく調整でき、<br>
                        髪に余計な負担をかけずに時短ドライ。
                    </p>
                    <p>
                        spicaでも、<br>
                        実際に施術中のアイテムとして使用しています。
                    </p>
                    <p>
                        毎日のドライ時間が短くなり、<br>
                        日々のケアが自然と楽になります。
                    </p>
                </div>
                <div class="magnet-block fade-up">
                    <h3>むとう的、使いやすさ No.1。</h3>
                    <p>
                        Magnetのコテは、<br>
                        熱ダメージを抑えながら、カールが長持ち。
                    </p>
                    <p>
                        初心者でも巻きやすいグリップで、<br>
                        艶のあるウェーブが誰でも再現できます。
                    </p>
                </div>
                <h3 style="text-align:center; font-size:2.2rem; margin-bottom:40px;">
                    こんな方におすすめ
                </h3>
                <ul class="magnet-list fade-up">
                    <li>毎朝のスタイリングを楽にしたい</li>
                    <li>巻きが取れやすい</li>
                    <li>スタイリング中の腕の疲れを減らしたい</li>
                    <li>美容室の仕上がりを家でもキープしたい</li>
                </ul>
                <p class="magnet-closing fade-up">
                    気になる方は、<br>
                    実際に手に取って風量や重さをお試しいただけます。
                </p>
            </section>
        </main>
        <!-- BACKボタン -->
        <?= $this->element('back_button', ['url' => '/spica/products/']) ?>
    </div>

    <!-- フッター -->
    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
    <?php $pageTopFooterOffsetPc = 100; ?>
    <a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
    <?= $this->element('page_top_script', array('pageTopFooterOffsetPc' => $pageTopFooterOffsetPc)); ?>

    <!-- レスポンシブ　ページトップボタン -->
    <?php $pageTopFooterOffset = 0; ?>
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/pagetop.png" alt="ページトップへ"></a>
    <?php echo $this->element('page_top_mobile_script',array('pageTopFooterOffset' => $pageTopFooterOffset)); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>
</body>
</html>