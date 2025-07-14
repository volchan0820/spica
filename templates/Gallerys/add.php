<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>美容室spica BLOG | 浦添市の似合わせカットと弱酸性薬剤の施術事例・ヘアケア情報</title>
    <meta name="description" content="Hair atelier spicaのブログでは、似合わせカットの施術例や弱酸性薬剤による髪にやさしい施術、美容室の日常、ヘアケアのコツなどを発信しています。">
        
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive/responsive_sm.css">
    <link rel="stylesheet" href="/css/responsive/responsive_xs.css">

	<!-- フォントの高速化 -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- 使用フォント Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet">

    <!-- JavaScript -->
     <?= $this->Html->script('//code.jquery.com/jquery-3.6.0.min.js') ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
    <?php echo $this->element('administrator_header'); ?>

    <div class="top-image">
        <img src="/img/spica-logo.png" alt="spica-logo">
    </div>

    <h2 class="admin-title">Add Image</h2>

    <div class="form-wrapper">
    <?= $this->Form->create(null, ['type' => 'file', 'id' => 'galleryForm']) ?>
        <?= $this->Form->control('style', ['type' => 'select', 'label' => ['text' => 'スタイル <span class="required">必須</span>', 'escape' => false], 'options' => $styleOptions, 'empty' => '選択してください']) ?>
        <?= $this->Form->control('image_file', ['type' => 'file', 'label' => ['text' => '画像ファイル <span class="required">必須</span>', 'escape' => false]]) ?>
        <?= $this->Form->control('menu1', ['type' => 'select', 'label' => ['text' => 'メニュー① <span class="required">必須</span>', 'escape' => false], 'options' => $menuOptions1, 'empty' => '選択してください']) ?>
        <?= $this->Form->control('menu2', ['type' => 'select', 'label' => 'メニュー②', 'options' => $menuOptions2, 'empty' => '選択してください']) ?>
        <?= $this->Form->control('menu3', ['type' => 'select', 'label' => 'メニュー③', 'options' => $menuOptions3, 'empty' => '選択してください']) ?>
        <?= $this->Form->control('menu4', ['type' => 'select', 'label' => 'メニュー④', 'options' => $menuOptions4, 'empty' => '選択してください']) ?>
        <?= $this->Form->control('menu5', ['type' => 'select', 'label' => 'メニュー⑤', 'options' => $menuOptions5, 'empty' => '選択してください']) ?>
        <?= $this->Form->control('note', ['type' => 'textarea', 'label' => '自由記入欄', 'rows' => 4, 'placeholder' => '補足情報やコメントがあればここに記入']) ?>
        <?= $this->Form->button('投稿する') ?>
    <?= $this->Form->end() ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('galleryForm');
            form.addEventListener('submit', function (e) {
                const style = document.querySelector('select[name="style"]').value;
                const image = document.querySelector('input[type="file"][name="image_file"]').files[0];
                const menu1 = document.querySelector('select[name="menu1"]').value;

                let message = '';

                if (!style) {
                    message = "スタイルは必須項目です。";
                } else if (!image) {
                    message = "画像を添付してください。";
                } else if (!menu1) {
                    message = "スタイル①は必須項目です。";
                }

                if (message) {
                    alert(message);
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>