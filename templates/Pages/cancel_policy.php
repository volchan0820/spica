<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spica | privacy policy</title>
    <meta name="description" content="privacy policy">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>

        <style>


    .cancel-policy-note {
        background-color: #ffe6eb; /* 薄いピンク */
        border: 2px solid #f5b5c0; /* 枠線 */
        padding: 25px;
        padding-bottom: 80px;
        margin: 40px auto;
        max-width: 650px;
        text-align: center;
        font-family: 'Zen Old Mincho', serif;
        color: #333;
        font-size: 1.2rem; /* 全体の文字サイズをアップ */
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }

    .cancel-policy-note h2 {
        font-size: 1.8rem; /* タイトルも大きめに */
        margin-top: 20px;
        margin-bottom: 60px;
        font-weight: bold;
        font-family: 'Zen Old Mincho', serif;
    }

    .cancel-policy-note h3 {
        font-size: 1.4rem; /* タイトルも大きめに */
        margin-top: 20px;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left;
        font-family: 'Zen Old Mincho', serif;
    }

    .cancel-policy-note p {
        font-size: 1.1rem; /* 各段落を少し大きく */
        line-height: 1.9;
        /* margin: 10px 0; */
        text-align: left;
    }

    </style>
</head>

<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-imge">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">CANCEL POLICY</h1>

    <div class="cancel-policy-note fade-up">
        <h2>ご予約に関する大切なご案内</h2>
        <h3>ご来店・ご予約に関して</h3>
        <p>・当店はプライベートサロンのため、お連れ様はご遠慮いただいています。</p>
        <p>・当店は中学生以下の施術はご予約を承っておりません。</p>
        <br>
        <h3>キャンセル料に関して</h3>
        <p>・ご予約日の前日の17：00以降のメニューの変更やキャンセルは、ご予約施術料金の80％を頂戴しております。</p>
        <p>・無断キャンセルはご予約施術料金の100％を頂戴しております。</p>
        <p>・15分以上の遅刻をされる場合は、ご予約しているメニューの施術ができないため、当日キャンセル扱いとなります。</p>
        <p style="font-size: 1rem; color:red;">　※ご予約のメニュー内容によっては、一部のメニューのみ施術可能な場合がございます。</p>
        <p style="font-size: 1rem; color:red;">　※一部のメニューのみ施術場合も、料金は元々のご予約メニューの80％の料金を頂戴しております。</p>
        </p>
    </div>

    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <?= $this->element('fade_up_script') ?>
</body>
</html>