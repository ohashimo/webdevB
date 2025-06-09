<?php
$str = "12345678";
$rtn = preg_match("/\A\d{7}\z/u", $str);
preg_match("/\d{7}/u", $str, $matche);
$str2 = "1234567あ";
$rtn2 = preg_match("/\d{7}/u", $str2, $matche2);
$str3 = "111-1234567";
$rtn3 = preg_match("/\d{7}/u", $str3, $matche3);


echo"結果１";
var_dump($rtn);
echo"結果２";
var_dump($rtn2);
echo"結果３";
var_dump($rtn3);
echo"結果３";
