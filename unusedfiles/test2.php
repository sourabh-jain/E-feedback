<?php

$query = $_SERVER['PHP_SELF'];
$path = pathinfo( $query );
$basename = $path['basename'];


echo $basename;



?>	