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
  $week_name = ['日','月','火','水','木','金','土'];
  print($week_name[1]);

  print("\n");

  print('今日は'.$week_name[date('w')].'曜日です');
$week=1+3;
print("\n");
print($week_name[$week]);

  print("\n");

  $ages= ['10代以下','20代','30代','40代','50代','60代','70代'];


  print('私は'.$ages[2].'です');

  
?>
</pre>
</main>
</body>    
</html>
