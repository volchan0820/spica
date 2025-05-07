document.addEventListener("DOMContentLoaded", function () {
    var quill = new Quill("#editor", {
        theme: "snow",
        modules: {
            toolbar: {
                container: [
                    [{ header: [1, 2, false] }],
                    ["bold", "italic", "underline"],
                    [{ list: "ordered" }, { list: "bullet" }],
                    ["link", "image"],
                ],
                handlers: {
                    image: imageHandler,
                },
            },
        },
    });

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
                let response = await fetch("/blogs/uploadImage", {
                    method: "POST",
                    body: formData,
                });

                let result = await response.json();

                if (result.url) {
                    var range = quill.getSelection();
                    quill.insertEmbed(range.index, "image", result.url);
                } else {
                    alert("画像のアップロードに失敗しました。");
                }
            } catch (error) {
                console.error("Upload failed:", error);
                alert("画像のアップロード中にエラーが発生しました。");
            }
        };
    }

    document.querySelector("form").onsubmit = function () {
        document.getElementById("content").value = quill.root.innerHTML;
    };
});
