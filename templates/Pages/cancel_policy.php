<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spica | cancel policy</title>
    <meta name="description" content="privacy policy">

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
</head>

<body class="no-page-image">
    <?php echo $this->element('spica_header'); ?>

    <h1 class="spica-title">CANCEL POLICY</h1>

    <div class="contents-wrapper">
        <div class="cancel-policy-note fade-up">
            <h3>ご来店に関するお願い</h3>
            <p>・当店はプライベートサロンのため、お連れ様のご同伴はご遠慮いただいております。</p>
            <p style="font-size: 1.2rem;">　※ご同伴が必要な場合は、事前にご相談ください。</p>
            <p>・当店は中学生以下の施術はご予約を承っておりません。</p>
            <br>
            <h3>キャンセル料に関して</h3>
            <p>・ご予約日の前日の17：00以降のメニューの変更やキャンセルは、ご予約施術料金の80％を頂戴しております。</p>
            <p>・無断キャンセルはご予約施術料金の100％を頂戴しております。</p>
            <p>・15分以上の遅刻をされる場合は、ご予約しているメニューの施術ができないため、当日キャンセル扱いとなります。</p>
            <p style="font-size: 1.2rem;">　※ご予約のメニュー内容によっては、一部のメニューのみ施術可能な場合がございます。</p>
            <p style="font-size: 1.2rem;">　※一部のメニューのみ施術する場合も、料金は元々のご予約メニューの80％の料金を頂戴しております。</p>
        </div>
        <!-- BACKボタン -->
        <?= $this->element('back_button', ['url' => '/spica/reservation/']) ?>
    </div>

    <!-- フッター -->
    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
    <?php $pageTopFooterOffsetPc = 100; ?>
    <a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
    <?= $this->element('page_top_script', array('pageTopFooterOffsetPc' => $pageTopFooterOffsetPc)); ?>

    <!-- レスポンシブ　ページトップボタン -->
    <?php $pageTopFooterOffset = 0; ?>
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/pagetop.png" alt="ページトップへ"></a>
    <?php echo $this->element('page_top_mobile_script',array('pageTopFooterOffset' => $pageTopFooterOffset)); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>
</body>
</html>