<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hair atelier spicaのこだわり</title>
    <meta name="description" content="Hair atelier spicaは、似合わせカットと弱酸性薬剤で髪に優しく、心も整う美容室を目指しています。">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive/responsive_sm.css">
    <link rel="stylesheet" href="/css/responsive/responsive_xs.css">

	<!-- フォントの高速化 -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- 使用フォント Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet"> <!-- 手書き風丸ゴシック font-family: "Tsukimi Rounded", sans-serif; -->
	<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet"> <!-- 丸ゴシック font-family: "Zen Maru Gothic", sans-serif; -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet"> <!-- メイリオに近い font-family: 'Noto Sans JP', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet"> <!-- 明朝体 font-family: 'Zen Old Mincho', serif; -->

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-imge">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">GALLERY</h1>

    <div class="filter-area fade-up">
        <select id="styleFilter" aria-label="スタイルで絞り込み">
            
            <?php foreach ($styles as $value => $label): ?>
                <option value="<?= h($value) ?>"><?= h($label) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="grid fade-up">
        <?php foreach ($galleries as $gallery): ?>
            <div class="grid-item"
                data-style="<?= h($gallery->style) ?>"
                data-menu1="<?= h($gallery->menu1) ?>"
                data-menu2="<?= h($gallery->menu2) ?>"
                data-menu3="<?= h($gallery->menu3) ?>"
                data-menu4="<?= h($gallery->menu4) ?>"
                data-menu5="<?= h($gallery->menu5) ?>"
                data-note="<?= h($gallery->note) ?>">
                <img src="/img/<?= h($gallery->image_path) ?>" alt="ギャラリー画像">
                
            </div>
        <?php endforeach; ?>
    </div>

    <footer class="footer">
        <?= $this->element('spica_footer') ?>
    </footer>

    <!-- モーダル表示用 -->
    <div id="imageModal" class="modal">
        <div class="modal-image-wrapper">
            <span class="modal-close">&times;</span>
            <img class="modal-content" id="modalImage">
        </div>
        <div id="modalInfo" class="modal-info"></div>
    </div>

    <?= $this->element('fade_up_script') ?>    
</body>
</html>

<script>
    const styleLabels = {
        short: 'ショート',
        bob: 'ボブ',
        medium: 'ミディアム',
        long: 'ロング'
    };

    const menuLabels = {
        cut: 'カット',
        color: 'カラー',
        perm: 'パーマ',
        straight: 'ストレート',
        treatment: 'トリートメント',
    };

    $(document).ready(function () {
        var $grid = $('.grid');
        var msnry = null;

        function initMasonry() {
            if (msnry) {
                msnry.destroy();
            }
            msnry = new Masonry($grid[0], {
                itemSelector: '.grid-item:not([style*="display: none"])',
                columnWidth: '.grid-item',
                percentPosition: true,
                gutter: 16
            });
        }

        // 画像の読み込みが完了してからMasonryを初期化
        imagesLoaded($grid[0], function () {
            initMasonry();
        });

        // Select2のchangeイベントで絞り込み
        $('#styleFilter').on('change', function () {
            var styleVal = $(this).val();
            $('.grid-item').each(function () {
                // valueが"all"または空なら全て表示
                var match = styleVal === 'all' || $(this).data('style') === styleVal;
                $(this).toggle(match);
            });
            imagesLoaded($('.grid')[0], function () {
                initMasonry();
            });
        });

        // 画像クリックでモーダル表示
        $('.grid-item img').on('click', function () {
            const $parent = $(this).closest('.grid-item');
            const imgSrc = $(this).attr('src');
            const styleCode = $parent.data('style');
            const styleLabel = styleLabels[styleCode] || styleCode;

            const menus = [];
            for (let i = 1; i <= 5; i++) {
                const menuCode = $parent.data('menu' + i);
                if (menuCode) {
                    menus.push(menuLabels[menuCode] || menuCode);
                }
            }

            const note = $parent.data('note') || '';

            $('#modalImage').attr('src', imgSrc);

            const infoHtml = `
                <p>スタイル：${styleLabel}</p>
                <p>メニュー：${menus.join('、')}</p>
                ${note ? `<p style="margin-top:1em;">${note}</p>` : ''}
            `;
            $('#modalInfo').html(infoHtml);

            $('#imageModal').fadeIn();
        });

        // モーダル閉じる
        $('.modal-close, #imageModal').on('click', function (e) {
            if (e.target.id === 'imageModal' || $(e.target).hasClass('modal-close')) {
                $('#imageModal').fadeOut();
            }
        });
    });
</script>