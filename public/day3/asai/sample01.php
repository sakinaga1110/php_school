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
<h2>Practice</h2>
<pre>
<?php
print('learning PHP'. "\n");
?>
<?php
print(123+2*5/3 . "\n");
?>
<?php
date_default_timezone_set('Asia/Tokyo');
print('current time'.date('G時i分s秒').'です' . "\n");
/* ここに、PHPのプログラムを記述します */
?>
<?php
$sum=100+10501+200;
?>
total : <?php print ($sum);?>円です
tax:<?php print($sum*1.08);?>円です
</pre>
</main>
</body>    
</html>