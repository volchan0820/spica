<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spica | MENU</title>
    <meta name="description" content="MENU">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>

  <style>
    body {
      font-family: "Hiragino Sans", "Noto Sans JP", sans-serif;
      margin: 0;
      padding: 40px;
      background: #fff;
      color: #333;
    }

    .menu-items {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* 常に2カラム */
      gap: 40px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .menu-item h2 {
      font-size: 1.8rem;
      margin-bottom: 15px;
      border-left: 5px solid #c27b48;
      padding-left: 10px;
    }

    .sub-item {
      display: flex;
      justify-content: space-between; /* 左にメニュー名、右に金額 */
      align-items: center;
      padding: 15px 20px;
    }

    /* 小項目を交互に色付け */
    .sub-item:nth-child(odd) {
      background: #f9f9f9;
    }

    .sub-item:nth-child(even) {
      background: #ffffff;
    }

    .sub-item p {
      margin: 0;
      font-size: 1rem;
    }

    /* 金額だけ強調 */
    .sub-item p:last-child {
      font-weight: bold;
      font-size: 1.1rem;
      color: #c27b48;
      margin-left: 20px;
      white-space: nowrap; /* 金額が折り返されないように */
    }
  </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-imge">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">Menu</h1>

    <div class="menu-items fade-up">
        <!-- カット -->
        <div class="menu-item">
            <h2>Cut</h2>
            <div class="sub-item">
                <p>カット + トリートメント</p>
                <p>¥7,700</p>
            </div>
        </div>

        <!-- カラー -->
        <div class="menu-item">
            <h2>Color</h2>
            <div class="sub-item">
                <p>カラー + トリートメント</p>
                <p>¥5,000</p>
            </div>
        </div>

        <!-- パーマ -->
        <div class="menu-item">
            <h2>Perm</h2>
            <div class="sub-item">
                <p>パーマ + トリートメント</p>
                <p>¥8,000</p>
            </div>
            <div class="sub-item">
                <p>パーマ + トリートメント</p>
                <p>¥8,000</p>
            </div>
        </div>

        <!-- ストレート -->
        <div class="menu-item">
            <h2>Straight</h2>
            <div class="sub-item">
                <p>ストレート + トリートメント</p>
                <p>¥8,000</p>
            </div>
            <div class="sub-item">
                <p>前髪ストレート + トリートメント</p>
                <p>¥8,000</p>
            </div>
        </div>

        <!-- ヘッドスパ -->
        <div class="menu-item">
            <h2>Head Spa</h2>
            <div class="sub-item">
                <p>ヘッドスパ</p>
                <p>¥7,000</p>
            </div>
        </div>

        <!-- トリートメント -->
        <div class="menu-item">
            <h2>Treatment</h2>
            <div class="sub-item">
                <p>トリートメント</p>
                <p>¥7,000</p>
            </div>
        </div>  
    </div>

    <h1 class="spica-title fade-up">Course Menu</h1>

    <div class="menu-items fade-up">
        <!-- カットカラー -->
        <div class="menu-item">
            <h2>Cut Color</h2>
            <div class="sub-item">
                <p>カット + カラー + トリートメント</p>
                <p>¥7,700</p>
            </div>
            <div class="sub-item">
                <p>カット + カラー + ブリーチ + トリートメント</p>
                <p>¥7,700</p>
            </div>
        </div>

        <!-- カットパーマ -->
        <div class="menu-item">
            <h2>Cut Perm</h2>
            <div class="sub-item">
                <p>カット + アルカリパーマ + トリートメント</p>
                <p>¥7,700</p>
            </div>
            <div class="sub-item">
                <p>カット + 弱酸性パーマ + トリートメント</p>
                <p>¥7,700</p>
            </div>
            <div class="sub-item">
                <p>カット + スパイラルパーマ + トリートメント</p>
                <p>¥7,700</p>
            </div>
            <div class="sub-item">
                <p>カット + デジタルパーマ + トリートメント</p>
                <p>¥7,700</p>
            </div>
            <div class="sub-item">
                <p>カット + 前髪パーマ + トリートメント</p>
                <p>¥7,700</p>
            </div>
        </div>

        <!-- カットカラーストレート -->
        <div class="menu-item">
            <h2>Cut Color Straight</h2>
            <div class="sub-item">
                <p>カット + ストレート + トリートメント</p>
                <p>¥7,700</p>
            </div>
            <div class="sub-item">
                <p>カット + カラー + ストレート + トリートメント</p>
                <p>¥7,700</p>
            </div>
            <div class="sub-item">
                <p>カット + 前髪ストレート + トリートメント</p>
                <p>¥7,700</p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
	<a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
	<?php echo $this->element('page_top_script'); ?>

    <?= $this->element('fade_up_script') ?>
</body>
</html>
