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

	<!-- ダミー -->
	<div class="main-container">
		<div class="sec-concept">
			<h1>ダミーデータ</h1>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
			<p>ダミーデータダミーデータダミーデータ</p>
		</div>
	</div>

	<footer class="footer">
		<?php echo $this->element('spica_footer'); ?>
	</footer>

	<!-- ページトップボタン -->
	<a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
	<?php echo $this->element('page_top_script'); ?>
</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const pagetop = document.getElementById("pagetop");
  const footer = document.querySelector(".footer");

  if (pagetop && footer) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // フッターが見えたらボタンを上に移動
          pagetop.classList.add("stay-above-footer");
        } else {
          // フッターが見えなくなったら元に戻す
          pagetop.classList.remove("stay-above-footer");
        }
      });
    }, { threshold: 0 });

    observer.observe(footer);
  }
});
</script>
