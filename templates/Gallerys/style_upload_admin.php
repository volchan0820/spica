<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>gallery追加|管理画面</title>
   
    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
</head>
<body>
    <?php echo $this->element('administrator_header'); ?>

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