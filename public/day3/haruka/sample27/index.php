<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>2つのトップページにランダムで誘導する_raud</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">Aのページ
</h1>    
</header>

<main>
<pre>
<?php
if (rand(0, 1) == 0) {
  header('Location: a.html');
} else {
  header('Location: b.html');
}
?>
</pre>
</main>
</body>    
</html>