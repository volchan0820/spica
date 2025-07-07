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

    <?= $this->Form->create(null, ['type' => 'file', 'id' => 'galleryForm']) ?>
        <?= $this->Form->control('style', ['label' => 'スタイル', 'type' => 'select', 'options' => $styleOptions, 'empty' => '選択してください']) ?>
        <?= $this->Form->control('image_file', ['type' => 'file', 'label' => '画像ファイル']) ?>
        <?= $this->Form->button('投稿する') ?>
    <?= $this->Form->end() ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('galleryForm');
            form.addEventListener('submit', function (e) {
                const style = document.querySelector('select[name="style"]').value;
                const image = document.querySelector('input[type="file"][name="image_file"]').files[0];

                let message = '';

                if (!style && !image) {
                    message = "スタイルと画像は必須項目です。";
                } else if (!style) {
                    message = "スタイルを選択してください。";
                } else if (!image) {
                    message = "画像を添付してください。";
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