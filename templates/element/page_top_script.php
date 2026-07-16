<!-- ページトップボタン -->
<script>
document.addEventListener('DOMContentLoaded', function() {

	const pagetop = document.getElementById('pagetop');
	const footer = document.querySelector('footer');
	const showPoint = 100; // 何pxスクロールで表示するか

	// フッター接近時の位置調整（数値を大きくすると上へ、小さくすると下へ）
	const footerOffset = <?= isset($pageTopFooterOffsetPc) ? $pageTopFooterOffsetPc : 20 ?>;

	window.addEventListener('scroll', function() {

		const scrollY = window.scrollY;
		const windowH = window.innerHeight;
		const docH = document.documentElement.scrollHeight;

		// フッターの高さを毎回取得（レイアウト変更にも対応）
		const footerHeight = footer ? footer.offsetHeight : 300;

		// ページトップボタンのフェードイン・フェードアウト
		if (scrollY > showPoint) {
			pagetop.classList.add('show');
		} else {
			pagetop.classList.remove('show');
		}

		// ページトップボタンがフッターに重ならないように手前で止める
		const overlap = (scrollY + windowH) - (docH - footerHeight);

		if (overlap > 0) {
			pagetop.style.bottom = (overlap + footerOffset) + "px";
		} else {
			pagetop.style.bottom = "100px";
		}

	});

	pagetop.addEventListener('click', function(e) {
		e.preventDefault();
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		});
	});

	// 初期表示時にもスクロール処理を一度実行
	window.dispatchEvent(new Event('scroll'));

});
</script>