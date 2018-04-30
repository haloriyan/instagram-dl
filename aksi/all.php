<?php

error_reporting(1);
$url = $_COOKIE['profile'];

$get = file_get_contents("http://tools.riyansatria.tk/instagram/api.php?type=account&url=".$url);
$ig = json_decode($get, true);

foreach ($ig['image'] as $key => $value) {
	echo "<img src='".$value."'' width='300px' height='300px'>";
}