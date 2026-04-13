<!-- ページトップボタン -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const pagetop = document.getElementById('pagetop');
		const footer = document.querySelector('footer');
		const footerHeight = 300; // フッターの高さ
		const showPoint = 100; // 何pxスクロールで表示するか

		window.addEventListener('scroll', function() {
			const scrollY = window.scrollY;
			const windowH = window.innerHeight;
			const docH = document.body.offsetHeight;

			// ページトップボタンの動きをフェードイン、フェードアウト
			if (scrollY > showPoint) {
				pagetop.classList.add('show');
			} else {
				pagetop.classList.remove('show');
			}

			// ページトップボタンがフッターに重ならないように手前で止める
			const overlap = (scrollY + windowH) - (docH - footerHeight);
			if (overlap > 0) {
				// フッター接近時の位置調整（値を大きくすると下に、小さくすると上に移動）
				pagetop.style.bottom = (overlap + -80) + "px";
			} else {
				// デフォルトの位置調整（値を大きくすると下に、小さくすると上に移動）
				pagetop.style.bottom = "100px";
			}
		});

		pagetop.addEventListener('click', function(e) {
			e.preventDefault();
			window.scrollTo({ top: 0, behavior: 'smooth' });
		});
	});
</script>