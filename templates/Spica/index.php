<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>浦添市の美容室spica | 似合わせカット×弱酸性薬剤のプライベートサロン</title>
	<meta name="description" content="沖縄県浦添市経塚のHair atelier spicaは、似合わせカットと弱酸性薬剤で髪に優しい施術を提供するプライベートサロン。カフェのような空間でリラックスしながら、理想のヘアスタイルに。">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>

	<style>
	/* SNSのスタイル */
	.sns-fixed {
		position: fixed;
		top: 14%;
		right: 10px;
		display: flex;
		flex-direction: column;
		gap: 12px;
		z-index: 9999;
		background-color: white;
		padding: 12px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
	}
	.sns-fixed a img {
		width: 40px;
		height: 40px;
		transition: transform 0.3s ease;
	}
	.sns-fixed a:nth-child(1) i {
		color:rgb(0, 0, 0);
	}
	.sns-fixed a:nth-child(2) i {
		color:rgb(0, 0, 0);
	}        
	.sns-fixed a:nth-child(3) i {
		color:rgb(0, 0, 0);
	}
	.sns-fixed a:nth-child(4) i {
		color:rgb(0, 0, 0);
	}
	.sns-fixed a:nth-child(5) i {
		color:rgb(0, 0, 0);
	}
	.sns-fixed a img:hover {
		transform: scale(1.2);
	}


/* お試し */
.top-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
}
.top-block {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 80px;
    gap: 40px;
    padding-bottom: 60px;         /* 線との余白 */
    border-bottom: 1px solid #ccc; /* 下線を追加 */
}
.top-block:last-child {
    border-bottom: none;  /* 最後のブロックは線を消す */
    margin-bottom: 0;
    padding-bottom: 0;
}
.top-block .top-text {
    flex: 1;
}
.top-block .top-text h2 {
    font-size: 3.8rem;
    margin-bottom: 20px;
    text-align: left;
}
.top-block .top-text p {
    line-height: 1.8;
    font-size: 1.5rem;
    font-family: 'Zen Old Mincho', serif;
}
.top-block .top-section-image {
    flex: 1;
    text-align: center;
}
.top-block .top-section-image img {
    max-width: 100%;
    height: auto;
}
/* 偶数番目だけ左右を反転 */
.top-block.reverse {
    flex-direction: row-reverse;
}
/* スマホ対応 */
@media (max-width: 768px) {
    .top-block,
    .top-block.reverse {
        flex-direction: column;
    }
    .top-block .top-section-image,
    .top-block .top-text {
        text-align: center;
    }
}
/* 画像の背景に四角い枠を作る */
.top-section-image {
    position: relative;
    display: inline-block;
}
.top-section-image img {
    max-width: 100%;
    height: auto;
    display: block;
    position: relative;
    z-index: 2; /* 画像を前に */
}
/* 擬似要素で枠を作る */
.top-section-image::before {
    content: "";
    position: absolute;
    top: -20px;
    right: -20px;
    width: 100%;
    height: 100%;
    border: 1px solid #333;
    z-index: 1; /* 画像より後ろ */
}
	</style>
