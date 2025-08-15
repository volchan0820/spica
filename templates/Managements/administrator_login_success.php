<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>管理画面 | TOP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="/css/responsive/responsive_sm.css">
    <link rel="stylesheet" href="/css/responsive/responsive_xs.css">
    <link rel="stylesheet" href="/css/responsive/responsive_md.css">
    <link rel="stylesheet" href="/css/responsive/responsive_lg.css">

	<!-- フォントの高速化 -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- 使用フォント Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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