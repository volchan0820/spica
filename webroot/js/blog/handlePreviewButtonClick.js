function handlePreviewButtonClick() {
    var csrfToken = document.querySelector("input[name='_csrfToken']").value;
    document.getElementById("previewButton").addEventListener("click", function () {
        var title = document.getElementById("title").value;
        var content = quill.root.innerHTML;

        var previewForm = document.createElement("form");
        previewForm.method = "post";
        previewForm.action = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'preview']) ?>";

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

        var csrfInput = document.createElement("input");
        csrfInput.type = "hidden";
        csrfInput.name = "_csrfToken";
        csrfInput.value = csrfToken;
        previewForm.appendChild(csrfInput);

        document.body.appendChild(previewForm);
        previewForm.submit();
    });
}
