<?php
$a = [1, 2, 3];
$b = [3, 4, 5];
$merged = array_merge($a, $b);
$unique = array_unique($merged);
print_r($unique);
?>
