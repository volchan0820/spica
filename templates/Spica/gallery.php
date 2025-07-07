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

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<!-- フォントの高速化 -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- 使用フォント Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <style>
        .select2-container--default .select2-selection__placeholder {
            color: #333 !important; /* 普通の文字色にする */
        }
    </style>
</head>
<body>
    <?php echo $this->element('spica_header'); ?>

    <div class="spica-page-imge">
        <img src="/img/cafe_2.jpg" alt="hair atelier spica">
    </div>

    <h1 class="spica-title fade-up">GALLERY</h1>

    <div class="filter-area fade-up">
        <select id="styleFilter" aria-label="スタイルで絞り込み">
            <option value=""><?= h('全てのスタイル') ?></option>
            <?php foreach ($styles as $value => $label): ?>
                <option value="<?= h($value) ?>"><?= h($label) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="grid fade-up">
        <?php foreach ($galleries as $gallery): ?>
            <div class="grid-item" data-style="<?= h($gallery->style) ?>">
                <img src="/img/<?= h($gallery->image_path) ?>" alt="ギャラリー画像">
            </div>
        <?php endforeach; ?>
    </div>

    <footer class="footer">
        <?= $this->element('spica_footer') ?>
    </footer>

    <?= $this->element('fade_up_script') ?>    
</body>
</html>

<script>
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

        // Select2 初期化
        $('#styleFilter').select2({
            placeholder: "全てのスタイル",
            allowClear: true,
            width: 'resolve'
        });

        // Select2のchangeイベントで絞り込み
        $('#styleFilter').on('change', function () {
            var styleVal = $(this).val();
            $('.grid-item').each(function () {
                // valueが"all"または空なら全て表示
                var match = !styleVal || $(this).data('style') === styleVal;
                $(this).toggle(match);
            });
            imagesLoaded($('.grid')[0], function () {
                initMasonry();
            });
        });
    });
</script>