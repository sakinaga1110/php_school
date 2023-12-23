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
<h2>1から365の数字を表示する</h2>
<pre>
 <?php
for ($i=1; $i<=365; $i++) {
    print($i . "\n");
  
}
?> 
<?php

print('練習問題：100から１までの偶数だけを表示する');
print("\n");
for ($i=100; $i>=1; $i=$i-2) {
    print($i ."\n");
    }?>
</pre>
</main>
</body>    
</html>