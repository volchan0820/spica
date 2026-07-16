<!-- レスポンシブ　ページトップボタン -->
<script>
document.addEventListener('DOMContentLoaded', function () {

	const pagetopMobile = document.getElementById('pagetop-mobile');
	const footer = document.querySelector('footer');
	const showPoint = 50;

	const defaultBottom = <?= isset($pageTopBottom) ? $pageTopBottom : 20 ?>;
	const footerOffset = <?= isset($pageTopFooterOffset) ? $pageTopFooterOffset : 20 ?>;

	// bottomは固定
	pagetopMobile.style.bottom = defaultBottom + "px";

	function togglePagetopMobile() {

		const scrollY = window.scrollY;
		const windowH = window.innerHeight;
		const docH = document.documentElement.scrollHeight;

		const footerHeight = footer ? footer.offsetHeight : 150;

		// 表示・非表示
		if (scrollY > showPoint) {
			pagetopMobile.classList.add('show');
		} else {
			pagetopMobile.classList.remove('show');
		}

		// フッターとの重なり
		const overlap = (scrollY + windowH) - (docH - footerHeight);

		if (overlap > 0) {
			pagetopMobile.style.transform =
				'translateY(' + (-(overlap + footerOffset)) + 'px)';
		} else {
			pagetopMobile.style.transform = 'translateY(0)';
		}
	}

	// スクロール処理を最適化
	let ticking = false;

	window.addEventListener('scroll', function () {
		if (!ticking) {
			requestAnimationFrame(function () {
				togglePagetopMobile();
				ticking = false;
			});
			ticking = true;
		}
	}, { passive: true });

	window.addEventListener('resize', togglePagetopMobile);

	togglePagetopMobile();

	pagetopMobile.addEventListener('click', function (e) {
		e.preventDefault();
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		});
	});

});
</script>