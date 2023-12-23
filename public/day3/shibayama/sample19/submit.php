<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="sample19" content="サンプル19">
<body>
<main>
<h1>チェックボックスの値を取得する</h1>

<pre>
ご予約日:
<?php
foreach ((array)$_POST['reserve'] as $reserve) {
    print(htmlspecialchars($reserve, ENT_QUOTES) . ' ');
}
?>
</pre>
</main>
</body>
</html>