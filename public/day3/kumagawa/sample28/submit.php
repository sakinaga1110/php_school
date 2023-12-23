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
$file = $_FILES['picture'];
?>
ファイル名(name) ： <?php echo($file['name']); ?>
ファイルタイプ(type) ： <?php echo($file['type']); ?>
アップロードされたファイル(tmp_name) ： <?php echo($file['tmp_name']); ?>
エラー内容(error) ： <?php echo($file['error']); ?>
サイズ(size) ： <?php echo($file['size']); ?>

<?php
$ext = substr($argcfile['name'], -4);
if ($ext == '.gif' || $ext == '.jpg' || $ext == '.png') :
    $filePath = '.user_img/' . $file['name'];
    $succes =move_uploaded_file($file['tmp_name'], $filePath);

    if ($succes) :
?>
<img src="<?php echo($filePath); ?>">
        <?php else: ?>
※ ファイルアップロードに失敗しました
        <?php endif; ?>

<?php else: ?>
※拡張子が.gif, .jpeg, .jpg, .pngのファイルをアップロードしてください
<?php endif; ?>
</pre>
</main>
</body>    
</html>