<?php
$file = file_get_contents('https://h2o-space.com/feed/json');
$json = Json_decode($file);

foreach ($json->items as $item) :
?>
・<a href="<?php print($item->url); ?>"><?php print($item->title); ?></a>
<?php
endforeach;
?>
