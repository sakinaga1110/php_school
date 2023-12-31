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
<h2>画面に現在の時刻を表示する</h2>
<pre>
<?php
date_default_timezone_set('Asia/Tokyo');
print('現在は ' . date('G時 i分 s秒') . ' です');
print("\n");
print('練習問題');
print("\n");
print('今日は'.date('Y年n月j日').'です');
?>
</pre>
</main>
</body>    
</html>