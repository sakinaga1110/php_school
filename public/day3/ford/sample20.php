<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>半角関数に直して、数字であるかをチェックする</h2>
<pre>
  <h2>正しく入力されたとき</h2>
<?php
$age = '12';

$age = mb_convert_kana($age, 'n', 'UTF-8');
if (is_numeric($age)) {
  print($age . '歳');
} else {
  print('※ 年齢が数字ではありません');
}
?>
</pre>
<pre>
<h2>間違った入力のとき</h2>

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