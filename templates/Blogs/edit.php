<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->script('//code.jquery.com/jquery-3.6.0.min.js') ?>
    <?= $this->Html->script('script') ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    <!-- Quill.jsのCDNリンク -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <title>美容室spica BLOG | 浦添市の似合わせカットと弱酸性薬剤の施術事例・ヘアケア情報</title>
    <meta name="description" content="Hair atelier spicaのブログでは、似合わせカットの施術例や弱酸性薬剤による髪にやさしい施術、美容室の日常、ヘアケアのコツなどを発信しています。">

    <style>
    body {
        padding-left: 200px !important;
        padding-right: 200px !important;
    }
    </style>
</head>
<body>
    <?php echo $this->element('administrator_header'); ?>

    <div class="top-image">
        <img src="/img/spica-logo.png" alt="spica-logo">
    </div>

<?= $this->Form->create($blog, ['type' => 'file']) ?>
<?= $this->Form->control('id', ['type' => 'hidden']) ?>
<?= $this->Form->control('title', ['label' => 'Title']) ?>

<!-- Quill.jsのエディタ -->
<div id="editor" style="height: 300px;"><?= $blog->content ?></div>
<?= $this->Form->control('content', ['type' => 'hidden', 'id' => 'content']) ?>

<!-- ステータスを保持するhiddenフィールド -->
<!-- デフォルトは下書き -->
<?= $this->Form->control('status', ['type' => 'hidden', 'value' => 'draft', ]) ?>

<div class="button-container">
<!-- 下書き保存は必要なさそうなので一旦削除 -->
<!-- <?= $this->Form->button('下書き保存', ['type' => 'button', 'id' => 'draftButton']) ?> -->
<?= $this->Form->button('確認', ['type' => 'button', 'id' => 'previewButton', 'class' => 'previewButton']) ?>
</div>
<?= $this->Form->end() ?>

<!-- Quill.jsと自動保存のスクリプト -->
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

    //////////////////// 画像アップロードの処理 ////////////////////
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

    //////////////////// 自動保存機能 ////////////////////
    let form = document.querySelector("form"); // フォーム要素
    let saveUrl = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'editAutosave']) ?>";    // 自動保存のURL
    let blogId = <?= isset($blog->id) ? $blog->id : 'null' ?>;  // 下書き記事のID

    // 🕒 デバウンス処理
    let autoSaveTimeout;
    function autoSave() {
        clearTimeout(autoSaveTimeout); // 前のタイマーをクリア
        autoSaveTimeout = setTimeout(() => { // 2秒待ってから実行
            let formData = new FormData(form);  // フォームデータを取得
            formData.append("content", quill.root.innerHTML);     // Quillエディタの内容を追加
            formData.append("status", document.querySelector("input[name='status']").value);    // ステータスを追加

            if (blogId) {   // 下書き記事のIDがある場合
                formData.append("id", blogId);  // IDを追加
            }

            fetch(saveUrl, {    // 自動保存のリクエスト
                method: "POST", // POSTメソッド
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
        }, 2000); // 2秒待つ
    }

    // 📝 Quillエディタの入力を監視
    quill.on("text-change", autoSave);

    // 📝 タイトル・ステータス変更を監視
    document.querySelector("#title").addEventListener("input", autoSave);   // タイトル
    document.querySelectorAll(".status-btn").forEach(button => {    // ステータスボタン
        button.addEventListener("click", autoSave); // クリック時
    });



    // 🔥 CSRFトークンを取得
    var csrfToken = document.querySelector("input[name='_csrfToken']").value;
    //////////////////// 確認ボタン押下の処理 ////////////////////
    document.getElementById("previewButton").addEventListener("click", function () {
        
        var title = document.getElementById("title").value;
        var content = quill.root.innerHTML;
        var status = "draft"; // 確認ボタンでは必ず下書き保存

        var formData = new FormData();
        formData.append("title", title);
        formData.append("content", content);
        formData.append("status", status);
        formData.append("_csrfToken", csrfToken);

        if (blogId) {
            formData.append("id", blogId);
        }

        // まず下書きを保存
        fetch("<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'autosave']) ?>", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log("確認ボタンによる下書き保存成功");
                blogId = data.id; // IDを更新

                // 下書き保存が完了したらプレビュー画面へ遷移
                var previewForm = document.createElement("form");
                previewForm.method = "post";
                previewForm.action = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'preview']) ?>";

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
        previewForm.action = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'preview']) ?>";

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


    document.getElementById("draftButton").addEventListener("click", function () {
        
        var title = document.getElementById("title").value;
        var content = quill.root.innerHTML;
        var status = "draft"; // 確認ボタンでは必ず下書き保存

        var formData = new FormData();
        formData.append("title", title);
        formData.append("content", content);
        formData.append("status", status);
        formData.append("_csrfToken", csrfToken);

        if (blogId) {
            formData.append("id", blogId);
        }

        // まず下書きを保存
        fetch("<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'autosave']) ?>", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log("確認ボタンによる下書き保存成功");
                blogId = data.id; // IDを更新

                // 下書き保存が完了したらプレビュー画面へ遷移
                var previewForm = document.createElement("form");
                previewForm.method = "post";
                previewForm.action = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'draftList']) ?>";

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
        previewForm.action = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'draftList']) ?>";

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
</body>
</html>
