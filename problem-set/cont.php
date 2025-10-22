<?php
$str = "Hello";
preg_match_all('/[aeiou]/i', $str, $vowels);
preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $str, $consonants);
echo "Vowels: " . count($vowels[0]) . ", Consonants: " . count($consonants[0]);
?>
