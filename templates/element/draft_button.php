<button id="draftButton">下書き保存</button>

<?php $this->start('script'); ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("draftButton").addEventListener("click", function () {
        
        var title = document.getElementById("title").value;
        var content = quill.root.innerHTML;
        var status = "draft"; // 確認ボタンでは必ず下書き保存

        var formData = new FormData();
        formData.append("title", title);
        formData.append("content", content);
        formData.append("status", status);
        formData.append("_csrfToken", "<?= $this->request->getAttribute('csrfToken') ?>");

        if (typeof blogId !== "undefined") {
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
                blogId = data.id; // IDを更新

                var previewForm = document.createElement("form");
                previewForm.method = "post";
                previewForm.action = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'index']) ?>";

                var idInput = document.createElement("input");
                idInput.type = "hidden";
                idInput.name = "id";
                idInput.value = blogId;
                previewForm.appendChild(idInput);

                var csrfInput = document.createElement("input");
                csrfInput.type = "hidden";
                csrfInput.name = "_csrfToken";
                csrfInput.value = "<?= $this->request->getAttribute('csrfToken') ?>";
                previewForm.appendChild(csrfInput);

                document.body.appendChild(previewForm);
                previewForm.submit();
            } else {
                alert("下書きの保存に失敗しました。プレビューできません。");
            }
        })
        .catch(error => {
            console.error("下書き保存エラー:", error);
        });
    });
});
</script>
<?php $this->end(); ?>
