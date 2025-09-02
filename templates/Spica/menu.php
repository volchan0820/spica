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
/* body {
  font-family: "Hiragino Sans", "Noto Sans JP", sans-serif;
  background: #fff;
  margin: 0;
  padding: 0;
} */

.price-menu-frame {
  max-width: 800px;
  margin: 60px auto;
  padding: 20px 40px;
  border: 10px solid #a9a9a9;
  position: relative;
  text-align: center; /* ← 中央寄せの基準 */
}

.price-menu-frame::before {
  content: "";
  position: absolute;
  top: 15px;
  left: 15px;
  right: -35px;
  bottom: -35px;
  border: 10px solid #333;
}

/* ===== タイトル ===== */
.price-menu-title {
  display: inline-block; /* ← インラインブロックで中央揃え */
  background: #5a5a5a;
  color: #fff;
  font-size: 2.6rem;
  /* font-weight: bold; */
  text-align: center;
  padding: 16px 80px;
  /* margin: 0 auto 30px;
  margin-top: 40px; */
  letter-spacing: 9px;
}

/* 1行を横並びにする */
.price-menu-row {
  display: grid;
  grid-template-columns: 150px 1fr 100px; /* 左:カテゴリ, 中:メニュー名, 右:価格 */
  gap: 20px;
  align-items: center;
  padding: 6px 0;
}

/* 価格 */
.price-menu-row p:last-child {
  text-align: right;
  white-space: nowrap;
}

/* 区切り線 */
.price-menu-section {
  border-top: 1px solid #333;
  border-bottom: 1px solid #333;
  margin: 20px 0;
  padding: 10px 0;
}

.price-menu-items {
    font-family: "Zen Maru Gothic", sans-serif;
}
</style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-imge">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">MENU</h1>

    <!-- シングルメニュー -->
    <div class="price-menu-frame fade-up">
        <div class="price-menu-items">
            <h2 class="price-menu-title">SINGLE　MENU</h2>

            <!-- カット -->
            <div class="price-menu-section">
                <div class="price-menu-row">
                    <p>Cut</p>
                    <p>カット + トリートメント</p>
                    <p>¥7,700</p>
                </div>
            </div>

            <!-- パーマ -->
            <div class="price-menu-section">
                <div class="price-menu-row">
                    <p>Perm</p>
                    <p>パーマ + トリートメント</p>
                    <p>¥8,000</p>
                </div>
                <div class="price-menu-row">
                    <p></p>
                    <p>パーマ + トリートメント</p>
                    <p>¥8,000</p>
                </div>
            </div>

            <!-- ストレート -->
            <div class="price-menu-section">
                <div class="price-menu-row">
                    <p>Straight</p>
                    <p>ストレート + トリートメント</p>
                    <p>¥8,000</p>
                </div>
                <div class="price-menu-row">
                    <p></p>
                    <p>前髪ストレート + トリートメント</p>
                    <p>¥8,000</p>
                </div>
            </div>

            <!-- ヘッドスパ -->
            <div class="price-menu-section">
                <div class="price-menu-row">
                    <p>Head Spa</p>
                    <p>ヘッドスパ</p>
                    <p>¥8,000</p>
                </div>
            </div>

            <!-- トリートメント -->
            <div class="price-menu-section">
                <div class="price-menu-row">
                    <p>Treatment</p>
                    <p>トリートメント</p>
                    <p>¥8,000</p>
                </div>
            </div>
        </div>  
    </div>

    <!-- セットメニュー -->
    <div class="price-menu-frame fade-up">
        <div class="price-menu-items">
            <h2 class="price-menu-title">SET　MENU</h2>

            <!-- カット -->
            <div class="price-menu-section">
                <div class="price-menu-row">
                    <p>Cut</p>
                    <p>カット + トリートメント</p>
                    <p>¥7,700</p>
                </div>
            </div>

            <!-- パーマ -->
            <div class="price-menu-section">
                <div class="price-menu-row">
                    <p>Perm</p>
                    <p>パーマ + トリートメント</p>
                    <p>¥8,000</p>
                </div>
                <div class="price-menu-row">
                    <p></p>
                    <p>パーマ + トリートメント</p>
                    <p>¥8,000</p>
                </div>
            </div>

            <!-- ストレート -->
            <div class="price-menu-section">
                <div class="price-menu-row">
                    <p>Straight</p>
                    <p>ストレート + トリートメント</p>
                    <p>¥8,000</p>
                </div>
                <div class="price-menu-row">
                    <p></p>
                    <p>前髪ストレート + トリートメント</p>
                    <p>¥8,000</p>
                </div>
            </div>

            <!-- ヘッドスパ -->
            <div class="price-menu-section">
                <div class="price-menu-row">
                    <p>Head Spa</p>
                    <p>ヘッドスパ</p>
                    <p>¥8,000</p>
                </div>
            </div>

            <!-- トリートメント -->
            <div class="price-menu-section">
                <div class="price-menu-row">
                    <p>Treatment</p>
                    <p>トリートメント</p>
                    <p>¥8,000</p>
                </div>
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
