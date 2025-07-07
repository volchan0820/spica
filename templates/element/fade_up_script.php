<!-- フェードアップアニメーションのスクリプト -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const fadeElems = document.querySelectorAll('.fade-up');

    function showOnScroll() {
        const windowHeight = window.innerHeight;

        fadeElems.forEach(el => {
            const rect = el.getBoundingClientRect();

            if (rect.top < windowHeight * 0.9) {
                el.classList.add('show');
            }
        });
    }

    // 初期表示時とスクロール時に実行
    window.addEventListener('scroll', showOnScroll);
    window.addEventListener('load', showOnScroll);
});
</script>
