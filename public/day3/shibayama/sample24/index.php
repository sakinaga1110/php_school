<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="sample24" content="サンプル24">
<body>

<?php
$value = '変数に保存した値です';
setcookie('save_message', 'Cookieに保存した値です', time() + 60 * 60 * 24 * 14);
?>

<main>
<h2>Cookieに値を保存する</h2>
<pre>
Cookieに値を保存しました。次のページに移動してみましょう。
&raquo; <a href="page02.php">Page02へ</a>
</pre>
</main>
</body>
</html>
