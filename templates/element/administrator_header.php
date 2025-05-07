<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理画面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
    /* 全体 */
    body, html {
        margin: 0;
        padding: 0;
    }
    .wrapper {
        display: flex;
    }

    /* サイドバー */
    .sidebar {
        position: fixed;
        top: 0;
        left: -250px; /* 最初は隠す */
        width: 250px;
        height: 100vh;
        background: rgb(255, 208, 106);
        padding: 20px;
        box-sizing: border-box;
        transition: left 0.3s;
        z-index: 1000;
    }

    .sidebar.active {
        left: 0; /* アクティブで表示 */
    }

    .sidebar-menu {
        list-style: none;
        padding: 0;
        margin-top: 60px;
    }

    .sidebar-menu li {
        margin: 20px 0;
        display: flex;
        align-items: center;
    }

    .sidebar-menu li i {
        margin-right: 10px;
    }

    .sidebar-menu a {
        color: #fff;
        text-decoration: none;
        font-size: 18px;
    }

    /* ハンバーガーアイコン */
    .hamburger {
        position: fixed;
        top: 15px;
        left: 15px;
        font-size: 28px;
        color: #333;
        cursor: pointer;
        z-index: 1100;
    }

    /* 背景の暗幕（オーバーレイ） */
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 0;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
        transition: width 0.3s;
        overflow: hidden;
        z-index: 900;
    }

    .overlay.active {
        width: 100%;
    }

    /* メインコンテンツ */
    .main-content {
        flex: 1;
        margin-left: 0;
        padding: 20px;
        transition: margin-left 0.3s;
    }

    @media (min-width: 768px) {
        .main-content {
            padding: 40px;
        }
    }
    </style>
</head>

<body>
    <!-- ハンバーガーアイコン -->
    <div class="hamburger">
        <i class="fas fa-bars"></i>
    </div>

    <!-- サイドバー -->
    <div class="sidebar">
        <ul class="sidebar-menu">
            <li>
                <i class="fas fa-home"></i>
                <a href="<?= $this->Url->build(['controller' => 'Managements', 'action' => 'administratorLoginSuccess']) ?>">TOP</a>
            </li>
            <li>
                <i class="fas fa-blog"></i>
                <a href="<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'add']) ?>">New Post</a>
            </li>
            <li>
                <i class="fas fa-edit"></i>
                <a href="<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'draftList']) ?>">Draft List</a>
            </li>
            <li>
                <i class="fas fa-book"></i>
                <a href="<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'blogList']) ?>">Published List</a>
            </li>
            <li>
                <i class="fas fa-sign-out-alt"></i>
                <a href="<?= $this->Url->build(['controller' => 'Managements', 'action' => 'administratorLogout']) ?>">LOGOUT</a>
            </li>
        </ul>
    </div>

    <!-- オーバーレイ -->
    <div class="overlay"></div>

    <script>
    $(function() {
        $('.hamburger').click(function() {
            $('.sidebar').toggleClass('active');
            $('.overlay').toggleClass('active');
        });

        $('.overlay').click(function() {
            $('.sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });
    });
    </script>
</body>
</html>
