<?php
$arr = [1, 2, 3, 5, 6];
$result = array_map(function($n) {
    return $n ** 2;  // square each number
}, $arr);

print_r($result);
?>
