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
</head>
<body>
<?php echo $this->element('spica_header'); ?>
        <div class="spica-page-imge">
            <img src="/img/cafe_2.jpg" alt="hair atelier spica">
        </div>
        <h1 class="spica-title fade-up">MENU</h1>

    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
	<a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
	<?php echo $this->element('page_top_script'); ?>

    <?= $this->element('fade_up_script') ?>
</body>
</html>
