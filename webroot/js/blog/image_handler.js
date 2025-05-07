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