</head>
<body>
	<div class="sns-fixed">
		<a href="https://line.me/R/ti/p/your_line_id" target="_blank"><i class="fab fa-line"></i></a>
		<a href="https://www.instagram.com/your_instagram" target="_blank"><i class="fab fa-instagram"></i></a>
		<a href="https://beauty.hotpepper.jp/slnH000000000/" target="_blank"><i class="fab fa-tiktok"></i></a>
		<a href="" target="_blank"><i class="fab fa-youtube"></i></a>
		<a href="" target="_blank"><i class="fab fa-twitter"></i></a>
	</div>

	<?php echo $this->element('spica_header'); ?>

	<div class="container">
		<div class="slider">
			<img src="/img/cafe.jpg" alt="Slide 1">
			<img src="/img/cafe_1.jpg" alt="Slide 2">
			<img src="/img/cafe_2.jpg" alt="Slide 3">
		</div>
		<div class="spica-logo-main">
			<div class="glass-bg"></div>
			<img src="/img/spica-logo-top.png" alt="spica logo" />
		</div>
	</div>

    <main class="top-section">
        <!-- 左：画像 / 右：テキスト -->
        <section class="top-block reverse fade-up">
            <div class="top-text">
                <h2>CONCEPT</h2>
                <p>
                    お客様一人ひとりに合わせたスタイルを実現するため、
                    丁寧なカウンセリングを心がけています。<br>
                    髪質や骨格、ライフスタイルに合わせたご提案をいたします。
                </p>
            </div>
            <div class="top-section-image">
                <img src="/img/concept_counseling.jpg" alt="カウンセリング">
            </div>
        </section>
        <!-- 左：テキスト / 右：画像 -->
        <section class="top-block fade-up">
            <div class="top-text">
                <h2>MENU</h2>
                <p>
                    再現性の高いカットを大切にしています。<br>
                    ご自宅でも扱いやすく、日々のスタイリングが楽になるよう心掛けています。
                </p>
            </div>
            <div class="top-section-image">
                <img src="/img/concept_cut.jpg" alt="カット">
            </div>
        </section>
        <!-- 左：画像 / 右：テキスト -->
        <section class="top-block reverse fade-up">
            <div class="top-text">
                <h2>STAFF</h2>
                <p>
                    髪は日々の生活でダメージを受けやすいもの。<br>
                    定期的なメンテナンスを通して、健康で美しい髪を保てるようサポートします。<br>
                    トリートメントやケアのご提案はもちろん、ホームケアのアドバイスも大切にしています。
                </p>
            </div>
            <div class="top-section-image">
                <img src="/img/concept_counseling.jpg" alt="カウンセリング">
            </div>
        </section>
        <!-- 左：テキスト / 右：画像 -->
        <section class="top-block fade-up">
            <div class="top-text">
                <h2>GALLERY</h2>
                <p>
                    一人ひとりの魅力を引き出すデザインを心がけています。<br>
                    トレンドを取り入れながらも、ライフスタイルや雰囲気に自然に溶け込むスタイルを。<br>
                    「自分らしさ」を大切にしたヘアデザインをご提案いたします。
                </p>
            </div>
            <div class="top-section-image">
                <img src="/img/concept_cut.jpg" alt="カット">
            </div>
        </section>
        <!-- 左：画像 / 右：テキスト -->
        <section class="top-block reverse fade-up">
            <div class="top-text">
                <h2>BLOG</h2>
                <p>
                    髪は日々の生活でダメージを受けやすいもの。<br>
                    定期的なメンテナンスを通して、健康で美しい髪を保てるようサポートします。<br>
                    トリートメントやケアのご提案はもちろん、ホームケアのアドバイスも大切にしています。
                </p>
            </div>
            <div class="top-section-image">
                <img src="/img/concept_counseling.jpg" alt="カウンセリング">
            </div>
        </section>
        <!-- 左：テキスト / 右：画像 -->
        <section class="top-block fade-up">
            <div class="top-text">
                <h2>ACCESS</h2>
                <p>
                    一人ひとりの魅力を引き出すデザインを心がけています。<br>
                    トレンドを取り入れながらも、ライフスタイルや雰囲気に自然に溶け込むスタイルを。<br>
                    「自分らしさ」を大切にしたヘアデザインをご提案いたします。
                </p>
            </div>
            <div class="top-section-image">
                <img src="/img/concept_cut.jpg" alt="カット">
            </div>
        </section>
        <!-- 左：画像 / 右：テキスト -->
        <section class="top-block reverse fade-up">
            <div class="top-text">
                <h2>WEB予約</h2>
                <p>
                    髪は日々の生活でダメージを受けやすいもの。<br>
                    定期的なメンテナンスを通して、健康で美しい髪を保てるようサポートします。<br>
                    トリートメントやケアのご提案はもちろん、ホームケアのアドバイスも大切にしています。
                </p>
            </div>
            <div class="top-section-image">
                <img src="/img/concept_counseling.jpg" alt="カウンセリング">
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