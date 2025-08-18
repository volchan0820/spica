<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>gallery一覧|管理画面</title>

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
</head>
<body>
    <?php echo $this->element('administrator_header'); ?>

    <h1 class="admin-title fade-up">Image List</h1>

    <div class="filter-area fade-up">
        <div class="select-wrapper">
            <select id="styleFilter" aria-label="スタイルで絞り込み">
                <?php foreach ($styles as $value => $label): ?>
                    <option value="<?= h($value) ?>"><?= h($label) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
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

    <!-- モーダル表示用 -->
    <div id="imageModal" class="modal">
        <div class="modal-image-wrapper">
            <span class="modal-close">&times;</span>
            <img class="modal-content" id="modalImage">
        </div>
        <div id="modalInfo" class="modal-info"></div>
            <?= $this->Form->postLink('削除する',['action' => 'imageDelete', $gallery->id],['confirm' => '削除してもよろしいですか？', 'class' => 'btn btn-delete']) ?>
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

    let scrollPosition = 0;
    function lockBodyScroll() {
        scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        document.body.classList.add('modal-open');
        document.body.style.position = 'fixed';
        document.body.style.top = `-${scrollPosition}px`;
        document.body.style.left = '0';
        document.body.style.right = '0';
        document.body.style.width = '100%';
    }
    function unlockBodyScroll() {
        document.body.classList.remove('modal-open');
        document.body.style.position = '';
        document.body.style.top = '';
        document.body.style.left = '';
        document.body.style.right = '';
        document.body.style.width = '';
        window.scrollTo(0, scrollPosition);
    }

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

            $('#imageModal').fadeIn(() => {
                lockBodyScroll(); // スクロール停止
            });
        });

        // モーダル閉じる
        $('.modal-close, #imageModal').on('click', function (e) {
            if (e.target.id === 'imageModal' || $(e.target).hasClass('modal-close')) {
                $('#imageModal').fadeOut(() => {
                    unlockBodyScroll(); // スクロール再開
                });
            }
        });
    });
</script>