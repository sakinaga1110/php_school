<?php session_start(); ?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="sample25" content="サンプル25">
<body>
<main>
<h2>セッションに値を保存する</h2>
<pre>
セッションの値: <?php print($_SESSION['session_message']); ?>
<?php session_unset(); ?>
</pre>
</main>
</body>
</html>
