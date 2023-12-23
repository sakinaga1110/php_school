<?php
session_start();
$_SESSION['session_message'] = '値をセッションに保存しました';
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="sample25" content="サンプル25">
<body>
<main>
<h2>セッションに値を保存する</h2>
<pre>
セッションに値を保存しました。次のページに移動してみましょう。
&raquo; <a href="page02.php">page02へ</a>
</pre>
</main>
</body>
</html>

