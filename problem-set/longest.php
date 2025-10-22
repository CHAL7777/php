<?php
$str = "Learning PHP is interesting";
$words = str_word_count($str, 1);
$longest = $words[array_search(max(array_map('strlen', $words)), array_map('strlen', $words))];
echo $longest;
?>
