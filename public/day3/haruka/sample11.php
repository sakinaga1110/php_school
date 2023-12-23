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
<h2>少数を整数に切り上げる・切り下げる‐ceil,floow,reound</h2>
<pre>
3,000円のものから、100円値引きした場合は、 <?php print(floor(100 / 3000 * 100)); ?>
％引きです

■その他の計算
元の計算式→<?php print(100 / 3000 * 100); ?>

切り上げ(ceil) →<?php print(ceil(100 / 3000 * 100)); ?> 

四捨五入(round) →<?php print(round(100 / 3000 * 100, 1)); ?>
</pre>
</main>
</body>
</html>