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
<h2>画面に文章を表示する</h2>
<pre>
<?php
print('現在は'. date('G時　i分　s秒') . ' です。');
print("\n");
print('サーバーのデフォルトタイムゾーンはUTC（世界標準時）です。');
print("\n");
date_default_timezone_set('Asia/Tokyo');
print('日本時間は　'. date('G時　i分　s秒') . ' です。');
print("\n");
date_default_timezone_set('America/New_York');
print('The time is '. date('G:i:s') . ' in New York,USA');
print("\n");

// print(date('l, M j  Y'));
// print("\n");

?>
</pre>
</main>
</body>    
</html>