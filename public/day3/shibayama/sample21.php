<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="sample21" content="サンプル21">
<body>
<main>
<h1>郵便番号を正規表現を使ってチェックする</h1>

<pre>
<?php
$zip = '987-6543';

$zip = mb_convert_kana($zip, 'a', 'UTF-8');

if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
    print('郵便番号: 〒' . $zip);
} else {
    print('※郵便番号を 123-4567の形式でご記入ください');
}
?>
</pre>
</main>
</body>
</html>
