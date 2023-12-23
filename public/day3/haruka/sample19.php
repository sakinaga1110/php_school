ご予約日 :
<?php
foreach ($_POST['reserve'] as $reserve) {
  print(htmlspecoalchars($reserve, ENT_QUOTES) . ' ');
}
?>