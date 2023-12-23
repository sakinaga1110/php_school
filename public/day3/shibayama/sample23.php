<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="sample23" content="サンプル23">
<body>
<main>
<h1>一行ごとにテーブルセルの色を変える・剰余算</h1>

<table>
<?php
for ($i=1; $i<=10; $i++) {
    if ($i % 2) {
        print('<tr style="background-color: #ccc">');
    } else {
        print('<tr>');
    }
    print('<td>' . $i . '行目</td>');
    print('<tr>');
}
?>
</table>
</main>
</body>
</html>