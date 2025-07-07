<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->script('//code.jquery.com/jquery-3.6.0.min.js') ?>
    <?= $this->Html->script('script') ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    
    <!-- FontAwesomeを読み込む -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>管理画面</title>

    <style>
    /* メニューのボックススタイル */
    body .menu {
        width: 90%; /* 幅を90%に設定して少し大きく */
        max-width: 600px; /* 最大幅を600pxに制限 */
        padding: 20px; /* 内側の余白を増やす */
        margin:  0 auto;
    }

    /* メニューのボックススタイル */
    body .menu-box {
        width: 90%; /* 幅を90%に設定して少し大きく */
        max-width: 600px; /* 最大幅を600pxに制限 */
        padding: 20px; /* 内側の余白を増やす */
        background-color: #FFF;
        box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.16), 0 2px 4px 0 rgba(0, 0, 0, 0.12); /* 影を強調 */
        margin:  0 auto;
    }

    /* メニュータイトル */
    body .menu_title {
        font-size: 26px;
        color: #555;
        display: block;
        margin-bottom: 5px;
        font-family: "Tsukimi Rounded", sans-serif;
        font-style: normal;
        margin-left: 6%;
        text-align: left;
    }

    /* メニューリストのスタイル */
    body .menu_list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    body .menu_list li {
        margin: 10px 0;
    }

    /* メニュー項目（リンク）のスタイル */
    body .menu_list li a {
        text-decoration: none;
        color: #333;
        padding: 8px 15px;
        display: block;
        background-color: #f5f5f5;
        transition: background-color 0.3s;
        font-size: 18px;
        font-family: "Tsukimi Rounded", sans-serif;
        font-style: normal;
    }

    body .menu_list li a:hover {
        background-color:rgb(170, 170, 170);
        color: #fff;
    }
    </style>
</head>

<body>
    <?php echo $this->element('administrator_header'); ?>

    <div class="top-image">
        <img src="/img/spica-logo.png" alt="spica-logo">
    </div>

    <div class="menu">
        <h2 class="menu_title">Blog</h2>
        <div class="mui-panel menu-box">
            <ul class="menu_list">
                <li>
                    <?php echo $this->Html->link('New Post', ['controller' => 'Blogs', 'action' => 'add']); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Draft List', ['controller' => 'Blogs', 'action' => 'draft_list']); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Published Articles', ['controller' => 'Blogs', 'action' => 'blog_list']); ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="menu">
    <h2 class="menu_title">Gallery</h2>
    <div class="mui-panel menu-box">
        <ul class="menu_list">
            <li>
                <?php echo $this->Html->link('Add Image', ['controller' => 'Gallerys', 'action' => 'add']); ?>
            </li>
        </ul>
    </div>
</div>
</body>
</html>