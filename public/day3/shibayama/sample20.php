<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="sample20" content="サンプル20">
<body>
<main>
<h1>半角数字に直して、数字であるかをチェックする</h1>

<pre>
<?php
$age = 'あいうえお';

$age = mb_convert_kana($age, 'n', 'UTF-8');
if (is_numeric($age)) {
    print($age . '歳');
} else {
    print('※ 年齢が数字ではありません');
}
?>
</pre>
</main>
</body>
</html>
