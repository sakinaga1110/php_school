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

<!-- for(初期化処理;条件;更新処理){
  繰り返す内容
}
<?php
  for ($i=1; $i<=365; $i++){
    print($i."\n");
  }
?> -->

<?php
   $i=1;
   while($i<=365){
     print($i."\n");
     $i++;
   }
   print("\n");
   $i=1;
   print($i);

   print("\n");
   $i= $i+1;
   print($i);

   print("\n");
   $i=$i+1;
   print($i);

 
   print("\n");
   print("\n");

   $i=365;
   while($i>=1){
     print($i."\n");
     $i--;
   }
?>
</pre>
</main>
</body>    
</html>
