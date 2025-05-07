function initializeQuillEditor() {
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
    return quill;
}
