<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="sample18" content="サンプル18">
<body>
<main>
<h1>ラジオボタンの値を取得する</h1>

<pre>
性別: 
<?php 
print(htmlspecialchars($_POST['gender'], ENT_QUOTES)); 
?>
</pre>
</main>
</body>
</html>