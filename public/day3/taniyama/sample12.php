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

<form action="submit.php"method="get"
<label for="my_name">お名前：</label>
<input type="text" id="my_name" name="my_name"maxlength="255" value="">
<input type="submit"value="送信する">
</form>

お名前：<?php print(htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES));
?>


<?php print(htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES));?>
</main>
</body>    
</html>


