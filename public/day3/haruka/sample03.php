<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS   -->
<!-- link rel="stylesheet" href="css/style.css" -->

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normak">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>画面に現在の時刻を表示する</h2>
<pre>
<?php
date_default_timezone_set('Asia/Tokyo');
print('現在の時間は '. date('G時 i分 s秒') . ' です');
?>
<br>
<?php
print(date('G'));
print('時G');
print("\n");
print(date('i'));
print('分i');
print("\n");
print(date('s'));
print('秒s');
?>
<br>
<?php 
print('今日は '. date('Y年 m月 j日'). 'です');
?>

</pre>
</main>
</body>
</html>