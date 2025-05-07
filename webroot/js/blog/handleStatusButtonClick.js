function handleStatusButtonClick() {
    document.querySelectorAll('.status-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            var status = button.getAttribute('data-status');
            document.querySelector('input[name="status"]').value = status;  // hiddenフィールドにステータスを設定
            document.querySelectorAll('.status-btn').forEach(function (btn) {
                btn.classList.remove('active');  // すべてのボタンからアクティブクラスを削除
            });
            button.classList.add('active');  // クリックされたボタンにアクティブクラスを追加
        });
    });
}
