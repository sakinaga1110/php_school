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

<h2>23/10/25</h2>
<h2>3-1~4</h2>
<?php
date_default_timezone_set('Asia/Tokyo');
print('現在の時刻は'.date('G時 i分 s秒').'です');
print("\n");
print('今日は'.date('Y年 n月 j日').'です');
print("\n");
$today = new DateTime();
print('現在は'.$today->format('G時:i分:s秒').'です');
?>
<h2>23/10/26</h2>
<h2>3-5</h2>
<?php
$sum = 1000+350;
?>
合計金額は：<?php print($sum); ?>：円です
税込金額は:<?php print($sum*1.08);?>:円です
<?php 
$sum = 3+7; 
print($sum);
?>
<br>
<h2>3-6</h2>
<?php
$i = 1;
while($i <= 5){
    print($i . "\n");
    $i++;
}
?>
<?php
for($i = 1 ; $i <= 5 ;$i++)
{print($i . "\n");}
?>

<h2>23/10/27</h2>
<h2>3-7</h2>

<?php
$day = date('Y/n/j(D)',86400);
print($day."\n");
$day1 = date('Y/n/j(D)');
print($day1."\n");

$time = time();
print($time);
?>

<?php
$DAT = strtotime('+2DAY');
$DAY = date('Y/n/j(D)',$DAT);
print($DAY);
print("\n");
?>

<?php
for( $i=1 ; $i<=7 ; $i++){
    $timestamp = strtotime('+'.$i.'day');
    $DAY= date('Y/n/j(D)',$timestamp);
    print($DAY."\n");
}
?>

<?php
$i = 1;
while($i <= 7){
    $timestamp = strtotime("+".$i."day");
    $day = date('Y/n/j(D)',$timestamp);
    print($day."\n");
    $i++;
}
?>

</pre>
</main>
</body>    
</html>