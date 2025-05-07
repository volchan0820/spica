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
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

    <title>浦添市の美容室spica | 似合わせカット×弱酸性薬剤のプライベートサロン</title>
    <meta name="description" content="沖縄県浦添市経塚のHair atelier spicaは、似合わせカットと弱酸性薬剤で髪に優しい施術を提供するプライベートサロン。カフェのような空間でリラックスしながら、理想のヘアスタイルに。">
</head>

<body>

    <?php echo $this->element('spica_header'); ?>

<!-- スライダー -->
<div class="slider">
    <img src="/img/cafe.jpg" alt="Slide 1">
    <img src="/img/cafe_1.jpg" alt="Slide 2">
    <img src="/img/cafe_2.jpg" alt="Slide 3">
</div>

<!-- ロゴ -->
<div class="spica-logo-main">
    <a href="/index.html"><img src="/img/spiica-logo-top.png" alt="hair atelier spica"></a>
</div>

</body>
</html>
