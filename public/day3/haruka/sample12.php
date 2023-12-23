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
<h2>書式を整える‐sprintf</h2>
<pre>
<?php
$date = sprintf('%04d年 %02d月 %02d日', 2018, 1, 23);
print($date);
?>
</pre>
</main>
</body>
</html>