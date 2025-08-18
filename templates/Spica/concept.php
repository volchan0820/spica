<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spica | concept</title>
    <meta name="description" content="concept">

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

    <h1 class="spica-title fade-up">CONCEPT</h1>

    <p class="concept-text fade-up">
        ここにはCONCEPTを書きます。ここにはCONCEPTを書きます。ここにはCONCEPTを書きます。ここにはCONCEPTを書きます。
        <br>
        ここにはCONCEPTを書きます。ここにはCONCEPTを書きます。ここにはCONCEPTを書きます。ここにはCONCEPTを書きます。
    </p>

    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <?= $this->element('fade_up_script') ?>
</body>
</html>
