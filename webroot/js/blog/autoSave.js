function autoSave(quill, form) {
    let autoSaveInterval = 10000;   // 10秒ごとに自動保存
    let saveUrl = "<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'autosave']) ?>";    //自動保存のURL

    var blogId = <?= isset($blog->id) ? $blog->id : 'null' ?>;

    function save() {
        let formData = new FormData(form);

        if (blogId) {  
            formData.append("id", blogId);
        }

        formData.append("content", quill.root.innerHTML);   
        var status = document.querySelector("input[name='status']").value; 
        formData.append("status", status);  

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
    }

    setInterval(save, autoSaveInterval);
}
