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
print('learning PHP')
?>
<?php
print(123+2*5/3);
?>
<?php
date_default_timezone_set('Asia/Tokyo');
print('current time'.date('G時i分s秒').'です');
/* ここに、PHPのプログラムを記述します */
?>
</pre>
</main>
</body>    
</html>