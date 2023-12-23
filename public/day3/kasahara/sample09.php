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

<!-- 通常の配列の場合、または連想配列の値だけ必要な場合
foreach(配列 as 値){
    繰り返す内容
}

連想配列のキーと値を取り出す場合
foreach(配列 as キー => 値){
    繰り返す内容
} -->
<?php
// 配列↓
$fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも',
    // キー↑       値↑
];

foreach ($fruits as $english => $japanese) {
    print ($english . ':' . $japanese . "\n");
}

print("\n");


$fruits=['りんご','ぶどう','レモン','トマト','もも'];
print($fruits[2]."\n");

print("\n");

$key = [
    'win' => 'Windows',
    'mac' => 'Macintosh',
    'iphone' => 'iPhone',
    'ipad' => 'iPad',
    'android' => 'Android',
];
foreach ($key as $kii => $atai) {
    print ($kii . ':' . $atai . "\n");
}

?>

<!-- 「変数」は、値を入れておく箱
「配列」は、複数の変数（箱）をくっつけたもの
「要素」は、複数の変数をくっつけたものの中にある「変数」
「配列の添字」は、「何番目の箱！」を指定するときの目印。※0から始まる
「連想配列」は、「好きな名前を添字にしていいよ」な配列 -->

</pre>
</main>
</body>    
</html>
