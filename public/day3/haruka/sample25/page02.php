<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    セッションの値: <?php print($_SESSION['session_message']); ?>
    <?php session_unset(); ?>
</pre>
</body>
</html>