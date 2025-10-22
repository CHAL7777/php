<?php
$arr = [1,2,3,5,6];
$result= array_filter($arr,function($n){return $n%2==0;

});
print_r($result);
?>
