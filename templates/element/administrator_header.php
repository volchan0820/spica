
<!-- 上部メニュー -->
<header id="main-header" style="background-color: #ffca58;">
    <div class="header-inner">
        <nav class="navGlobal navLeft">
            <ul class="navGlobalIn">
                <li><a href="/blogs/addAdmin/"><span>BLOG<br>新規投稿</span></a></li>
                <li><a href="/blogs/listDraftAdmin/"><span>BLOG<br>下書き一覧</span></a></li>
                <li><a href="/blogs/listPublishedAdmin/"><span>BLOG<br>公開済み記事一覧</span></a></li>
            </ul>
        </nav>
        <div class="spica-logo-top">
            <a href="/managements/administratorLoginSuccess/"><img src="/img/spica-logo-top.png" alt="hair atelier spica"></a>
        </div>
        <nav class="navGlobal navRight">
            <ul class="navGlobalIn">
                <li><a href="/gallerys/styleUploadAdmin/"><span>GALLERY<br>新規投稿</span></a></li>
                <li><a href="/gallerys/styleListAdmin/"><span>GALLERY<br>公開済みスタイル一覧</span></a></li>
                <li><a href="/managements/administratorLogout/"><span>Logout</span></a></li>
            </ul>
        </nav>      
        <div class="hamburger" style="right: initial;">
            <i class="fas fa-bars"></i>
            <i class="fas fa-times"></i>
        </div>
    </div>
</header>

<!-- ハンバーガーメニュー内コンテンツ -->
<div class="sidebar">
    <ul class="sidebar-menu">
        <li><a href="/blogs/addAdmin/">BLOG<br>新規投稿</a></li>
        <li><a href="/blogs/listDraftAdmin/">BLOG<br>下書き一覧</a></li>
        <li><a href="/blogs/listPublishedAdmin/">BLOG<br>公開済み記事一覧</a></li>
        <li><a href="/gallerys/styleUploadAdmin/">GALLERY<br>新規投稿</a></li>
        <li><a href="/gallerys/styleListAdmin/">GALLERY<br>公開済みスタイル一覧</a></li>
        <li><a href="/managements/administratorLogout/">Logout<br>&nbsp;</a></li>
    </ul>
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
