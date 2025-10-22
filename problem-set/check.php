<?php
$str = "Level";
$clean = strtolower(preg_replace("/[^a-z]/", "", $str));
if ($clean == strrev($clean)) {
    echo "Palindrome";
} else {
    echo "Not Palindrome";
}
?>
