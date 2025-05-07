<?php
// プレーンテキストのパスワード
$password = 'mugimuto#0511';

// Bcryptでハッシュ化
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

// ハッシュを表示
echo 'Hashed Password: ' . $passwordHash . "\n";
?>
