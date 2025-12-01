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
</head>

<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-img">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">PRIVACY POLICY</h1>

    <section class="privacy-policy-content">
        <h2 class="privacy-policy-title">個人情報に関するお取扱いについて</h2>
            <p class="privacy-policy-text" style="margin-bottom: 60px; text-align: center">
                hair atelier spica（以下「当店」といいます）は、個人情報保護の重要性を認識し、
                <br>
                以下の方針のもと、お客様の個人情報を適切に管理・運用いたします。
                <br>
                当店は、個人情報の保護に努めることで、
                安心して当店のサービスをご利用いただける環境を提供いたします。
            </p>
        <h3 class="privacy-policy-subtitle">1. 個人情報の管理</h3>
        <p class="privacy-policy-text">
            当店では、お客様の個人情報を正確かつ最新の状態で保管し、不正アクセス・紛失・破損・改ざん・漏洩などを防ぐため、
            <br>
            セキュリティシステムの運用、管理体制の整備、必要な対策を講じて安全管理に努めます。
        </p>
        <h3 class="privacy-policy-subtitle">2. 個人情報の利用目的</h3>
        <p class="privacy-policy-text">
            お客様からお預かりした個人情報は、ご予約確認・施術・お問い合わせ対応・同意をいただいた場合のキャンペーン情報のご案内など、
            <br>
            当店のサービス提供に必要な範囲で利用いたします。
        </p>
        <h3 class="privacy-policy-subtitle">3. 個人情報の第三者提供</h3>
        <p class="privacy-policy-text">
            当店は、お客様の同意がある場合や、業務委託先に必要な範囲で提供する場合、
            <br>
            または法令に基づき開示が必要な場合を除き、個人情報を第三者に提供いたしません。
        </p>
        <h3 class="privacy-policy-subtitle">4. 安全管理措置</h3>
        <p class="privacy-policy-text">
            個人情報への不正アクセス、漏洩、紛失、改ざん等を防ぐため、アクセス制限、パスワード管理、
            <br>
            セキュリティ対策、適切な運用体制を講じます。
        </p>
        <h3 class="privacy-policy-subtitle">5. 個人情報の開示・訂正・削除</h3>
        <p class="privacy-policy-text">
            お客様は、ご自身の個人情報について開示、訂正、削除を請求することができます。
            <br>
            請求される場合は、本人確認のうえで対応いたします。
        </p>
        <h3 class="privacy-policy-subtitle">6. クッキーおよびアクセス解析</h3>
        <p class="privacy-policy-text">
            当サイトでは、サービス向上のためにCookieやアクセス解析ツールを利用することがあります。
            <br>
            これらによって収集される情報は、個人を特定できる情報を含まない形で利用いたします。
        </p>
        <h3 class="privacy-policy-subtitle">7. 法令遵守と見直し</h3>
        <p class="privacy-policy-text">
            当店は、個人情報保護に関する法令およびガイドラインを遵守し、必要に応じて本ポリシーの内容を見直し改善に努めます。
        </p>
        <h3 class="privacy-policy-subtitle">8. お問い合わせ</h3>
        <p class="privacy-policy-text">
            個人情報の取扱に関するお問い合わせは、公式LINEまたは下記メールアドレスまでお願いいたします。<br>
            メール：<a href="mailto:info@atelier-spica.jp">info@atelier-spica.jp</a>
        </p>
    </section>

    <!-- フッター -->
    <footer class="footer">
        <?php echo $this->element('spica_footer'); ?>
    </footer>

    <!-- ページトップボタン -->
	<a href="#" class="pagetop" id="pagetop"><span class="pagetop-text">PAGE TOP</span></a>
	<?php echo $this->element('page_top_script'); ?>

    <!-- レスポンシブ　ページトップボタン -->
    <a href="#top" id="pagetop-mobile" class="page-top"><img src="/img/pagetop.png" alt="ページトップへ"></a>
    <?php echo $this->element('page_top_mobile_script'); ?>

    <!-- フェードアップ -->
    <?= $this->element('fade_up_script') ?>
</body>
</html>