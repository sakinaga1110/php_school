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
変数の値：<?php print($value);?>
Cookieの値：<?php print($_COOKIE['save_message']);?>

<!-- 変数($value)に保存（代入）した値はそのページでしか使えませんが、
クッキーは保存期間が設定できてその期間であれば他のページでも
取り出せるということを理解してほしいという意図で
このvalueは書いてるんだと思います。 -->
</pre>
</main>
</body>    
</html>
