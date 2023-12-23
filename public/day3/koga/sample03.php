<?php
print('現在は'.date('G時i分s秒').'です');
?><br>

<?php
date_default_timezone_set('asia/tokyo');
print('現在は'.date('G時i分s秒').'です');
?><br>

<?php
print('今日は'.date('Y年n月j日').'です');
?>