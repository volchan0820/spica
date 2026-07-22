<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>管理画面 | TOP</title>

    <!-- CSS -->
    <?php echo $this->element('head_css'); ?>
    <!-- 使用フォント -->
    <?php echo $this->element('head_fonts'); ?>
    <!-- JavaScript -->
    <?php echo $this->element('head_scripts'); ?>
</head>

<body>
    <?php echo $this->element('administrator_header'); ?>

    <?= $this->Flash->render() ?>

    <div class="menu-content">
        <div class="menu">
            <h2 class="menu-title">Blog</h2>
            <div class="mui-panel menu-box">
                <ul class="menu_list">
                    <li><?php echo $this->Html->link('新規投稿', ['controller' => 'Blogs', 'action' => 'add_admin']); ?></li>
                    <li><?php echo $this->Html->link('下書き一覧', ['controller' => 'Blogs', 'action' => 'list_draft_admin']); ?></li>
                    <li><?php echo $this->Html->link('公開済み記事一覧', ['controller' => 'Blogs', 'action' => 'list_published_admin']); ?></li>
                </ul>
            </div>
        </div>
        <div class="menu">
            <h2 class="menu-title">Gallery</h2>
            <div class="mui-panel menu-box">
                <ul class="menu_list">
                    <li><?php echo $this->Html->link('新規投稿', ['controller' => 'Gallerys', 'action' => 'styleUploadAdmin']); ?></li>
                    <li><?php echo $this->Html->link('公開済みスタイル一覧', ['controller' => 'Gallerys', 'action' => 'styleListAdmin']); ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>