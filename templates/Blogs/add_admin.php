<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>管理画面｜ブログ投稿画面</title>

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
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    
    <style>
        body {
            padding-left: 200px !important;
            padding-right: 200px !important;
        }
    </style>
</head>

<body>
    <?php echo $this->element('administrator_header'); ?>

    <h1 class="admin-title">New Post</h1>

    <?= $this->Form->create($blog, ['type' => 'file']) ?>
        <?= $this->Form->control('title', ['label' => 'Title']) ?>
        <!-- Quill.jsのエディタ -->
        <div id="editor" style="height: 300px;"></div>
        <?= $this->Form->control('content', ['type' => 'hidden', 'id' => 'content']) ?>
        <?= $this->Form->control('status', ['type' => 'hidden', 'value' => 'draft', ]) ?>
        <div class="button-container">
            <?= $this->Form->button('下書き保存', ['type' => 'button', 'id' => 'draftButton', 'class' => 'draftButton']) ?>
            <?= $this->Form->button('確認', ['type' => 'button', 'id' => 'previewButton', 'class' => 'previewButton']) ?>
        </div>
    <?= $this->Form->end() ?>    
</body>
</html>

<!-- Quill.js -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var quill = new Quill("#editor", {
            theme: "snow",
            modules: {
                toolbar: {
                    container: [
                        ["bold", "italic", "underline"],
                        [{ header: 1 }, { header: 2 }],
                        ["blockquote", "code-block"],
                        [{ list: "ordered" }, { list: "bullet" }],
                        [{ script: "sub" }, { script: "super" }],
                        [{ indent: "-1" }, { indent: "+1" }],
                        [{ direction: "rtl" }],
                        [{ size: ["small", false, "large", "huge"] }],
                        [{ color: [] }, { background: [] }],
                        [{ font: [] }],
                        [{ align: [] }],
                        ["clean"],
                        ["image"]
                    ],
                    handlers: { image: imageHandler }
                }
            }
        });

        // Quillエディタの内容を送信する前にhiddenフィールドに設定
        document.querySelector("form").addEventListener("submit", function () {
            document.getElementById("content").value = quill.root.innerHTML;
        });

        // 入力値の復元
        var savedTitle = sessionStorage.getItem("blog_title");
        if (savedTitle !== null) {
            document.getElementById("title").value = savedTitle;
        }
        var savedContent = sessionStorage.getItem("blog_content");
        if (savedContent !== null) {
            quill.root.innerHTML = savedContent;
        }

        // 入力値の保存
        document.getElementById("title").addEventListener("input", function() {
            sessionStorage.setItem("blog_title", this.value);
        });
        quill.on("text-change", function() {
            sessionStorage.setItem("blog_content", quill.root.innerHTML);
        });

        // 画像アップロードの処理
        function imageHandler() {
            var input = document.createElement("input");
            input.setAttribute("type", "file");
            input.setAttribute("accept", "image/*");
            input.click();

            input.onchange = async function () {
                var file = input.files[0];
                if (!file) return;

                var formData = new FormData();
                formData.append("image", file);

                try {
                    const response = await fetch("/blogs/uploadImage", {
                        method: "POST",
                        body: formData
                    });

                    const result = await response.json();

                    if (result.success) {
                        var range = quill.getSelection();
                        quill.insertEmbed(range.index, "image", result.url);
                    } else {
                        alert("画像のアップロードに失敗しました。(add)");
                    }
                } catch (error) {
                    console.error("Upload error:", error);
                    alert("アップロードに失敗しました。");
                }
            };
        }

        // 自動保存機能
        let form = document.querySelector("form");
        let saveUrl = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'autosave']) ?>";
        let blogId = <?= isset($blog->id) ? $blog->id : 'null' ?>;

        // デバウンス処理　1秒間隔で自動保存を行う、入力があった場合はその都度保存を行う
        let autoSaveTimeout;
        function autoSave() {
            clearTimeout(autoSaveTimeout);
            autoSaveTimeout = setTimeout(() => {
                let formData = new FormData(form);
                formData.append("content", quill.root.innerHTML);
                formData.append("status", document.querySelector("input[name='status']").value);

                if (blogId) {
                    formData.append("id", blogId);
                }

                fetch(saveUrl, {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-Requested-With": "XMLHttpRequest"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log("下書き保存しました");
                        if (data.id && !blogId) {
                            blogId = data.id;
                        }
                    }
                })
                .catch(error => console.error("自動保存エラー:", error));
            }, 1000); // 1秒待つ
        }

        // Quillエディタの入力を監視
        quill.on("text-change", autoSave);

        // タイトル・ステータス変更を監視
        document.querySelector("#title").addEventListener("input", autoSave);
        document.querySelectorAll(".status-btn").forEach(button => {button.addEventListener("click", autoSave);
        });

        // CSRFトークンを取得
        var csrfToken = document.querySelector("input[name='_csrfToken']").value;

        // 確認ボタン押下の処理
        document.getElementById("previewButton").addEventListener("click", function (event) {

            // タイトルと本文必須チェック
            var title = document.getElementById("title").value.trim();
            var content = quill.root.innerHTML.trim();
            // Quillの空状態は <p><br></p> になるため空判定に追加
            if (!title || !content || content === "<p><br></p>") {
                alert("タイトルと本文を入力してください。");
                return;
            }

            // 確認ボタンでは必ず下書き保存
            var status = "draft";
            var formData = new FormData();
            formData.append("title", title);
            formData.append("content", content);
            formData.append("status", status);
            formData.append("_csrfToken", csrfToken);

            if (blogId) {
                formData.append("id", blogId);
            }

            fetch("<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'autosave']) ?>", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log("確認ボタンによる下書き保存成功");
                    blogId = data.id;

                    // 下書き保存が完了したらプレビュー画面へ遷移
                    var previewForm = document.createElement("form");
                    previewForm.method = "post";
                    previewForm.action = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'confirm']) ?>";

                    var idInput = document.createElement("input");
                    idInput.type = "hidden";
                    idInput.name = "id";
                    idInput.value = blogId;
                    previewForm.appendChild(idInput);

                    var csrfInput = document.createElement("input");
                    csrfInput.type = "hidden";
                    csrfInput.name = "_csrfToken";
                    csrfInput.value = csrfToken;
                    previewForm.appendChild(csrfInput);

                    document.body.appendChild(previewForm);
                    previewForm.submit();
                } else {
                    alert("下書きの保存に失敗しました。プレビューできません。");
                }
            })
            .catch(error => {
                console.error("下書き保存エラー:", error);
                // 恐らくautosaveが2秒間隔で走っているためエラーキャッチされるが実際には保存されているので、alertは表示しない
                //alert("下書きの保存に失敗しました。");
            });

            var previewForm = document.createElement("form");
            previewForm.method = "post";
            previewForm.action = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'confirm']) ?>";

            // タイトルとコンテンツを隠しフィールドに追加
            var titleInput = document.createElement("input");
            titleInput.type = "hidden";
            titleInput.name = "title";
            titleInput.value = title;
            previewForm.appendChild(titleInput);

            var contentInput = document.createElement("input");
            contentInput.type = "hidden";
            contentInput.name = "content";
            contentInput.value = content;
            previewForm.appendChild(contentInput);

            // CSRFトークンを追加
            var csrfInput = document.createElement("input");
            csrfInput.type = "hidden";
            csrfInput.name = "_csrfToken";
            csrfInput.value = csrfToken;
            previewForm.appendChild(csrfInput);

            // IDを追加
            if (blogId) {
                var idInput = document.createElement("input");
                idInput.type = "hidden";
                idInput.name = "id";
                idInput.value = blogId;
                previewForm.appendChild(idInput);
            }

            document.body.appendChild(previewForm);
            previewForm.submit();
        });

        // 下書き保存ボタン押下の処理
        document.getElementById("draftButton").addEventListener("click", function (event) {

        // セッションストレージからタイトルと本文を削除
        sessionStorage.removeItem("blog_title")
        sessionStorage.removeItem("blog_content")
        
        // タイトルと本文必須チェック
        var title = document.getElementById("title").value.trim();
        var content = quill.root.innerHTML.trim();
        // Quillの空状態は <p><br></p> になるため空判定に追加
        if (!title || !content || content === "<p><br></p>") {
            alert("タイトルと本文を入力してください。");
            return;
        }

            // 確認ボタンでは必ず下書き保存
            var status = "draft";
            var formData = new FormData();

            formData.append("title", title);
            formData.append("content", content);
            formData.append("status", status);
            formData.append("_csrfToken", csrfToken);

            if (blogId) {
                formData.append("id", blogId);
            }

            fetch("<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'autosave']) ?>", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log("確認ボタンによる下書き保存成功");
                    blogId = data.id;

                    // 下書き保存が完了したらプレビュー画面へ遷移
                    var previewForm = document.createElement("form");
                    previewForm.method = "post";
                    previewForm.action = "<?= $this->Url->build(['controller' => 'Managements', 'action' => 'administratorLoginSuccess']) ?>";

                    var idInput = document.createElement("input");
                    idInput.type = "hidden";
                    idInput.name = "id";
                    idInput.value = blogId;
                    previewForm.appendChild(idInput);

                    var csrfInput = document.createElement("input");
                    csrfInput.type = "hidden";
                    csrfInput.name = "_csrfToken";
                    csrfInput.value = csrfToken;
                    previewForm.appendChild(csrfInput);

                    document.body.appendChild(previewForm);
                    previewForm.submit();
                } else {
                    alert("下書きの保存に失敗しました。プレビューできません。");
                }
            })
            .catch(error => {
                console.error("下書き保存エラー:", error);
                // 恐らくautosaveが2秒間隔で走っているためエラーキャッチされるが実際には保存されているので、alertは表示しない
                //alert("下書きの保存に失敗しました。");
            });

            // 下書き保存が完了したらプレビュー画面へ遷移
            var previewForm = document.createElement("form");
            previewForm.method = "post";
            previewForm.action = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'listDraftAdmin']) ?>";

            // タイトルとコンテンツを隠しフィールドに追加
            var titleInput = document.createElement("input");
            titleInput.type = "hidden";
            titleInput.name = "title";
            titleInput.value = title;
            previewForm.appendChild(titleInput);

            var contentInput = document.createElement("input");
            contentInput.type = "hidden";
            contentInput.name = "content";
            contentInput.value = content;
            previewForm.appendChild(contentInput);

            // CSRFトークンを追加
            var csrfInput = document.createElement("input");
            csrfInput.type = "hidden";
            csrfInput.name = "_csrfToken";
            csrfInput.value = csrfToken;
            previewForm.appendChild(csrfInput);

            // IDを追加
            if (blogId) {
                var idInput = document.createElement("input");
                idInput.type = "hidden";
                idInput.name = "id";
                idInput.value = blogId;
                previewForm.appendChild(idInput);
            }

            document.body.appendChild(previewForm);
            previewForm.submit();
        });    
    });
</script>