<?php
$str = "PHP is great and PHP is fun";
$words = str_word_count(strtolower($str), 1);
$result = array_count_values($words);
print_r($result);
?>
