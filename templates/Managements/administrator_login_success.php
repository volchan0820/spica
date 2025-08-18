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
                    <li><?php echo $this->Html->link('New Post', ['controller' => 'Blogs', 'action' => 'add_admin']); ?></li>
                    <li><?php echo $this->Html->link('Draft List', ['controller' => 'Blogs', 'action' => 'list_draft_admin']); ?></li>
                    <li><?php echo $this->Html->link('Published Articles', ['controller' => 'Blogs', 'action' => 'list_published_admin']); ?></li>
                </ul>
            </div>
        </div>
        <div class="menu">
            <h2 class="menu-title">Gallery</h2>
            <div class="mui-panel menu-box">
                <ul class="menu_list">
                    <li><?php echo $this->Html->link('Add Image', ['controller' => 'Gallerys', 'action' => 'styleUploadAdmin']); ?></li>
                    <li><?php echo $this->Html->link('Image List', ['controller' => 'Gallerys', 'action' => 'styleListAdmin']); ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>