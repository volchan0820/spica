<!DOCTYPE html>
<html lang="ja">
<head>
	<?= $this->Html->script('//code.jquery.com/jquery-3.6.0.min.js') ?>
	<?= $this->Html->script('script') ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Noto+Sans+JP|Noto+Serif+JP:300,400,500|Raleway:400,500,700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

	<title>浦添市の美容室spica | 似合わせカット×弱酸性薬剤のプライベートサロン</title>
	<meta name="description" content="沖縄県浦添市経塚のHair atelier spicaは、似合わせカットと弱酸性薬剤で髪に優しい施術を提供するプライベートサロン。カフェのような空間でリラックスしながら、理想のヘアスタイルに。">

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

	/* ページトップボタンのスタイル */
	.pagetop {
		position: fixed;
		bottom: 100px;
		left: 95%;
		display: inline-block;
		text-decoration: none;
		color: #555;
		font-size: 12px;
		font-family: 'Arial', sans-serif;
		writing-mode: vertical-lr;
		text-orientation: mixed;
		letter-spacing: 0.2em;
		z-index: 1000;
		cursor: pointer;
	}
	.pagetop-text {
		display: inline-block;
		transform: translateY(80px);
	}
	.pagetop::after {
		content: '';
		position: absolute;
		top: 0;
		left: 100%;
		transform: translateX(-50%);
		width: 0.5px;
		height: 160px;
		background-color: #555;
		transition: none;
		pointer-events: none;
	}
	.pagetop:hover::after {
		animation: disappearAndGrow 1.4s forwards;
	}
	@keyframes disappearAndGrow {
		0% {
		opacity: 1;
		height: 160px;
		}
		10% {
		opacity: 0;
		height: 160px;
		}
		30% {
		opacity: 0;
		height: 0;
		}
		100% {
		opacity: 1;
		height: 160px;
		}
	}
	.pagetop::before {
		content: '';
		position: absolute;
		left: 11px;
		width: 10px;
		height: 20px;
		border-left: 0.5px solid #555;
		transform: rotate(45deg);
		background: transparent;
		box-sizing: border-box;
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
	<div class="main-container">
		<div class="sec-concept">
			<h1>concept</h1>
			<p>test</p>
		</div>
	</div>

	<footer class="footer">
		<?php echo $this->element('spica_footer'); ?>
	</footer>
</body>
</html>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const pagetop = document.getElementById('pagetop');
		// 初期非表示
		pagetop.style.display = 'none';

		window.addEventListener('scroll', function() {
		if (window.pageYOffset > 50) {
			pagetop.style.display = 'inline-block';
		} else {
			pagetop.style.display = 'none';
		}
		});

		pagetop.addEventListener('click', function(e) {
		e.preventDefault();
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		});
		});
	});
</script>
