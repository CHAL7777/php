<?php
$str = "I love PHP and I love coding";
$words = explode(" ", $str);
$unique = array_unique($words);
$result = implode(" ", $unique);
echo $result;
?>
