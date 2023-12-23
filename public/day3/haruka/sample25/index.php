<?php
session_start();
$_SESSION['session_message'] = '値をセッションに保存しました';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    セッションに値を保存しました。次のページに移動してみましょう。
    &raquo; <a href="page02.php">Pageへ</a>
  </pre>
</body>
</html>