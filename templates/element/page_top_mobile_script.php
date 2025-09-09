<!-- レスポンシブ　ページトップボタン -->
<script>
	document.addEventListener('DOMContentLoaded', function () {
	const pagetopMobile = document.getElementById('pagetop-mobile');
	const footer = document.querySelector('footer');
	const footerHeight = 150; // フッターの高さ
	const showPoint = 50; // この位置までスクロールしたら表示

	function togglePagetopMobile() {
		const scrollY = window.scrollY;
		const windowH = window.innerHeight;
		const docH = document.body.offsetHeight;

		// スクロール位置で表示・非表示を切り替え
		if (scrollY > showPoint) {
		pagetopMobile.classList.add('show');
		} else {
		pagetopMobile.classList.remove('show');
		}

		// フッターに被らないよう調整
		const overlap = (scrollY + windowH) - (docH - footerHeight);
		if (overlap > 0) {
		pagetopMobile.style.bottom = (overlap + 20) + "px";
		} else {
		pagetopMobile.style.bottom = "20px";
		}
	}

	window.addEventListener('scroll', togglePagetopMobile);
	togglePagetopMobile(); // 初期状態チェック

	// クリックでスムーズスクロール
	pagetopMobile.addEventListener('click', function (e) {
		e.preventDefault();
		window.scrollTo({ top: 0, behavior: 'smooth' });
	});
	});
</script>