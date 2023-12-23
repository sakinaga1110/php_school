<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

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
  for ($i=1; $i<=365; $i++){
    $day=date('n/j(D)',strtotime('+'.$i.'day'));
    print($day."\n");
  }
  // string date(string $format [,int $timestamp=time()])
  // $day_aftertomorrow=strtotime('+2day');
  // $day=date('n/j(D)'.$day_aftertomorrow);
  // print($day."\n");
  // print("\n");
  
  $day_after_tomorrow=strtotime('+2day');
  $day=date('n/j(D)',$day_after_tomorrow);
  print($day."\n");
  ?>
</pre>
</main>
</body>    
</html>
