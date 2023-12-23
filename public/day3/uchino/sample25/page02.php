<?php session_start(); ?>
<!doctype html>


<pre>
    セッションの値： <?php print($_SESSION['session_message']); ?>
    <?php session_unset(); ?>
</pre>
