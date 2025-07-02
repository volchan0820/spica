<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Spica</title>
    <style>
        /* ロゴのスタイル */
        .spica-logo-top {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .spica-logo-top img {
            height: 70px;
            object-fit: contain;
        } 
        #main-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1100;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1200px;
        }
        /* 左右のナビゲーションメニュー */
        .navGlobal {
            display: flex;
            align-items: center;
        }
        .navGlobalIn {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .navGlobalIn li {
            margin: 0 15px;
            margin: 20px;
        }
        .navGlobalIn li a {
            position: relative;
            display: block;
            color: #555;
            font-size: 14px;
            text-align: center;
            font-family: "Tsukimi Rounded", sans-serif;
            overflow: hidden;
            height: 1.5em;
            min-width: 80px; /* 文字に余白をもたせる */
        }
        .navGlobalIn li a .en {
            display: block;
            transition: opacity 0.3s ease;
        }
        .navGlobalIn li a:hover .en {
            opacity: 0;
        }
        .navGlobalIn li a .jp {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        opacity: 0;
        transition: opacity 0.3s ease;
        /* 虹色グラデーションの初期設定 */
        background: linear-gradient(90deg, red, orange, yellow, green, blue, indigo, violet);
        background-size: 300% 100%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        animation: none;
        }
        .navGlobalIn li a:hover .jp {
        opacity: 1;
        animation: rainbowFlow 2s linear 1;
        }
        @keyframes rainbowFlow {
        0% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
        }
    </style>
</head>

<body>
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
                <li><a href="/spica/blog/"><span class="en">BLOG</span><span class="jp">ブログ</span></a></li>
                <li><a href="/spica/access/"><span class="en">ACCESS</span><span class="jp">アクセス</span></a></li>
                <li><a href="/spica/reservation/"><span class="en">WEB予約</span><span class="jp">WEB予約</span></a></li>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>
