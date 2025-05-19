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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>浦添市の美容室spica | 似合わせカット×弱酸性薬剤のプライベートサロン</title>
    <meta name="description" content="沖縄県浦添市経塚のHair atelier spicaは、似合わせカットと弱酸性薬剤で髪に優しい施術を提供するプライベートサロン。カフェのような空間でリラックスしながら、理想のヘアスタイルに。">

    <style>
        .sns-fixed {
            position: fixed;
            top: 40%;
            right: 10px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 9999;
        }

        .sns-fixed a img {
            width: 40px;
            height: 40px;
            transition: transform 0.3s ease;
        }

        .sns-fixed a:nth-child(1) i {
            color: red;       /* Instagram → 赤 */
        }

        .sns-fixed a:nth-child(2) i {
             color: #00c300; }   /* LINE → 緑 */
        .sns-fixed a:nth-child(3) i { color: black; }     /* ハサミ → 黒 */

        .sns-fixed a img:hover {
        transform: scale(1.2);
        }
    </style>
</head>

<body>
    <!-- SNS固定アイコン -->
    <div class="sns-fixed">
        <a href="https://www.instagram.com/your_instagram" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="https://line.me/R/ti/p/your_line_id" target="_blank"><i class="fab fa-line fa-2x"></i></a>
        <a href="https://beauty.hotpepper.jp/slnH000000000/" target="_blank"><i class="fas fa-scissors fa-2x"></i></a>
    </div>

    <!-- 上部メニュー -->
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
