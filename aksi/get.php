<?php

$uri = $_COOKIE['uri'];

$get = file_get_contents("http://haloriyan/instagram/api.php?tipe=post&url=".$uri);

$pos = json_decode($get, true);

$link = $pos['image'];

echo '<img src="'.$link.'">';