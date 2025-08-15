
<!-- 上部メニュー -->
<header id="main-header" style="background-color: #ffca58;">
    <div class="header-inner">
        <nav class="navGlobal navLeft">
            <ul class="navGlobalIn">
                <li><a href="/managements/administratorLoginSuccess/"><span>Home</span></a></li>
                <li><a href="/blogs/addAdmin/"><span>New Post</span></a></li>
                <li><a href="/blogs/listDraftAdmin/"><span>Draft List</span></a></li>
                <li><a href="/blogs/listPublishedAdmin/"><span>Published List</span></a></li>
            </ul>
        </nav>
        <div class="spica-logo-top">
            <a href="/managements/administratorLoginSuccess/"><img src="/img/spica-logo-top.png" alt="hair atelier spica"></a>
        </div>
        <nav class="navGlobal navRight">
            <ul class="navGlobalIn">
                <li><a href="/gallerys/styleUploadAdmin/"><span>Add Image</span></a></li>
                <li><a href="/gallerys/styleListAdmin/"><span>Image List</span></a></li>
                <li><a href=""><span>Access Log</span></a></li>
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
        <li><a href="/managements/administratorLoginSuccess/">HOME<br>&nbsp;</a></li>
        <li><a href="/blogs/addAdmin/">BLOG<br>New Post</a></li>
        <li><a href="/blogs/listDraftAdmin/">BLOG<br>Draft List</a></li>
        <li><a href="/blogs/listPublishedAdmin/">BLOG<br>Published List</a></li>
        <li><a href="/gallerys/styleUploadAdmin/">GALLERY<br>Add Image</a></li>
        <li><a href="/gallerys/styleListAdmin/">GALLERY<br>Image List</a></li>
        <li><a href="">ACCESS LOG<br>&nbsp;</a></li>
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
