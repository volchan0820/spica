document.addEventListener("DOMContentLoaded", function () {
    var quill = initializeQuillEditor();
    setQuillContentToHiddenField(quill);
    autoSave(quill, document.querySelector("form"));
    handleStatusButtonClick();
    handlePreviewButtonClick();
});
