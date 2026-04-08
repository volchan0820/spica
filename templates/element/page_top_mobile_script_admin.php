<!-- レスポンシブ　ページトップボタン（フッターなし） -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const pagetopMobile = document.getElementById('pagetop-mobile');
  const showPoint = 50; // この位置までスクロールしたら表示
  const bottomOffset = 20; // 下からの余白

  function togglePagetopMobile() {
    const scrollY = window.scrollY;

    // スクロール位置で表示・非表示を切り替え
    if (scrollY > showPoint) {
      pagetopMobile.classList.add('show');
    } else {
      pagetopMobile.classList.remove('show');
    }

    // 常に固定位置（フッター考慮なし）
    pagetopMobile.style.bottom = bottomOffset + "px";
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