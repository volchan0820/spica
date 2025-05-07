function setQuillContentToHiddenField(quill) {
    document.querySelector("form").addEventListener("submit", function () {
        document.getElementById("content").value = quill.root.innerHTML;
    });
}
