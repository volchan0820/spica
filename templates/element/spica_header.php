<!-- 上部メニュー -->
<header id="main-header">
    <div class="header-inner">
        <nav class="navGlobal navLeft">
            <ul class="navGlobalIn">
                <li><a href="/spica/index/"><span class="en">HOME</span><span class="jp">ホーム</span></a></li>
                <li><a href="/spica/concept/"><span class="en">CONCEPT</span><span class="jp">コンセプト</span></a></li>
                <li><a href="/spica/menu/"><span class="en">MENU</span><span class="jp">メニュー</span></a></li>
                <li><a href="/spica/staff/"><span class="en">STAFF</span><span class="jp">スタッフ</span></a></li>
            </ul>
        </nav>
        <div class="spica-logo-top">
            <a href="/spica/index/"><img src="/img/spica-logo-top.png" alt="hair atelier spica"></a>
        </div>
        <nav class="navGlobal navRight">
            <ul class="navGlobalIn">
                <li><a href="/spica/gallery/"><span class="en">GALLERY</span><span class="jp">ギャラリー</span></a></li>
                <li><a href="/spica/blogList/"><span class="en">BLOG</span><span class="jp">ブログ</span></a></li>
                <li><a href="/spica/access/"><span class="en">ACCESS</span><span class="jp">アクセス</span></a></li>
                <li><a href="/spica/reservation/"><span class="en">RESERVE</span><span class="jp">WEB予約</span></a></li>
            </ul>
        </nav>      
        <div class="hamburger">
            <i class="fas fa-bars"></i>
            <i class="fas fa-times"></i>
        </div>
    </div>
</header>

<!-- レスポンシブ　ハンバーガーメニュー -->
<div class="sidebar">
    <ul class="sidebar-menu">
        <li><a href="/spica/index/">HOME<br>ホーム</a></li>
        <li><a href="/spica/concept/">CONCEPT<br>コンセプト</a></li>
        <li><a href="/spica/menu/">MENU<br>メニュー</a></li>
        <li><a href="/spica/staff/">STAFF<br>スタッフ</a></li>
        <li><a href="/spica/gallery/">GALLERY<br>ギャラリー</a></li>
        <li><a href="/spica/blogList/">BLOG<br>ブログ</a></li>
        <li><a href="/spica/access/">ACCESS<br>アクセス</a></li>
        <li><a href="/spica/reservation/">RESERVE<br>WEB予約</a></li>
    </ul>
    <!-- SNSアイコン横並び -->
    <div class="sidebar-sns">
        <a href="https://lin.ee/W4Ibxfb" target="_blank"><i class="fab fa-line"></i></a>
        <a href="https://www.instagram.com/hair_atelier_spica?igsh=dnpld2M5eHhvZG5z&utm_source=qr" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.tiktok.com/@hair.muto?_r=1&_t=ZS-91uOlD4Gvor" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://youtube.com/@spicahairatelier?si=XmP6hDmeuDWV4o12" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://x.com/hair_spica?s=21&t=fNQQekDrU1xZpY-c_-5fhA" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</div>

<!-- 背景オーバーレイ -->
<div class="overlay"></div>

<script>
    $(function () {
        $('.hamburger').click(function () {
            $('.sidebar').toggleClass('active');
            $('.overlay').toggleClass('active');
            $('.hamburger').toggleClass('active');
            $('body').toggleClass('no-scroll');
        });

        $('.overlay').click(function () {
            $('.sidebar').removeClass('active');
            $('.overlay').removeClass('active');
            $('.hamburger').removeClass('active');
            $('body').toggleClass('no-scroll');
        });
    });
</script>
