<?php
$str = 'ahb acb aeb aeeb adcb axe';
$str2 = [];
preg_match_all("/a..b/", $str, $str2);
foreach ($str2[0] as $value) {
    echo($value . " ");
}

echo nl2br("\n");

$str = "a1b2c3";
$str2 = preg_replace_callback("/[0-9]+/", function(array $value){return ($value[0]) ** 3;}, $str);
echo($str2);
