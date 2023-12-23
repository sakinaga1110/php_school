<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="sample17" content="サンプル17">
<body>
<main>
<h1>フォームに入力した内容を取得する</h1>

<pre>
お名前： <?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?>
</pre>
</main>
</body>
</html>
